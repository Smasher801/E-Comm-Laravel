<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
// use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class Product_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            
            [
                'name' => 'LG Mobile',
            "price" => "10000",
            //  "description" => "a smart phone with 4GB RAM and with much more features",
             "category" =>  "mobile",
             "gallery" => "file:///C:/Users/HP/Desktop/levanten-mobilephones-hero-2-m.webp"
            
            ],


            [
                'name' => 'Oppo',
            "price" => "5000",
            //  "description" => "a smart phone with 4GB RAM and with much more features",
             "category" =>  "mobile",
             "gallery" => "file:///C:/Users/HP/Desktop/levanten-mobilephones-hero-2-m.webp"
            
            ],

            [
                'name' => 'Samsung TV',
            "price" => "15000",
            //  "description" => "a smart phone with 4GB RAM and with much more features",
             "category" =>  "TV",
             "gallery" => "file:///C:/Users/HP/Desktop/levanten-mobilephones-hero-2-m.webp"
            
            ],

            [
                'name' => 'LG TV',
            "price" => "10000",
            //  "description" => "a smart phone with 4GB RAM and with much more features",
             "category" =>  "TV",
             "gallery" => "file:///C:/Users/HP/Desktop/levanten-mobilephones-hero-2-m.webp"
            
            ],

            [
                'name' => 'Panasonic fridge',
            "price" => "10000",
            //  "description" => "a smart phone with 4GB RAM and with much more features",
             "category" =>  "fridge",
             "gallery" => "file:///C:/Users/HP/Desktop/levanten-mobilephones-hero-2-m.webp"
            
            ],




            
            
        ]);

    }
}
