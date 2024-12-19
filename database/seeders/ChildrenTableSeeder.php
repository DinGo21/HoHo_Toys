<?php

namespace Database\Seeders;

use App\Models\Child;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ChildrenTableSeeder extends Seeder
{

    public function run(): void
    {

        $child = new Child();
        $child->name = "Sofía";
        $child->surname = "Ramírez";
        $child->photo = "https://res.cloudinary.com/dg28513f0/image/upload/v1734627932/children/8.png";
        $child->age = 6;
        $child->naughty = true;
        $child->save();

        $child = new Child();
        $child->name = "Mateo";
        $child->surname = "López";
        $child->photo = "https://res.cloudinary.com/dg28513f0/image/upload/v1734627931/children/20.png";
        $child->age = 3;
        $child->naughty = false;
        $child->save();

        $child = new Child();
        $child->name = "Valentina";
        $child->surname = "Torres";
        $child->photo = "https://res.cloudinary.com/dg28513f0/image/upload/v1734627932/children/5.png";
        $child->age = 12;
        $child->naughty = false;
        $child->save();

        $child = new Child();
        $child->name = "Sebastián";
        $child->surname = "Martínez";
        $child->photo = "https://res.cloudinary.com/dg28513f0/image/upload/v1734627933/children/1.png";
        $child->age = 15;
        $child->naughty = true;
        $child->save();

        $child = new Child();
        $child->name = "Camila";
        $child->surname = "González";
        $child->photo = "https://res.cloudinary.com/dg28513f0/image/upload/v1734627931/children/17.png";
        $child->age = 8;
        $child->naughty = true;
        $child->save();

        $child = new Child();
        $child->name = "Paula";
        $child->surname = "Hernández";
        $child->photo = "https://res.cloudinary.com/dg28513f0/image/upload/v1734627932/children/9.png";
        $child->age = 18;
        $child->naughty = false;
        $child->save();

        $child = new Child();
        $child->name = "Isabella";
        $child->surname = "Pérez";
        $child->photo = "https://res.cloudinary.com/dg28513f0/image/upload/v1734627932/children/7.png";
        $child->age = 10;
        $child->naughty = false;
        $child->save();

        $child = new Child();
        $child->name = "Emilia";
        $child->surname = "Castro";
        $child->photo = "https://res.cloudinary.com/dg28513f0/image/upload/v1734627933/children/4.png";
        $child->age = 7;
        $child->naughty = true;
        $child->save();

        $child = new Child();
        $child->name = "Martina";
        $child->surname = "Rojas";
        $child->photo = "https://res.cloudinary.com/dg28513f0/image/upload/v1734627932/children/11.png";
        $child->age = 5;
        $child->naughty = false;
        $child->save();

        $child = new Child();
        $child->name = "Victoria";
        $child->surname = "Silva";
        $child->photo = "https://res.cloudinary.com/dg28513f0/image/upload/v1734627931/children/18.png";
        $child->age = 13;
        $child->naughty = false;
        $child->save();

        $child = new Child();
        $child->name = "Daniel";
        $child->surname = "Cruz";
        $child->photo = "https://res.cloudinary.com/dg28513f0/image/upload/v1734627932/children/10.png";
        $child->age = 9;
        $child->naughty = false;
        $child->save();

        $child = new Child();
        $child->name = "Luna";
        $child->surname = "Moreno";
        $child->photo = "https://res.cloudinary.com/dg28513f0/image/upload/v1734627932/children/14.png";
        $child->age = 1;
        $child->naughty = false;
        $child->save();

        $child = new Child();
        $child->name = "Gabriel";
        $child->surname = "Navarro";
        $child->photo = "https://res.cloudinary.com/dg28513f0/image/upload/v1734627933/children/2.png";
        $child->age = 16;
        $child->naughty = true;
        $child->save();

        $child = new Child();
        $child->name = "Zoe";
        $child->surname = "Fernández";
        $child->photo = "https://res.cloudinary.com/dg28513f0/image/upload/v1734627931/children/16.png";
        $child->age = 4;
        $child->naughty = true;
        $child->save();

        $child = new Child();
        $child->name = "Thiago";
        $child->surname = "Méndez";
        $child->photo = "https://res.cloudinary.com/dg28513f0/image/upload/v1734627931/children/19.png";
        $child->age = 11;
        $child->naughty = false;
        $child->save();

        $child = new Child();
        $child->name = "Oliver";
        $child->surname = "Peña";
        $child->photo = "https://res.cloudinary.com/dg28513f0/image/upload/v1734627931/children/15.png";
        $child->age = 0;
        $child->naughty = true;
        $child->save();

        $child = new Child();
        $child->name = "Pablo";
        $child->surname = "Soto";
        $child->photo = "https://res.cloudinary.com/dg28513f0/image/upload/v1734627933/children/3.png";
        $child->age = 18;
        $child->naughty = false;
        $child->save();

    }
}
