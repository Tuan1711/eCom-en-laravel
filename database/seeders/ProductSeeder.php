<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert(
            [
                'name' => 'Oppo mobile',
                'price' => '300',
                "description" => "A smartphone with 10gb ram and much mor feature",
                "category" => "mobile",
                "gallery" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRJanzrqhMYxhtlUeDlTlo-aV9LrGYT0yFtb5PCbK23sZKqSyaYlROlryqbCxttHlnoiTA&usqp=CAU"
            ],
            [
                'name' => 'Panasonic TV',
                'price' => '400',
                "description" => "A smarttv with Big",
                "category" => "mobile",
                "gallery" => "https://www.lg.com/in/images/mobile-phones/md06155757/gallery/Platinum_01-1100-V4.jpg"
            ],
            [
                'name' => 'Soni TV',
                'price' => '500',
                "description" => "A TV with much more feature",
                "category" => "mobile",
                "gallery" => "https://www.lg.com/in/images/mobile-phones/md06155757/gallery/Platinum_01-1100-V4.jpg"
            ],
            [
                'name' => 'LG mobile',
                'price' => '200',
                "description" => "A smartphone with 4gb ram and much mor feature",
                "category" => "mobile",
                "gallery" => "https://www.lg.com/in/images/mobile-phones/md06155757/gallery/Platinum_01-1100-V4.jpg"
            ],
            [
                'name' => 'LG mobile',
                'price' => '200',
                "description" => "A smartphone with 4gb ram and much mor feature",
                "category" => "mobile",
                "gallery" => "https://www.lg.com/in/images/mobile-phones/md06155757/gallery/Platinum_01-1100-V4.jpg"
            ],

        );
    }
}
