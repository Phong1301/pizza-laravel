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
            ['name'=>'Pizza', 'img'=>'pizza.png', 'created_at'=>$timestamp, 'updated_at'=>$timestamp],
            ['name'=>'Noodles', 'img'=>'instant-noodles.png', 'created_at'=>$timestamp, 'updated_at'=>$timestamp],
            ['name'=>'Salad', 'img'=>'salad.png', 'created_at'=>$timestamp, 'updated_at'=>$timestamp],
            ['name'=>'Drinks', 'img'=>'smoothie.png', 'created_at'=>$timestamp, 'updated_at'=>$timestamp],
            ['name'=>'Cream', 'img'=>'ice-cream.png', 'created_at'=>$timestamp, 'updated_at'=>$timestamp]
        ]);
    }
}
