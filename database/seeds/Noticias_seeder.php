<?php

use Illuminate\Database\Seeder;

class Noticias_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('noticias')->insert([
            'sociedad_id'=>2,
            'link_imagen'=>'/assets/img/noticia1.jpg',
            'titulo'=>'Las gastronómicas se reunieron con el Ayuntamiento',
            'contenido'=>'Una representación de varias sociedades locales explicaron su realidad y pidieron algún tipo de ayuda.',
            'created_at' => '2020-12-02 09:30:00',
            'updated_at' => '2020-12-02 09:30:00',
        ]);
        DB::table('noticias')->insert([
            'sociedad_id'=>1,
            'link_imagen'=>'/assets/img/noticia2.jpg',
            'titulo'=>'Arguiñano: "Tengo la duda de si volveremos"',
            'contenido'=>'El cocinero presenta nuevo libro de cocina: "La buena cocina. 900 recetas que siempre salen bien".',
            'created_at' => '2020-11-02 09:30:00',
            'updated_at' => '2020-12-02 09:30:00',

        ]);
        DB::table('noticias')->insert([
            'sociedad_id'=>2,
            'link_imagen'=>'/assets/img/noticia3.jpg',
            'titulo'=>'Los castañeros consiguen que el Gaztaiñerre se mantenga vivo',
            'contenido'=>'Cada vez llueve menos y esto afecta a la castaña, pero tenemos un cargamento para los muchos clientes que nos siguen comprando.',
            'created_at' => '2020-10-02 09:30:00',
            'updated_at' => '2020-12-02 09:30:00',
        ]);
        DB::table('noticias')->insert([
            'sociedad_id'=>2,
            'link_imagen'=>'/assets/img/noticia1.jpg',
            'titulo'=>'Las gastronómicas se reunieron con el Ayuntamiento',
            'contenido'=>'Una representación de varias sociedades locales explicaron su realidad y pidieron algún tipo de ayuda.',
            'created_at' => '2019-12-02 01:30:00',
            'updated_at' => '2020-12-02 09:30:00',
        ]);
        DB::table('noticias')->insert([
            'sociedad_id'=>1,
            'link_imagen'=>'/assets/img/noticia2.jpg',
            'titulo'=>'Arguiñano: "Tengo la duda de si volveremos"',
            'contenido'=>'El cocinero presenta nuevo libro de cocina: "La buena cocina. 900 recetas que siempre salen bien".',
            'created_at' => '2020-12-02 09:30:00',
            'updated_at' => '2020-12-02 09:30:00',
        ]);
        DB::table('noticias')->insert([
            'sociedad_id'=>2,
            'link_imagen'=>'/assets/img/noticia3.jpg',
            'titulo'=>'Los castañeros consiguen que el Gaztaiñerre se mantenga vivo',
            'contenido'=>'Cada vez llueve menos y esto afecta a la castaña, pero tenemos un cargamento para los muchos clientes que nos siguen comprando.',
            'created_at' => '2020-12-02 09:30:00',
            'updated_at' => '2020-12-02 09:30:00',
        ]);
    }
}
