<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Con query builder
        DB::table('categories')->insert([
            'name' => 'zapatos',
            'description' => 'zapatos perrones',
            'created_at'=> now(),
            'updated_at' => now(),
        ]);

        Category::factory()->count(15)->create();
    }
}
