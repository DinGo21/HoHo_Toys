<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Toy extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'photo',
        'description',
        'min_age',
    ];

    public function children(){
        return $this->belongsToMany(Child::class, 'child_toy');
    }
}
