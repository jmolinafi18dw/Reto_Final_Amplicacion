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
            'contenido'=>'Una representación de varias sociedades locales explicaron su realidad y pidieron algún tipo de ayuda.'
        ]);
        DB::table('noticias')->insert([
            'sociedad_id'=>1,
            'link_imagen'=>'/assets/img/noticia2.jpg',
            'titulo'=>'Arguiñano: "Tengo la duda de si volveremos"',
            'contenido'=>'El cocinero presenta nuevo libro de cocina: "La buena cocina. 900 recetas que siempre salen bien".'
        ]);
        DB::table('noticias')->insert([
            'sociedad_id'=>2,
            'link_imagen'=>'/assets/img/noticia3.jpg',
            'titulo'=>'Los castañeros consiguen que el Gaztaiñerre se mantenga vivo',
            'contenido'=>'Cada vez llueve menos y esto afecta a la castaña, pero tenemos un cargamento para los muchos clientes que nos siguen comprando.'
        ]);
        DB::table('noticias')->insert([
            'sociedad_id'=>2,
            'link_imagen'=>'/assets/img/noticia1.jpg',
            'titulo'=>'Las gastronómicas se reunieron con el Ayuntamiento',
            'contenido'=>'Una representación de varias sociedades locales explicaron su realidad y pidieron algún tipo de ayuda.'
        ]);
        DB::table('noticias')->insert([
            'sociedad_id'=>1,
            'link_imagen'=>'/assets/img/noticia2.jpg',
            'titulo'=>'Arguiñano: "Tengo la duda de si volveremos"',
            'contenido'=>'El cocinero presenta nuevo libro de cocina: "La buena cocina. 900 recetas que siempre salen bien".'
        ]);
        DB::table('noticias')->insert([
            'sociedad_id'=>2,
            'link_imagen'=>'/assets/img/noticia3.jpg',
            'titulo'=>'Los castañeros consiguen que el Gaztaiñerre se mantenga vivo',
            'contenido'=>'Cada vez llueve menos y esto afecta a la castaña, pero tenemos un cargamento para los muchos clientes que nos siguen comprando.'
        ]);
    }
}
