<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      DB::table('users')->insert([
        'name' => 'Matthew',
        'email' => 'mperoburke'.'@gmail.com',
        'password' => bcrypt('secret'),
        ]);


      DB::table('users')->insert([
        'name' => 'admin',
        'email' => 'koalgopa@gmail.com',
        'password' => '$2y$10$LdM2RbICzipYSWWXZ7ZnzeCbqK4nin2eutxSW/0tymVDlWumngMnO',
        ]);

    }
}
