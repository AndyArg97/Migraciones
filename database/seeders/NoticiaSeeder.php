<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class NoticiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i=1; $i < 11; $i++) { 
            
            for ($j=0; $j < 5 ; $j++) { 
                DB::table('noticias')->insert([
                    'autor_id' => $i,
                    'titulo' => Str::random(10),
                    'contenido' => Str::random(10)
                ]);
            }
            
        }
    }
}
