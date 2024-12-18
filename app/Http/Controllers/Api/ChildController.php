<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Child;
use Illuminate\Http\Request;

class ChildController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $children = Child::all();

        return response()->json($children, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $child = Child::create([
            'name' => $request->name,
            'surname' => $request->surname,
            'photo' => $request->photo,
            'age' => $request->age,
            'naughty' => $request->naughty,
        ]);

        $child->save();

        return response()->json($child, 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $child = Child::findOrFail($id);

        return response()->json($child, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $child = Child::findOrFail($id);

        $child->update([
            'name' => $request->name,
            'surname' => $request->surname,
            'photo' => $request->photo,
            'age' => $request->age,
            'naughty' => $request->naughty,
        ]);
        
        $child->save();

        return response()->json($child, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $child = Child::findOrFail($id);
        $child->delete();
    }
}
