<?php

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
        DB::table('models')->insert([
     // 'name' => str_random(9),
            'name'=>'john',
            'name'=>'john',
            'name'=>'john',

        ]);
    }
}




