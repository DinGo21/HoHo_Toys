<?php

namespace App\Http\Controllers;

use App\Models\Toy;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class ToyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->action === 'delete'){
            $this->destroy($request->id);
            
            return Redirect::to(route('elf'));
        }else if ($request->action === 'edit'){
            $this->edit($request->id);

            return Redirect::to(route('elf'));
        }
        $toys = Toy::all();

        return view('elf', compact('toys'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('createToyForm');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $toys = Toy::create([
            'name' => $request->name,
            'photo' => $request->photo,
            'description' => $request->description,
            'min_age' => $request->min_age,
        ]);
        $toys->save();

        return Redirect::to(route('elf'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $toy = Toy::findOrFail($id);

        return view('elfShow', compact('toy'));
    }

     /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $toy = Toy::find($id);

        return view('editToyForm', compact('toy'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $toys = Toy::find($id);

        $toys -> update([
            'name' => $request->name,
            'photo' => $request->photo,
            'description' => $request->description,
            'min_age' => $request->min_age,
        ]);

        $toys -> save();
        return Redirect::to('elf');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $toy = Toy::find($id);

        $toy -> delete();
    }
}
