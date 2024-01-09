<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Vacancy\CreateRequest;
use App\Http\Requests\Vacancy\UpdateRequest;
use App\Models\Vacancy;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class VacancyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vacancies=Vacancy::paginate(10);
        return view('admin.vacancy.index',compact('vacancies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $locales = LaravelLocalization::getSupportedLocales();
        return view('admin.vacancy.create',compact('locales'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateRequest $request)
    {
       $data=$request->validated();
        Vacancy::create($data);
       return redirect()->route('admin.vacancy.index');
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
    public function edit(Vacancy $vacancy)
    {
        $locales = LaravelLocalization::getSupportedLocales();
        return view('admin.vacancy.update',compact('vacancy','locales'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Vacancy $vacancy)
    {
        $data=$request->validated();
        $vacancy->update($data);
        return redirect()->route('admin.vacancy.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vacancy $vacancy)
    {
        $vacancy->delete();
        return redirect()->back();
    }
}
