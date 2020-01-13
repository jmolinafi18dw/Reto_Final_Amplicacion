<?php

use Illuminate\Database\Seeder;

class factura_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //RESERVA 1 SOCIEDAD 1
        DB::table('factura')->insert([
            'reserva_id' => '1',
            'sociedad_id'=>'1',
            'fecha' => '2019/12/19',
            'personas' => '10',
            'importe' => '60'
        ]);

        //RESERVA 2 SOCIEDAD 1
        DB::table('factura')->insert([
            'reserva_id' => '2',
            'sociedad_id'=>'1',
            'fecha' => '2019/12/19',
            'personas' => '10',
            'importe' => '60'
        ]);
        //RESERVA 3 SOCIEDAD 2
        DB::table('factura')->insert([
            'reserva_id' => '3',
            'sociedad_id'=>'2',
            'fecha' => '2019/12/19',
            'personas' => '10',
            'importe' => '60'
        ]);

        //RESERVA 4 SOCIEDAD 2
        DB::table('factura')->insert([
            'reserva_id' => '4',
            'sociedad_id'=>'2',
            'fecha' => '2019/12/19',
            'personas' => '10',
            'importe' => '60'
        ]);

        //RESERVA 5 SOCIEDAD 3
        DB::table('factura')->insert([
            'reserva_id' => '5',
            'sociedad_id'=>'3',
            'fecha' => '2019/12/19',
            'personas' => '10',
            'importe' => '60'
        ]);

        //RESERVA 6 SOCIEDAD 3
        DB::table('factura')->insert([
            'reserva_id' => '6',
            'sociedad_id'=>'3',
            'fecha' => '2019/12/19',
            'personas' => '10',
            'importe' => '60'
        ]);
    }
}
