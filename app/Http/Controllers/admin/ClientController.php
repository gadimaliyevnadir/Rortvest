<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Client\CreateRequest;
use App\Http\Requests\Client\UpdateRequest;
use App\Models\Client;
use App\Helpers\Crud;
use Illuminate\Support\Facades\File;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class ClientController extends Controller
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
        $clients = Client::query()->paginate(10);
        return view('admin.clients.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $locales = LaravelLocalization::getSupportedLocales();
        return view('admin.clients.create', compact('locales'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateRequest $request)
    {
        $data = $request->validated();
        $data['image'] = $this->crud->common_image('Clients', $request, 'image');
        Client::create($data);
        return redirect()->route('admin.clients.index');
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
    public function edit(Client $client)
    {
        $locales = LaravelLocalization::getSupportedLocales();
        return view('admin.clients.update', compact('client', 'locales'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Client $client)
    {
        $data = $request->validated();
        if ($request->hasFile('image')) {
            File::delete($client->image);
            $data['image'] = $this->crud->common_image('Clients', $request, 'image');
        }
        $client->update($data);
        return redirect()->route('admin.clients.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Client $client)
    {
        $client->delete();
        return redirect()->back();
    }
}
