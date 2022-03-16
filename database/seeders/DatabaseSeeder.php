<?php

namespace Database\Seeders;

use App\Models\Customer;
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

        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            ShopSeeder::class,
            TypeSeeder::class,
            ProductSeeder::class,
            OderSeeder::class,
            OderDetailSeeder::class,
            AdminSeeder::class
        ]);
    }
}
