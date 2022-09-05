<?php

use Illuminate\Database\Seeder;

class Categories extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $timestamp = date('Y-m-d H:i:s');
        DB::table('categories')->insert([
            ['name'=>'Pizza', 'img'=>'pizza.png'],
            ['name'=>'Noodles', 'img'=>'instant-noodles.png'],
            ['name'=>'Salad', 'img'=>'salad.png'],
            ['name'=>'Drinks', 'img'=>'smoothie.png'],
            ['name'=>'Cream', 'img'=>'ice-cream.png']
        ]);
    }
}




         