<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserTableSeeder::class);
        Model::unguard();

        $this->call(BlogrollsTableSeeder::class);
        $this->call(MembersTableSeeder::class);

        Model::reguard();
    }
}
