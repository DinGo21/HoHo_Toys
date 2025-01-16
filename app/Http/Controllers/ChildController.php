<?php

namespace App\Http\Controllers;

use App\Models\Child;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class ChildController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->action === 'delete'){
            $this->destroy($request->id);
            
            return Redirect::to(route('santa'));
        }
        $children = Child::all();

        return view('santa', compact('children'));
    }

     /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('createChildForm');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $childs = Child::create([
            'name' => $request->name,
            'surname' => $request->surname,
            'photo' => $request->photo,
            'age' => $request->age,
            'naughty' => $request->naughty,
        ]);
        $childs->save();

        return Redirect::to(route('santa'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $child = Child::findOrFail($id);

        return view('santaShow', compact('child'));
    }

    public function list()
    {
        return view('createChildForm');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $child = Child::find($id);

        return view('editChildForm', compact('child'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $child = Child::find($id);

        $child -> update([
            'name' => $request->name,
            'surname' => $request->surname,
            'photo' => $request->photo,
            'age' => $request->age,
            'naughty' => $request->naughty,
        ]);

        $child -> save();
        return Redirect::to('santa');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $child = Child::find($id);

        $child -> delete();

    }
}
