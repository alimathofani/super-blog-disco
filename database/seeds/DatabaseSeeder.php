<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
        	CategoryProductSeeder::class,
            CategorySeeder::class,
        	UsersSeeder::class
        ]);

    }
}
