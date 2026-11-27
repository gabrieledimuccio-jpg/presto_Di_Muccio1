<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
public $categories = [
        'Motori',
        'Viaggi',
       ' Musica',
        'Sport',
        'Libri',
        'Salute',
        'Cibo',
        'Casa',
        'Film',
        'Accessori'
];

    public function run(): void
    {
        //
        foreach ($this->categories as $category) {
            Category::create([
                'name' => $category
            ]);
        }
    }
}
