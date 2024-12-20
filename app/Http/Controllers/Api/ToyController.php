<?php

namespace App\Http\Controllers\Api;

use App\Models\Toy;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class ToyController extends Controller
{
    public function index()
    {
        $toy= Toy::all();

        return response()->json($toy, 200);
    }

    public function store(Request $request)
    {
        $toy = Toy::create([
            'name' => $request->name,
            'photo' => $request->photo,
            'description' => $request->description,
            'min_age' => $request->min_age
        ]);

        $toy->save();

        return response()->json($toy, 200);
    }

    public function show(string $id)
    {
        $toy = Toy::findOrFail($id);

        return response()->json($toy, 200);
    }

    public function update(Request $request, string $id)
    {
        $toy = Toy::findOrFail($id);

        $toy->update([
            'name' => $request->name,
            'photo' => $request->photo,
            'description' => $request->description,
            'min_age' => $request->min_age
        ]);

        $toy->save();

        return response()->json($toy, 200);
    }

    public function destroy(string $id)
    {
        $toy = Toy::findOrFail($id);
        $toy->delete();
    }
}
