<?php

namespace App\Http\Controllers\Api;

use App\Models\Toy;
use App\Models\Child;
use App\Models\ChildToy;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
            'country' => $request->country
        ]);

        $child->save();

        return response()->json($child, 200);
    }

    public function gift_tickets($child): void
    {
        $tickets = Toy::whereIn("id", [28, 29, 30])->get();

        $child->toys()->attach([$tickets[rand(0, count($tickets) - 1)]->id]);
    }

    public function gift_charcoal($child): void
    {
        $charcoal = Toy::where("name", "LIKE", "%Carbón%")->get();

        $child->toys()->attach([$charcoal[rand(0, count($charcoal) - 1)]->id]);
    }

    public function get_toys($child)
    {
        switch (true) {
            case ($child->age >= 0 && $child->age < 3):
                $toys = Toy::where("min_age", "=", "0")->get()->toArray();

                break;
            case ($child->age >= 3 && $child->age < 7):
                $toys = Toy::where("min_age", "=", "3")->get()->toArray();

                break;
            case ($child->age >= 7 && $child->age < 12):
                $toys = Toy::where("min_age", "=", "7")->get()->toArray();

                break;
            case ($child->age >= 12 && $child->age < 16):
                $toys = Toy::where("min_age", "=", "12")->get()->toArray();
                break;
            case ($child->age >= 16 && $child->age < 18):
                $toys = Toy::where("min_age", "=", "16")->get()->toArray();
                break;
            default:
                $toys = Toy::find(1)->get()->toArray();
                break;
        }
        return $toys;
    }

    public function gift_toys($child)
    {
        $toys = $this->get_toys($child);
        if (empty($toys)) {
            return;
        }

        $random = rand(0, count($toys) - 1);
        $child->toys()->attach([$toys[$random]['id']]);

        unset($toys[$random]);
        $toys = array_values($toys);

        if (!empty($toys)) {
            $random = rand(0, count($toys) - 1);
            $child->toys()->attach([$toys[$random]['id']]);
        }
    }

    public function list()
    {
        $childToys = ChildToy::all();
        
        foreach($childToys as $childToy){
            $childToy->delete();
        }

        $children = Child::all();

        foreach ($children as $child) {
            if ($child->age >= 18) {
                $this->gift_tickets($child);
                continue;
            }
            if ($child->naughty) {
                $this->gift_charcoal($child);
                continue;
            }
            $this->gift_toys($child);
        }

        return response('The list has been generated successfully.');
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
            'country' => $request->country
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
