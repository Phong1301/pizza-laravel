<?php

use Illuminate\Database\Seeder;

class Products extends Seeder
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

        DB::table('products')->insert([
            ['name'=>'Pizza Hải Sản Đào', 'id_category'=>'1', 'img'=>'pizza1.png', 'price'=>'169.000', 'title'=>'Tôm, Đào hoà quyện bùng nổ cùng sốt Thousand Island'],
            ['name'=>'Pizza Hải Sản Pesto Xanh','pizza2.png','169.000','Tôm, cua, mực và bông cải xanh trên nền sốt Pesto Xanh'],
            ['name'=>'Pizza Tôm Cocktail', 'id_category'=>'1', 'img'=>'pizza3.png', 'price'=>'139.000', 'title'=>'Tôm với nấm, dứa, cà chua và sốt Thousand Island.'],
            ['name'=>'Pizza Hải Sản Cocktail', 'id_category'=>'1', 'img'=>'pizza4.png', 'price'=>'139.000', 'title'=>'Tôm, cua, giăm bông,... với sốt Thousand Island'],
        ]);
    }
}
