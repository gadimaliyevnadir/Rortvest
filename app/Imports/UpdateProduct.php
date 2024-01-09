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


class UpdateProduct implements ToModel
{
    public function model(array $row)
    {
        try {
            $languages = ['az', 'en', 'ru'];
            $attributeColumnCount = Attribute::count() + 3;
            foreach ($languages as $language) {
                $product = $this->findSubProductOption($row[0], $language);
            }
            if (!$product) {
                $product = new Product();
            }

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
                for ($i = 4; $i <= $attributeColumnCount; $i++) {
                    if ($row[$i] != null) {
                        foreach ($languages as $language) {
                            $attribute_option = $this->findAttributeOption($row[$i], $language);
                            if ($attribute_option) {
                                $existingAttributeOption = Attributeoptions_product::where('product_id', $product->id)
                                    ->where('attributeoption_id', $attribute_option->id)
                                    ->first();
                                if ($existingAttributeOption) {
                                    $existingAttributeOption->product_id = $product->id;
                                    $existingAttributeOption->attributeoption_id = $attribute_option->id;
                                    $existingAttributeOption->save();
                                } else {
                                    $newAttributeOption = new Attributeoptions_product();
                                    $newAttributeOption->product_id = $product->id;
                                    $newAttributeOption->attributeoption_id = $attribute_option->id;
                                    $newAttributeOption->save();
                                }
                                break;
                            }
                        }
                    }else{
                        break;
                    }
                }
            } else {
                flash()->addFlash('warning', 'Xəbərdarlıq', 'Məhsul yenilənərkən xəta baş verdi', ['timeout' => 3000, 'position' => 'top-center']);
            }
            flash()->addFlash('success', 'Uğurlu Yenilənmə', 'Məhsul uğurla yeniləndi', ['timeout' => 3000, 'position' => 'top-center']);

        } catch (\Exception $e) {
            $product = null;
            flash()->addFlash('warning', 'Xəbərdarlıq', $e->getMessage(), ['timeout' => 3000, 'position' => 'top-center']);
        }
        return $product;
    }

    protected function findAttributeOption($name, $language)
    {
        return Attribute_option::where("name->$language", 'LIKE', '%' . trim($name) . '%')->first();
    }

    protected function findSubCategoryOption($name, $language)
    {
        return Subcategory::where("title->$language", 'LIKE', '%' . trim($name) . '%')->first();
    }

    protected function findSubProductOption($name, $language)
    {
        return Product::where("title->$language", 'LIKE', '%' . trim($name) . '%')->first();
    }

    protected function findBestCategoryOption($name, $language)
    {
        return BestCategory::where("title->$language", 'LIKE', '%' . trim($name) . '%')->first();
    }
}
