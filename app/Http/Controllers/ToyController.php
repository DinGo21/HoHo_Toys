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
        $count0 = 0;
        $count3 = 0;
        $count7 = 0;
        $count12 = 0;
        $count16 = 0;
        $count18 = 0;
    
        foreach ($toys as $toy) {
            switch (true) {
                case ($toy->min_age == 0):
                    $count0++;
                    break;
                case ($toy->min_age == 3):
                    $count3++;
                    break;
                case ($toy->min_age == 7):
                    $count7++;
                    break;
                case ($toy->min_age == 12):
                    $count12++;
                    break;
                case ($toy->min_age == 16):
                    $count16++;
                    break;
                case ($toy->min_age == 18):
                    $count18++;
                    break;
            }
        }

        $totalCount = $count0 + $count3 + $count7 + $count12 + $count16 + $count18;
        return [$count0, $count3, $count7, $count12, $count16, $count18, $totalCount];
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

