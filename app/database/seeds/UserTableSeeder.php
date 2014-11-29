<?php

class UserTableSeeder extends Seeder {

    /**
     * testユーザの生成
     * @method run
     */
    public function run() {

        DB::table('users')->delete();

        User::create([
            'username' => 'test',
            'password' => 'test'
        ]);

    }
}
