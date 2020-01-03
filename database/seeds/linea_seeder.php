<?php

use Illuminate\Database\Seeder;

class linea_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    /*
    $table->bigIncrements('id');
            $table->unsignedBigInteger('producto_sociedad_id'); 
            $table->unsignedBigInteger('factura_id'); 
            $table->integer('unidades');
        */
    public function run()
    {

        //FACTURA 1 RESERVA 1 SOCIEDAD 1
        DB::table('linea')->insert([
            'producto_sociedad_id' => '1',
            'factura_id' => '1',
            'unidades' => '10',
        ]);

         //FACTURA 1 RESERVA 1 SOCIEDAD 1
        DB::table('linea')->insert([
            'producto_sociedad_id' => '2',
            'factura_id' => '1',
            'unidades' => '10',
        ]);
         //FACTURA 1 RESERVA 1 SOCIEDAD 1
        DB::table('linea')->insert([
            'producto_sociedad_id' => '3',
            'factura_id' => '1',
            'unidades' => '10',
        ]);
        
        
         //FACTURA 2 RESERVA 2 SOCIEDAD 1
        DB::table('linea')->insert([
            'producto_sociedad_id' => '1',
            'factura_id' => '2',
            'unidades' => '10',
        ]);
        DB::table('linea')->insert([
            'producto_sociedad_id' => '2',
            'factura_id' => '2',
            'unidades' => '10',
        ]);
        DB::table('linea')->insert([
            'producto_sociedad_id' => '3',
            'factura_id' => '2',
            'unidades' => '10',
        ]);

        //FACTURA 3 RESERVA 3 SOCIEDAD 2
        DB::table('linea')->insert([
            'producto_sociedad_id' => '9',
            'factura_id' => '3',
            'unidades' => '10',
        ]);
        DB::table('linea')->insert([
            'producto_sociedad_id' => '10',
            'factura_id' => '3',
            'unidades' => '10',
        ]);
        DB::table('linea')->insert([
            'producto_sociedad_id' => '11',
            'factura_id' => '3',
            'unidades' => '10',
        ]);

         //FACTURA 4 RESERVA 4 SOCIEDAD 2
         DB::table('linea')->insert([
            'producto_sociedad_id' => '9',
            'factura_id' => '4',
            'unidades' => '10',
        ]);
        DB::table('linea')->insert([
            'producto_sociedad_id' => '10',
            'factura_id' => '4',
            'unidades' => '10',
        ]);
        DB::table('linea')->insert([
            'producto_sociedad_id' => '11',
            'factura_id' => '4',
            'unidades' => '10',
        ]);

         //FACTURA 5 RESERVA 5 SOCIEDAD 3
         DB::table('linea')->insert([
            'producto_sociedad_id' => '17',
            'factura_id' => '5',
            'unidades' => '10',
        ]);
        DB::table('linea')->insert([
            'producto_sociedad_id' => '18',
            'factura_id' => '5',
            'unidades' => '10',
        ]);
        DB::table('linea')->insert([
            'producto_sociedad_id' => '19',
            'factura_id' => '5',
            'unidades' => '10',
        ]);

        //FACTURA 6 RESERVA 6 SOCIEDAD 3
        DB::table('linea')->insert([
            'producto_sociedad_id' => '17',
            'factura_id' => '6',
            'unidades' => '10',
        ]);
        DB::table('linea')->insert([
            'producto_sociedad_id' => '18',
            'factura_id' => '6',
            'unidades' => '10',
        ]);
        DB::table('linea')->insert([
            'producto_sociedad_id' => '19',
            'factura_id' => '6',
            'unidades' => '10',
        ]);

        
    }
}
