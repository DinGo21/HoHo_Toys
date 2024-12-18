<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Child extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'surname',
        'photo',
        'age',
        'naughty',
    ];

    public function toys(){
        return $this->belongsToMany(Toy::class, 'child_toy');
    }
}
