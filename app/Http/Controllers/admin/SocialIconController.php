<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SocialIcon\CreateRequest;
use App\Http\Requests\SocialIcon\UpdateRequest;
use App\Models\Socialicon;

class SocialIconController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $socialicons=Socialicon::paginate(5);
        return view('admin.socialicons.index',compact('socialicons'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.socialicons.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateRequest $request)
    {
        $data=$request->validated();
        Socialicon::create($data);
        return redirect()->route('admin.socialicons.index');
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
    public function edit(Socialicon $socialicon)
    {
        return view('admin.socialicons.update',compact('socialicon'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Socialicon $socialicon)
    {
        $data=$request->validated();
        $socialicon->update($data);
        return redirect()->route('admin.socialicons.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Socialicon $socialicon)
    {
        $socialicon->delete();
        return redirect()->back();
    }
}
