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
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'gc-library@bicol-u.edu.ph',
            'password' => Hash::make('password'),
        ]);

        DB::table('borrow_status')->insert([
            'name' => 'request',
        ]);
        DB::table('borrow_status')->insert([
            'name' => 'approved',
        ]);
        DB::table('borrow_status')->insert([
            'name' => 'borrowed',
        ]);
        DB::table('borrow_status')->insert([
            'name' => 'notified',
        ]);
        DB::table('borrow_status')->insert([
            'name' => 'returned',
        ]);
        // $this->call(UsersTableSeeder::class);
    }
}
