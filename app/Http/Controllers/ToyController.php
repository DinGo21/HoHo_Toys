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
        }
        
        $toys = Toy::all();
        $toyCounts = $this->ageRangeCounter(); 

        return view('elf', compact('toys', 'toyCounts')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('createToyForm');
    }

    /**
     * Store a newly created resource in stormin_age.
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

    public function ageRangeCounter()
    {
        $toys = Toy::all();
        $counts = [0, 0, 0, 0, 0, 0, 0];

        foreach ($toys as $toy) {
            switch (true) {
                case ($toy->min_age == 0):
                    $counts[0]++;
                    break;
                case ($toy->min_age == 3):
                    $counts[1]++;
                    break;
                case ($toy->min_age == 7):
                    $counts[2]++;
                    break;
                case ($toy->min_age == 12):
                    $counts[3]++;
                    break;
                case ($toy->min_age == 16):
                    $counts[4]++;
                    break;
                case ($toy->min_age == 18):
                    $counts[5]++;
                    break;
            }
        }
        $counts[6] = $counts[0] + $counts[1] + $counts[2] + $counts[3] + $counts[4] + $counts[5];
        return $counts;
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
     * Update the specified resource in stormin_age.
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
     * Remove the specified resource from stormin_age.
     */
    public function destroy(string $id)
    {
        $toy = Toy::find($id);

        $toy -> delete();
    }
    
}

