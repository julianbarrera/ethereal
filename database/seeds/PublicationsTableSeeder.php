<?php

use Illuminate\Database\Seeder;
use App\Publication;

class PublicationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // model factories
        factory(Product::class, 50)->create();
    }
}
