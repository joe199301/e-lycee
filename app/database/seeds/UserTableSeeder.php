<?php

class UserTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('users')->insert(
                array(
                    array(
                        'id' => 1,
                        'username' => 'admin',
                        'password' => Hash::make('admin'),
                        'role' => 'teacher',
                    ),
                    array(
                        'id' => 2,
                        'username' => 'user1',
                        'password' => Hash::make('user1'),
                        'role' => 'first_class',
                    ),
                    array(
                        'id' => 3,
                        'username' => 'user2',
                        'password' => Hash::make('user2'),
                        'role' => 'final_class',
                    )
                )
        );
    }

}
