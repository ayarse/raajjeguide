<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Vaguthu Admin',
            'email' => 'admin@vaguthu.mv',
            'password' => bcrypt('VaguthuR@@jjeGuide_'),
        ]);

    }
}
