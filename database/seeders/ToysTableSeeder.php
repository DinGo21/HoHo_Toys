<?php

namespace Database\Seeders;

use App\Models\Toy;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ToysTableSeeder extends Seeder
{
    public function run(): void
    {
        $toy = new Toy();
        $toy->name = "LEGO Wicked Emerald City";
        $toy->photo = "https://res.cloudinary.com/albertokz/image/upload/v1734346341/Toys/ohmepjw9vbhmxnzm0bjg.png";
        $toy->description = "LEGO Wicked - Bienvenidos a Emerald City - 75684, un set de 945 piezas ambientado en Emerald City e inspirado en la película musical Wicked, con minipersonajes de Glinda, Elphaba, The Wizard, Madame Morrible y Fiyero.";
        $toy->min_age = "12";
        $toy->save();

        $toy = new Toy();
        $toy->name = "Lego Friends Hot Dog Truck";
        $toy->photo = "https://res.cloudinary.com/albertokz/image/upload/v1734346341/Toys/cdp2gm5vrflmpgosnnqe.png";
        $toy->description = "LEGO Friends - Camión de perritos calientes - 42633, un set de 100 piezas para aprender a construir e incluye un camión construible, 2 minipersonajes, el personaje de un gato y accesorios para fomentar el juego de interpretación.";
        $toy->min_age = "0";
        $toy->save();

        $toy = new Toy();
        $toy->name = "Bebés Llorones Dreamy Doll";
        $toy->photo = "https://res.cloudinary.com/albertokz/image/upload/v1734346343/Toys/iymb9bsyciikgprkrwlc.png";
        $toy->description = "Bebés Llorones - Loving Care Fantasy Dreamy, una muñeca interactiva que, con su pelo y ojos pintados, parece un bebé de verdad.";
        $toy->min_age = "0";
        $toy->save();

        $toy = new Toy();
        $toy->name = "Kickerball Efectos Balón";
        $toy->photo = "https://res.cloudinary.com/albertokz/image/upload/v1734346341/Toys/gzuxjizmoewnxy5k59ye.png";
        $toy->description = "Kickerball - Balón con efecto (Varios Colores), un balón para conseguir grandes disparos con efectos increíbles, perfecto para llevar al parque y dar unos toques con amigos y familiares.";
        $toy->min_age = "0";
        $toy->save();

        $toy = new Toy();
        $toy->name = "Balón Fútbol Eurocopa 24";
        $toy->photo = "https://res.cloudinary.com/albertokz/image/upload/v1734346343/Toys/eigqyvhqg7qj7tw3dfww.png";
        $toy->description = "El 'Mondo - Balón de fútbol Eurocopa 2024' es el complemento perfecto para las tardes de juego al aire libre. Este balón capta la atención de los niños y los anima a mantenerse activos disfrutando del ejercicio físico. Está hecho con materiales duraderos que garantizan horas y horas de diversión.";
        $toy->min_age = "0";
        $toy->save();

        $toy = new Toy();
        $toy->name = "Mattel Games Baño Boom";
        $toy->photo = "https://res.cloudinary.com/albertokz/image/upload/v1734346343/Toys/j0fd2ag18nzslbeypulv.png";
        $toy->description = "Mattel Games - Baño Boom - Juego de Mesa, un juego que incluye 1 retrete, 1 desatascador, 1 dado y 10 fichas.";
        $toy->min_age = "0";
        $toy->save();

        $toy = new Toy();
        $toy->name = "Tamagotchi Mascota Virtual";
        $toy->photo = "https://res.cloudinary.com/albertokz/image/upload/v1734346340/Toys/bv3gmrwlien4t71kif13.png";
        $toy->description = "Tamagotchi original (varios colores), una divertida mascota virtual. Despierta a tu Tamagotchi para cuidar de él, necesitará: Alimento, Higiene, Cuidados cuando esté malito y muchísimo tiempo de juego.";
        $toy->min_age = "7";
        $toy->save();

        $toy = new Toy();
        $toy->name = "Music Star Karaoke Set";
        $toy->photo = "https://res.cloudinary.com/albertokz/image/upload/v1734346341/Toys/dokdqxmaozhnbahbdtml.png";
        $toy->description = "Music Star - Karaoke con dos micrófonos, un karaoke todo en uno, karaoke, bola de discoteca y altavoz. ¡Es hora de cantar con tus amigos con este Karaoke de Music Star! Es compatible con Youtube, Spotify y las principales apps de karaoke.";
        $toy->min_age = "12";
        $toy->save();

        $toy = new Toy();
        $toy->name = "Boli Loco Juego Dibujos";
        $toy->photo = "https://res.cloudinary.com/albertokz/image/upload/v1734346342/Toys/sarna6mj4c1ain36wlgz.png";
        $toy->description = "Boli Loco, un fantástico juego de adivinanzas y de dibujo. Este boli lleva tu imaginación al límite.";
        $toy->min_age = "7";
        $toy->save();

        $toy = new Toy();
        $toy->name = "No Asustes a la Abuela";
        $toy->photo = "https://res.cloudinary.com/albertokz/image/upload/v1734346341/Toys/jk5azrqjejfhvvofxsbv.png";
        $toy->description = "No Asustes a la Abuela, un juego en el que deberás coger la galleta pero sin despertar a la abuela. A la abuela le encantan las galletas y ¡quiere todas solo para ella!";
        $toy->min_age = "0";
        $toy->save();

        $toy = new Toy();
        $toy->name = "Hundir la Flota Classic";
        $toy->photo = "https://res.cloudinary.com/albertokz/image/upload/v1734346341/Toys/v2xkjve37pyzd80f8xij.png";
        $toy->description = "Hundir la Flota, el juego para vivir la emoción de estar al mando de una flota de guerra. ¡Diviértete con tu juego clásico preferido, estés donde estés!";
        $toy->min_age = "7";
        $toy->save();

        $toy = new Toy();
        $toy->name = "No Sin Mi Gato Cartas";
        $toy->photo = "https://res.cloudinary.com/albertokz/image/upload/v1734346340/Toys/mmc90tr9au1ggahwrmbo.png";
        $toy->description = "No Sin Mi Gato Juego de Cartas: una aventura emocionante y divertida que encantará a toda la familia. Ayuda a los gatos callejeros a encontrar un hogar mientras resuelves un intrincado laberinto urbano.";
        $toy->min_age = "7";
        $toy->save();

        $toy = new Toy();
        $toy->name = "Play-Doh Cocina Creativa";
        $toy->photo = "https://res.cloudinary.com/albertokz/image/upload/v1734346340/Toys/w9odjyhtzz7keoksrjla.png";
        $toy->description = "Play-Doh - Set de cocina y restaurante Play-Doh Kitchen Creations. Un set perfecto para pequeños aspirantes a chef con creativas comidas de plastilina Play-Doh.";
        $toy->min_age = "3";
        $toy->save();

        $toy = new Toy();
        $toy->name = "Music Star Piano Azul";
        $toy->photo = "https://res.cloudinary.com/albertokz/image/upload/v1734346341/Toys/vnckb39xcpiy4xsjvb4f.png";
        $toy->description = "Music Star - Teclado con taburete azul, un teclado con 37 teclas para jóvenes compositores. ¿Listo para convertirte en un verdadero músico? Toca y canta con el nuevo teclado de Music Star y lo conseguirás.";
        $toy->min_age = "0";
        $toy->save();

        $toy = new Toy();
        $toy->name = "Wood'n Play Elefante Carro";
        $toy->photo = "https://res.cloudinary.com/dg28513f0/image/upload/v1734636833/elefante_is8mat.jpg";
        $toy->description = "Wood'n Play - Carrito animal (varios modelos), un pequeño animal de madera con ruedas para llevarlo a pasear y vivir grandes aventuras. Este juguete es fácil de sostener y manipular, ayudando a los niños a desarrollar sus habilidades motoras.";
        $toy->min_age = "0";
        $toy->save();

        $toy = new Toy();
        $toy->name = "Wood'n Play León Carro";
        $toy->photo = "https://res.cloudinary.com/dg28513f0/image/upload/v1734636833/leon_c1h6u5.jpg";
        $toy->description = "Wood'n Play - Carrito animal (varios modelos), un pequeño animal de madera con ruedas para llevarlo a pasear y vivir grandes aventuras. Este juguete es fácil de sostener y manipular, ayudando a los niños a desarrollar sus habilidades motoras.";
        $toy->min_age = "3";
        $toy->save();

        $toy = new Toy();
        $toy->name = "Wood'n Play Cocodrilo Carro";
        $toy->photo = "https://res.cloudinary.com/albertokz/image/upload/v1734346343/Toys/xjrzaqylonmhplxuntqp.png";
        $toy->description = "Wood'n Play - Carrito animal (varios modelos), un pequeño animal de madera con ruedas para llevarlo a pasear y vivir grandes aventuras. Este juguete es fácil de sostener y manipular, ayudando a los niños a desarrollar sus habilidades motoras.";
        $toy->min_age = "0";
        $toy->save();

        $toy = new Toy();
        $toy->name = "Máquina Pinball Electrónica";
        $toy->photo = "https://res.cloudinary.com/albertokz/image/upload/v1734346341/Toys/i5nqostrvgcaaaef74wi.png";
        $toy->description = "Sun and Sport - Máquina de pinball electrónica con pies. Transformará tu hogar en una auténtica sala de arcade. Solo tienes que lanzar la bola y empezar a jugar, intentando conseguir la mayor puntuación posible. Este juguete cuenta con sonidos y efectos de luz impresionantes.";
        $toy->min_age = "7";
        $toy->save();

        $toy = new Toy();
        $toy->name = "LEGO Guantelete Infinito";
        $toy->photo = "https://res.cloudinary.com/albertokz/image/upload/v1734346341/Toys/tfufb6lsyblhx7fraaf4.png";
        $toy->description = "LEGO Superhéroes - Guantelete del infinito - 76191, un set de 590 piezas. Esta recreación de ladrillos LEGO del icónico Guante de Thanos del Infinito seguramente atraerá la atención y el interés donde sea que se muestre.";
        $toy->min_age = "12";
        $toy->save();

        $toy = new Toy();
        $toy->name = "Motor & Co Coche Iron Claw";
        $toy->photo = "https://res.cloudinary.com/albertokz/image/upload/v1734346341/Toys/lfzjl0yckkoyb0ctjvuu.png";
        $toy->description = "Motor & Co - Coche Iron Claw 4 x 4 (varios colores), un coche todoterreno con suspensión para vivir grandes aventuras. Ideal para crear nuevas aventuras con tu vehículo todoterreno y desarrollar la imaginación.";
        $toy->min_age = "7";
        $toy->save();

        $toy = new Toy();
        $toy->name = "Oso de Peluche Gigante";
        $toy->photo = "https://res.cloudinary.com/albertokz/image/upload/v1734346340/Toys/zdhytawbv1d107ahesz8.png";
        $toy->description = "Oso de peluche de 76 cm, un gran oso de peluche con lazo marrón en el cuello.";
        $toy->min_age = "3";
        $toy->save();

        $toy = new Toy();
        $toy->name = "Lámpara Sombrero de Paja";
        $toy->photo = "https://res.cloudinary.com/albertokz/image/upload/v1734346340/Toys/kn0zaa4rtv9avbktaa0j.png";
        $toy->description = "One Piece - Lámpara sombrero de paja, una lámpara ideal para todos los aficionados al anime One Piece y para aquellos que buscan lámparas únicas y originales. Esta lámpara tiene la forma del icónico sombrero de paja de Luffy y cuenta con tecnología LED.";
        $toy->min_age = "12";
        $toy->save();

        $toy = new Toy();
        $toy->name = "Pack Peppa y Familia Pig";
        $toy->photo = "https://res.cloudinary.com/albertokz/image/upload/v1734346340/Toys/y0q2gxcrhkwy9rvkdpyk.png";
        $toy->description = "Peppa Pig - Peppa y su familia (Varios modelos), un pack de figuras compuesto por Peppa Pig, Mamá Pig, Papá Pig y el pequeño George.";
        $toy->min_age = "0";
        $toy->save();

        $toy = new Toy();
        $toy->name = "Guardianes del Mar Kit";
        $toy->photo = "https://res.cloudinary.com/albertokz/image/upload/v1734346340/Toys/fg1p9atcsvqi8mhmspkv.png";
        $toy->description = "Science4you - Guardianes del Mar, un juego con una misión especial: ¡Salvar los océanos! Con las 17 actividades y 30 contenidos de este kit científico podrás aprender todo sobre los océanos, el impacto del medio ambiente y la ciencia.";
        $toy->min_age = "12";
        $toy->save();

        $toy = new Toy();
        $toy->name = "Carbón Negro Travieso";
        $toy->photo = "https://res.cloudinary.com/dg28513f0/image/upload/v1737104783/mierdini%C3%B1os/n0e04bf0i6996dv1z8qw.png";
        $toy->description = "Para los niños que han sido muy traviesos este año. Te dejará todas las manos y la cara llenas de hollín y se reirán de ti por no bañarte, otaku.";
        $toy->min_age = "12";
        $toy->save();

        $toy = new Toy();
        $toy->name = "Carbón Rosa Poca Espabila";
        $toy->photo = "https://res.cloudinary.com/dg28513f0/image/upload/v1737104783/mierdini%C3%B1os/xytsas0pns0uh7eb8umt.png";
        $toy->description = "Para los que no le caen bien a Santa y les falta espabilar un poco. El año que viene pides menos cosas y eres menos repelente en la carta.";
        $toy->min_age = "12";
        $toy->save();

        $toy = new Toy();
        $toy->name = "Carbón Marrón Granuja";
        $toy->photo = "https://res.cloudinary.com/dg28513f0/image/upload/v1737104783/mierdini%C3%B1os/pyrpbppmwxn5clayhiok.png";
        $toy->description = "Para los que no se han portado lo suficientemente bien. Pórtate mejor este año o es lo que te toca, espabilado.";
        $toy->min_age = "12";
        $toy->save();

        $toy = new Toy();
        $toy->name = "Exploración Viaje Lunar";
        $toy->photo = "https://res.cloudinary.com/dg28513f0/image/upload/v1737108647/mierdini%C3%B1os/mucnqga4yg3zzuiwuzb8.jpg";
        $toy->description = "Un Viaje Fuera de Este Mundo. Vive una experiencia inolvidable con este viaje espacial inspirado en la fascinación por el cosmos. Al estilo de las grandes aventuras, siente cómo sería caminar en la superficie de la Luna, explorar cráteres y contemplar la Tierra desde el espacio.";
        $toy->min_age = "18";
        $toy->save();

        $toy = new Toy();
        $toy->name = "Aventura Warner Héroes";
        $toy->photo = "https://res.cloudinary.com/dg28513f0/image/upload/v1737111950/mierdiniños/batnotthb1shhuz4cfov.jpg";
        $toy->description = "Prepárate para un día lleno de acción en el parque Warner, donde las historias de superhéroes y villanos cobran vida. Desde montañas rusas hasta espectáculos inspirados en películas icónicas, vive una experiencia única.";
        $toy->min_age = "18";
        $toy->save();

        $toy = new Toy();
        $toy->name = "Viaje Mágico a Disney";
        $toy->photo = "https://res.cloudinary.com/dg28513f0/image/upload/v1737108647/mierdini%C3%B1os/evhgndk4exj7lxtokdpc.jpg";
        $toy->description = "Un Mundo de Magia y Sueños. Sumérgete en el mágico mundo de Disney, donde los cuentos de hadas se hacen realidad. Explora el icónico castillo, disfruta de atracciones inspiradas en tus personajes favoritos y déjate sorprender por espectáculos llenos de emoción.";
        $toy->min_age = "18";
        $toy->save();
    }
}

