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
        $child->name = "Valeria";
        $child->surname = "Dobado";
        $child->photo = "https://res.cloudinary.com/dg28513f0/image/upload/v1737104782/mierdini%C3%B1os/f0r5ep7wjrfu9vfne0pe.png";
        $child->age = 1;
        $child->naughty = false;
        $child->country = "Spain";
        $child->save();

        $child = new Child();
        $child->name = "Pepe";
        $child->surname = "Gavilán";
        $child->photo = "https://res.cloudinary.com/dg28513f0/image/upload/v1737101523/children/w5lbczci4gmeefebvyov.png";
        $child->age = 0;
        $child->naughty = true;
        $child->country = "Netherlands";
        $child->save();

        $child = new Child();
        $child->name = "Rodrigo";
        $child->surname = "Lastra";
        $child->photo = "https://res.cloudinary.com/dg28513f0/image/upload/v1737104783/mierdini%C3%B1os/lgkt8bllmg4t5gxigozu.png";
        $child->age = 3;
        $child->naughty = false;
        $child->country = "Portugal";
        $child->save();

        $child = new Child();
        $child->name = "Rebeca";
        $child->surname = "Bernal";
        $child->photo = "https://res.cloudinary.com/dg28513f0/image/upload/v1737104784/mierdini%C3%B1os/fwj779fnud2lvfrpyvyb.png";
        $child->age = 12;
        $child->naughty = false;
        $child->country = "Germany";
        $child->save();

        $child = new Child();
        $child->name = "Diego";
        $child->surname = "Santamaría";
        $child->photo = "https://res.cloudinary.com/dg28513f0/image/upload/v1737104783/mierdini%C3%B1os/vzpmcuoeiiehlbe0o341.png";
        $child->age = 15;
        $child->naughty = true;
        $child->country = "Venezuela";
        $child->save();

        $child = new Child();
        $child->name = "Talena";
        $child->surname = "Barbosa";
        $child->photo = "https://res.cloudinary.com/dg28513f0/image/upload/v1737104783/mierdini%C3%B1os/mfkjdtj3go4xxzucmkgj.png";
        $child->age = 8;
        $child->naughty = true;
        $child->country = "Brazil";
        $child->save();

        $child = new Child();
        $child->name = "Mim";
        $child->surname = "Jorrison";
        $child->photo = "https://res.cloudinary.com/dg28513f0/image/upload/v1737104802/mierdini%C3%B1os/ixjmhgtmuar5clt1nivb.png";
        $child->age = 18;
        $child->naughty = true;
        $child->country = "United States";
        $child->save();

        $child = new Child();
        $child->name = "Earl";
        $child->surname = "Hickey";
        $child->photo = "https://res.cloudinary.com/dg28513f0/image/upload/v1737106479/mierdini%C3%B1os/wzqwurkv7lnscthrzjba.png";
        $child->age = 14;
        $child->naughty = true;
        $child->country = "Japan";
        $child->save();

        $child = new Child();
        $child->name = "Emilia";
        $child->surname = "Castro";
        $child->photo = "https://res.cloudinary.com/dg28513f0/image/upload/v1737106287/mierdini%C3%B1os/xpx6rqohn258f89j2uyu.png";
        $child->age = 7;
        $child->naughty = true;
        $child->country = "United States";
        $child->save();

        $child = new Child();
        $child->name = "Macaulay";
        $child->surname = "Culkin";
        $child->photo = "https://res.cloudinary.com/dg28513f0/image/upload/v1737104595/children/oaxukkrcaurupyeo1rby.png";
        $child->age = 5;
        $child->naughty = true;
        $child->country = "Mexico";
        $child->save();

        $child = new Child();
        $child->name = "Victor";
        $child->surname = "Silva";
        $child->photo = "https://res.cloudinary.com/dg28513f0/image/upload/v1737103629/children/nw9aqrfnzibccwqtko9r.png";
        $child->age = 13;
        $child->naughty = false;
        $child->country = "Italy";
        $child->save();

        $child = new Child();
        $child->name = "Daniel";
        $child->surname = "Cruz";
        $child->photo = "https://res.cloudinary.com/dg28513f0/image/upload/v1737104596/children/h5lvms9vmpf7piw2yy1h.png";
        $child->age = 9;
        $child->naughty = false;
        $child->country = "France";
        $child->save();

        $child = new Child();
        $child->name = "Sofía";
        $child->surname = "Ramírez";
        $child->photo = "https://res.cloudinary.com/dg28513f0/image/upload/v1737104784/mierdini%C3%B1os/hom8ysmb70vrmxkobkjs.png";
        $child->age = 6;
        $child->naughty = true;
        $child->country = "Colombia";
        $child->save();

        $child = new Child();
        $child->name = "Gabriel";
        $child->surname = "Navarro";
        $child->photo = "https://res.cloudinary.com/dg28513f0/image/upload/v1737104595/children/r3dsg1yuuwa4kdspnt2g.png";
        $child->age = 18;
        $child->naughty = true;
        $child->country = "South Korea";
        $child->save();

        $child = new Child();
        $child->name = "Aladin";
        $child->surname = "Torres";
        $child->photo = "https://res.cloudinary.com/dg28513f0/image/upload/v1737104782/mierdini%C3%B1os/wkgeprmashf7qskgftgj.png";
        $child->age = 9;
        $child->naughty = true;
        $child->country = "India";
        $child->save();

        $child = new Child();
        $child->name = "Thiago";
        $child->surname = "Méndez";
        $child->photo = "https://res.cloudinary.com/dg28513f0/image/upload/v1737104602/children/yflv0lo2c1alpa5mczby.png";
        $child->age = 5;
        $child->naughty = false;
        $child->country = "South Africa";
        $child->save();

        $child = new Child();
        $child->name = "María";
        $child->surname = "Dolores";
        $child->photo = "https://res.cloudinary.com/dg28513f0/image/upload/v1737104595/children/yk7b8boklp1y7uzxyrze.png";
        $child->age = 18;
        $child->naughty = false;
        $child->country = "Norway";
        $child->save();

    }
}
