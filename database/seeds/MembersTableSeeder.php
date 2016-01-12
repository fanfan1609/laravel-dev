<?php

use Illuminate\Database\Seeder;

class MembersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach(range(1,50) as $i){
            DB::table('members')->insert([
                'username'  => 'user'.$i,
                'first'     => 'First'.$i,
                'last'      => 'Last'.$i,
                'email'     => "user$i@gmail.com",
                'joined'    => \Carbon\Carbon::now(),
                'group'     => rand(1,100),
                'pw_hash'   => bcrypt(str_random(10))
            ]);
        }
    }
}
