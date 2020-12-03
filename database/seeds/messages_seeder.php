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
            'mensaje'=>'Hola!!!',
            'created_at' => '2020-12-02 09:25:00',
            'updated_at' => '2020-12-02 09:25:00',
        ]);
        DB::table('messages')->insert([
            'user_id'=>5,
            'sociedad_id'=>2,
            'mensaje'=>'Hola!!',
            'created_at' => '2020-12-02 09:26:00',
            'updated_at' => '2020-12-02 09:26:00',
        ]);
        DB::table('messages')->insert([
            'user_id'=>9,
            'sociedad_id'=>2,
            'mensaje'=>'¿A que hora estareis hoy?',
            'created_at' => '2020-12-02 09:26:00',
            'updated_at' => '2020-12-02 09:26:00',
        ]);
        DB::table('messages')->insert([
            'user_id'=>7,
            'sociedad_id'=>2,
            'mensaje'=>'Sobre las 20:00',
            'created_at' => '2020-12-02 09:30:00',
            'updated_at' => '2020-12-02 09:30:00',
        ]);
        DB::table('messages')->insert([
            'user_id'=>9,
            'sociedad_id'=>2,
            'mensaje'=>'ok gracias!!',
            'created_at' => '2020-12-02 09:31:00',
            'updated_at' => '2020-12-02 09:31:00',
        ]);
        DB::table('messages')->insert([
            'user_id'=>7,
            'sociedad_id'=>2,
            'mensaje'=>'nada!!',
            'created_at' => '2020-12-02 09:35:00',
            'updated_at' => '2020-12-02 09:35:00',
        ]);
    }
}

