<?php

namespace Database\Seeders;

use App\Enums\SingerEnum;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class InitialWeekSeeder extends Seeder
{
    public function run()
    {
        DB::table('week')->insert([
            'id' => 1,
            'name' => 'Semana 1',
            'startDate' => '2023-04-03 00:00:00.000000',
            'endDate' => '2023-04-09 23:59:59.000000',
            'state' => 'open',
        ]);

        DB::table('round')->insert([
            'id' => 1,
            'name' => 'Ronda 1',
            'startDate' => '2023-04-05 20:30:00.000000',
            'endDate' => '2023-04-06 13:00:00.000000',
            'idWeek' => '1',
        ]);

        DB::table('round')->insert([
            'id' => 2,
            'name' => 'Ronda 2',
            'startDate' => '2023-04-06 18:00:00.000000',
            'endDate' => '2023-04-07 11:59:59.000000',
            'idWeek' => '1',
        ]);

        DB::table('singer')->insert([
            'id' => 1,
            'document' => '1',
            'name' => 'Sandra',
            'lastname' => 'Vásquez',
            'picture' => 'sandravasquez.png',
            'facebook' => 'JuanPerez',
            'instagram' => 'JuanPerez',
            'description' => 'Joven Promeza',
            'state' => SingerEnum::Classified,
            'idRound' => 1,
        ]);

        DB::table('singer')->insert([
            'id' => 2,
            'document' => '1',
            'name' => 'Bruno',
            'lastname' => 'Lopez',
            'picture' => 'brunolopez.png',
            'facebook' => 'LuisPerez',
            'instagram' => 'LuisPerez',
            'description' => 'Joven Promeza',
            'state' => 1,
            'idRound' => 1,
        ]);

        DB::table('singer')->insert([
            'id' => 3,
            'document' => '1',
            'name' => 'Luis',
            'lastname' => 'Vásquez',
            'picture' => 'luisvasquez.png',
            'facebook' => 'JasminePerez',
            'instagram' => 'JasminePerez',
            'description' => 'Joven Promeza',
            'state' => SingerEnum::Classified,
            'idRound' => 1,
        ]);

        DB::table('singer')->insert([
            'id' => 4,
            'document' => '1',
            'name' => 'Carlos',
            'lastname' => 'Bazán',
            'picture' => 'carlosbazan.png',
            'facebook' => 'JasminePerez',
            'instagram' => 'JasminePerez',
            'description' => 'Joven Promeza',
            'state' => 1,
            'idRound' => 1,
        ]);

        DB::table('singer')->insert([
            'id' => 5,
            'document' => '1',
            'name' => 'Geraldine',
            'lastname' => 'Miranda',
            'picture' => 'geraldinemiranda.png',
            'facebook' => 'JasminePerez',
            'instagram' => 'JasminePerez',
            'description' => 'Joven Promeza',
            'state' => 1,
            'idRound' => 1,
        ]);

        DB::table('singer')->insert([
            'id' => 6,
            'document' => '1',
            'name' => 'Bruno',
            'lastname' => 'López',
            'picture' => 'brunolopez.png',
            'facebook' => 'JasminePerez',
            'instagram' => 'JasminePerez',
            'description' => 'Joven Promeza',
            'state' => 1,
            'idRound' => 1,
        ]);

        DB::table('singer')->insert([
            'id' => 7,
            'document' => '1',
            'name' => 'Israel',
            'lastname' => 'Llanos',
            'picture' => 'israelllanos.png',
            'facebook' => 'JasminePerez',
            'instagram' => 'JasminePerez',
            'description' => 'Joven Promeza',
            'state' => 1,
            'idRound' => 1,
        ]);

    }
}
