<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class BlogrollsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach(range(1,10) as $i){
            DB::table('blogrolls')->insert([
                'blog' => 'BlogRoll'.$i,
                'url' => 'http://'.str_random(10).'.com',
                'timestamp' => \Carbon\Carbon::now(),
            ]);
        }

    }
}
