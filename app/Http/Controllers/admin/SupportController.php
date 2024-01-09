<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Support\CreateRequest;
use App\Http\Requests\Support\UpdateRequest;
use App\Models\Support;
use App\Helpers\Crud;
use Illuminate\Support\Facades\File;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class SupportController extends Controller
{

    protected $crud;

    public function __construct(Crud $crud)
    {
        $this->crud = $crud;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $supports = Support::paginate(10);
        return view('admin.supports.index', compact('supports'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $locales = LaravelLocalization::getSupportedLocales();
        return view('admin.supports.create', compact('locales'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateRequest $request)
    {
        $data = $request->validated();
        $data['image'] = $this->crud->common_image('Supports', $request, 'image');
        Support::create($data);
        return redirect()->route('admin.supports.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Support $support)
    {
        $locales = LaravelLocalization::getSupportedLocales();
        return view('admin.supports.update', compact('support', 'locales'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Support $support)
    {
        $data = $request->validated();
        if ($request->hasFile('icon')) {
            File::delete($support->image);
            $data['icon'] = $this->crud->common_image('Supports', $request, 'icon');
        }
        $support->update($data);
        return redirect()->route('admin.supports.index');
    }

    public function destroy(Support $support)
    {
        $support->delete();
        return redirect()->back();
    }
}
