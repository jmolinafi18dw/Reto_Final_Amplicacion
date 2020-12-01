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
            'user_id'=>4,
            'sociedad_id'=>1,
            'mensaje'=>'Hola que tal?'
        ]);
        DB::table('messages')->insert([
            'user_id'=>5,
            'sociedad_id'=>1,
            'mensaje'=>'Muy bien y tu?'
        ]);
    }
}

