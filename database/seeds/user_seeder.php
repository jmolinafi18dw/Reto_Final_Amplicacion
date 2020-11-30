<?php

use Illuminate\Database\Seeder;

class user_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Webmaster
        DB::table('users')->insert([
            'nombre' => 'Admin',
            'apellido' => 'Admin',
            'telefono' => 12345678,
            'email' => 'admin@example.com',
            'email_verified_at' => date('Y-m-d H:i:s'),
            'password' => bcrypt('adminadmin'),
            'role_id' => '1'

        ]);

        //Administradores Sociedades
        DB::table('users')->insert([
            'nombre' => 'Pescadores',
            'apellido' => 'Pescadores',
            'telefono' => 12345678,
            'email' => 'pescadores@gmail.com',
            'email_verified_at' => date('Y-m-d H:i:s'),
            'password' => bcrypt('pescadorespescadores'),
            'role_id' => '2'
        ]);

        DB::table('users')->insert([
            'nombre' => 'Armonia',
            'apellido' => 'Armonia',
            'telefono' => 12345678,
            'email' => 'armonia@gmail.com',
            'email_verified_at' => date('Y-m-d H:i:s'),
            'password' => bcrypt('armoniaarmonia'),
            'role_id' => '2'
        ]);

        DB::table('users')->insert([
            'nombre' => 'Bascongada',
            'apellido' => 'Bascongada',
            'telefono' => 12345678,
            'email' => 'bascongada@gmail.com',
            'email_verified_at' => date('Y-m-d H:i:s'),
            'password' => bcrypt('bascongadabascongada'),
            'role_id' => '2'
        ]);

        //Socios
        DB::table('users')->insert([
            'nombre' => 'User',
            'apellido' => 'User',
            'telefono' => 12345678,
            'email' => 'user@example.com',
            'email_verified_at' => date('Y-m-d H:i:s'),
            'password' => bcrypt('useruser'),
            'role_id' => '3'
        ]);

        DB::table('users')->insert([
            'nombre' => 'Aitor',
            'apellido' => 'Ortiz',
            'telefono' => 12345678,
            'email' => 'aitorortiz@gmail.com',
            'email_verified_at' => date('Y-m-d H:i:s'),
            'password' => bcrypt('aitoraitor'),
            'role_id' => '3'
        ]);

        DB::table('users')->insert([
            'nombre' => 'Jefry',
            'apellido' => 'Molina',
            'telefono' => 12345678,
            'email' => 'jefry@gmail.com',
            'email_verified_at' => date('Y-m-d H:i:s'),
            'password' => bcrypt('jefryjefry'),
            'role_id' => '3'
        ]);

        DB::table('users')->insert([
            'nombre' => 'Tomas',
            'apellido' => 'San Sebastian',
            'telefono' => 12345678,
            'email' => 'tomas@gmail.com',
            'email_verified_at' => date('Y-m-d H:i:s'),
            'password' => bcrypt('tomastomas'),
            'role_id' => '3'
        ]);

        DB::table('users')->insert([
            'nombre' => 'Pepe',
            'apellido' => 'Ortiz',
            'telefono' => 12345678,
            'email' => 'maria@gmail.com',
            'email_verified_at' => date('Y-m-d H:i:s'),
            'password' => bcrypt('mariamaria'),
            'role_id' => '3'
        ]);

        DB::table('users')->insert([
            'nombre' => 'Pedro',
            'apellido' => 'Leon',
            'telefono' => 12345678,
            'email' => 'pedroleon@gmail.com',
            'email_verified_at' => date('Y-m-d H:i:s'),
            'password' => bcrypt('pedropedro'),
            'role_id' => '3'
        ]);

        DB::table('users')->insert([
            'nombre' => 'Zubiri',
            'apellido' => 'Manteo',
            'telefono' => 12345678,
            'email' => 'IkerIker@gmail.com',
            'email_verified_at' => date('Y-m-d H:i:s'),
            'password' => bcrypt('ikeriker'),
            'role_id' => '3'
        ]);

        DB::table('users')->insert([
            'nombre' => 'Alejandro',
            'apellido' => 'Villareal',
            'telefono' => 12345678,
            'email' => 'alejandro@gmail.com',
            'email_verified_at' => date('Y-m-d H:i:s'),
            'password' => bcrypt('alejandroalejandro'),
            'role_id' => '3'
        ]);
    }
}
