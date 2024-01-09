<?php

namespace App\Http\Controllers\admin;
use App\Helpers\Crud;
use App\Http\Controllers\Controller;
use App\Http\Requests\BrendLogo\CreateRequest;
use App\Http\Requests\BrendLogo\UpdateRequest;
use App\Models\Brendlogo;
use Illuminate\Support\Facades\File;


class BrendController extends Controller
{
    protected $crud;

    public function __construct(Crud $crud)
    {
        $this->crud=$crud;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $brends= Brendlogo::paginate(10);
       return view('admin.brends.index',compact('brends'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.brends.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateRequest $request)
    {
        $data=$request->validated();
        $data['image']=$this->crud->common_image('Brends',$request,'image');
        Brendlogo::create($data);
        return redirect()->route('admin.brends.index');
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
    public function edit(Brendlogo $brend)
    {
        return view('admin.brends.update',compact('brend'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Brendlogo $brend)
    {

        $data=$request->validated();
        if ($request->hasFile('image')) {
            File::delete($brend->image);
            $data['image'] = $this->crud->common_image('brends', $request, 'image');
        }
        $brend->update($data);
        return redirect()->route('admin.brends.index');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Brendlogo $brend)
    {
        $brend->delete();
        return redirect()->back();
    }
}
