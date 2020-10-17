<?php

use App\Clan;
use App\Juego;
use App\Pais;
use App\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ClansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Clan::truncate();
        Juego::truncate();
        Pais::truncate();
        User::truncate();

        $juego = new Juego;
        $juego -> nombre = "Juego 1";
        $juego -> save();
       
        $juego = new Juego;
        $juego -> nombre = "Juego 2";
        $juego -> save();

        $pais = new Pais;
        $pais -> nombre = "Pais 1";
        $pais ->save();

        $pais = new Pais;
        $pais -> nombre = "Pais 2";
        $pais ->save();

        $user = new User;
        $user -> name = "Alex";
        $user -> email = "freddyalexander2.chavez@gmail.com";
        $user -> password = bcrypt('123');
        $user ->save();

        $user = new User;
        $user -> name = "Freddy";
        $user -> email = "freddyalexander.chavez@gmail.com";
        $user -> password = bcrypt('123');
        $user ->save();


        $clan = new Clan;
        $clan -> titulo = "Titulo 1 de prueba";
        $clan -> user_id = 1;
        $clan -> descripcion = "Descripcion 1 de prueba";
        $clan -> requisitos = "Requisitos de prueba";
        $clan -> edadminima = 15;
        $clan -> edadmaxima = 18;        
        $clan -> discord ="Discord 1";
        $clan -> whatsapp = "WhatsApp 1";
        $clan -> published_at = Carbon::now()->subDays(4);
        $clan -> save();

        $clan = new Clan;
        $clan -> titulo = "Titulo 2 de prueba";
        $clan -> user_id = 1;
        $clan -> descripcion = "Descripcion 2 de prueba";
        $clan -> requisitos = "Requisitos de prueba";
        $clan -> edadminima = 15;
        $clan -> edadmaxima = 18;
        $clan -> discord ="Discord 2";
        $clan -> whatsapp = "WhatsApp 2";
        $clan -> published_at = Carbon::now()->subDays(3);
        $clan -> save();

        $clan = new Clan;
        $clan -> titulo = "Titulo 3 de prueba";
        $clan -> user_id = 2;
        $clan -> descripcion = "Descripcion 3 de prueba";
        $clan -> requisitos = "Requisitos de prueba";
        $clan -> edadminima = 15;
        $clan -> edadmaxima = 18;
        $clan -> discord ="Discord 3";
        $clan -> whatsapp = "WhatsApp 3";
        $clan -> published_at = Carbon::now()->subDays(2);
        $clan -> save();

        $clan = new Clan;
        $clan -> titulo = "Titulo 4 de prueba";
        $clan -> user_id = 2;
        $clan -> descripcion = "Descripcion 4 de prueba";
        $clan -> requisitos = "Requisitos de prueba";
        $clan -> edadminima = 15;
        $clan -> edadmaxima = 18;
        $clan -> discord ="Discord 4";
        $clan -> whatsapp = "WhatsApp 4";
        $clan -> published_at = Carbon::now()->subDays(1);
        $clan -> save();
    }
}
