<?php

use Illuminate\Database\Seeder;

class messages_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('messages')->insert([
            'user_id'=>9,
            'sociedad_id'=>2,
            'mensaje'=>'¿Hola que tal?'
        ]);
        DB::table('messages')->insert([
            'user_id'=>5,
            'sociedad_id'=>2,
            'mensaje'=>'Muy bien y tu?'
        ]);
        DB::table('messages')->insert([
            'user_id'=>9,
            'sociedad_id'=>2,
            'mensaje'=>'¿A que hora estareis hoy?'
        ]);
        DB::table('messages')->insert([
            'user_id'=>7,
            'sociedad_id'=>2,
            'mensaje'=>'Sobre las 20:00'
        ]);
        DB::table('messages')->insert([
            'user_id'=>9,
            'sociedad_id'=>2,
            'mensaje'=>'ok gracias!!'
        ]);
        DB::table('messages')->insert([
            'user_id'=>7,
            'sociedad_id'=>2,
            'mensaje'=>'nada!!'
        ]);
    }
}

