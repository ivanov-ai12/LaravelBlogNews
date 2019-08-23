<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
	/**
	 * Заполняет таблицу posts
	 *
	 * @author Anton Ivanov
	 * @version 1.0, 23.08.2019
	 *
	 * @return void
	 */
    public function run()
    {
        DB::table('posts')->insert(
            [
                [
                    'title' => "PHP cool",
                    'alias' =>"php",
                    'intro' => "Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test",
                    'body' => "La La LA La La LA"
                ],
                [
                    'title' => "Laravel cool",
                    'alias' =>"laravel",
                    'intro' => "Test1 Test1 Test1 Test1 Test1 Test1 Test1 Test1 Test1 Test1 Test1 Test1 Test1 Test1 Test1",
                    'body' => "La1 La1 LA1 La1 La1 LA1"
                ],
                [
                    'title' => "Test",
                    'alias' =>"test",
                    'intro' => "Test2 Test2 Test2 Test2 Test2 Test2 Test2 Test2 Test2 Test2 Test2 Test2",
                    'body' => "La2 La2 LA2 La2 La2 La2 La2"
                ]
            ]
        );
    }
}
