<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Toy;

class ToyController extends Controller
{
    public function index()
    {
        return response()->json(Toy::all(), 200);
    }

    public function store(Request $request)
    {
        $toy = Toy::create([
            'name' => $request->name,
            'photo' => $request->photo,
            'description' => $request->description,
            'min_age' => $request->min_age
        ]);

        return response()->json($toy, 200);
    }

    public function show(string $id)
    {
        return response()->json(Toy::find($id), 200);
    }

    public function update(Request $request, string $id)
    {
        $toy = Toy::update([
            'name' => $request->name,
            'photo' => $request->photo,
            'description' => $request->description,
            'min_age' => $request->min_age
        ]);

    }

    public function destroy(string $id)
    {
        Toy::find($id)->delete();
    }
}
