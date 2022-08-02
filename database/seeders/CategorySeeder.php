<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = ['novel','sejarah','religi','biografi','komik'];
        foreach ($category as $value) {
            Category::create([
                'nama' => $value,
                'slug' => Str::slug($value)
            ]);
        }
    }
}
