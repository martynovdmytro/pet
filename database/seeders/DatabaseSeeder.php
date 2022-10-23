<?php

namespace Database\Seeders;

use App\Models\Artist;
use App\Models\Category;
use App\Models\Image;
use App\Models\Subcategory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        Category::factory(5)
                ->has(Subcategory::factory()
                    ->hasAttached(Image::factory()->count(5)
                                                  ->hasAttached(Artist::factory()
                                                                      ->hasAttached(Image::factory())))
                    ->count(5))
                ->create();

    }
}
