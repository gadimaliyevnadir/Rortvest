<?php

namespace App\Imports;

use App\Models\Attribute;
use App\Models\Attribute_option;
use App\Models\Attributeoptions_product;
use App\Models\BestCategory;
use App\Models\Category;
use App\Models\Product;
use App\Models\Subcategory;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\ToModel;

class ImportProduct implements ToModel
{
    public function model(array $row)
    {
        try {
            $languages = ['az', 'en', 'ru'];
            $product = new Product();
            $product->title = $row[0];
            $product->desc = $row[1];

            foreach ($languages as $language) {
                $subcategory = $this->findSubCategoryOption($row[2], $language);
                if ($subcategory) {
                    $product->category_id = $subcategory->id;
                    break;
                }
            }

            foreach ($languages as $language) {
                $bestCategory = $this->findBestCategoryOption($row[3], $language);
                if ($bestCategory) {
                    $product->best_id = $bestCategory->id;
                    break;
                }
            }

            if ($product->save()) {
                $attributeColumnCount = Attribute::count() + 3;
                for ($i = 4; $i <= $attributeColumnCount; $i++) {
                    if ($row[$i] !== null) {
                        foreach ($languages as $language) {
                            $attribute_option = $this->findAttributeOption($row[$i], $language);
                            if ($attribute_option) {
                                $attribute_option_product = new Attributeoptions_product();
                                $attribute_option_product->product_id = $product->id;
                                $attribute_option_product->attributeoption_id = $attribute_option->id;
                                $attribute_option_product->save();
                                break;
                            }
                        }
                    } else {
                        break;
                    }
                }
                flash()->addFlash('success', 'Uğurlu yüklənmə', 'Məhsul uğurla yükləndi', ['timeout' => 3000, 'position' => 'top-center']);
            } else {
                flash()->addFlash('warning', 'Xəbərdarlıq', 'Məhsul yüklənərkən xəta baş verdi', ['timeout' => 3000, 'position' => 'top-center']);
            }
        } catch (\Exception $e) {
            flash()->addFlash('warning', 'Xəbərdarlıq', $e->getMessage(), ['timeout' => 3000, 'position' => 'top-center']);
        }

        return $product;
    }

    protected function findAttributeOption($name, $language)
    {
        return Attribute_option::where("name->$language", 'LIKE', '%' . $name . '%')->first();
    }

    protected function findSubCategoryOption($name, $language)
    {
        return Subcategory::where("title->$language", 'LIKE', '%' . $name . '%')->first();
    }

    protected function findBestCategoryOption($name, $language)
    {
        return BestCategory::where("title->$language", 'LIKE', '%' . $name . '%')->first();
    }
}
