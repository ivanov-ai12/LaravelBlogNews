<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Post;

class PostsController extends Controller
{
    /**
	 * Главная страница web формы
	 *
	 * @author Anton Ivanov
	 * @version 1.0, 23.08.2019
	 *
	 * @return представление формы index.blade.php
	 */
    public function index()
    {
        $posts = Post::all();
        return view('index', compact('posts'));
    }

    /**
	 * Выводит запись блога
	 *
	 * @author Anton Ivanov
	 * @version 1.0, 23.08.2019
	 *
     * @param array $post информация о публикации
	 * @return object представление формы resources\views\posts\show.blade.php
	 */
    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

     /**
	 * Добавляет новую публикацию
	 *
	 * @author Anton Ivanov
	 * @version 1.0, 23.08.2019
	 *
	 * @return object представление формы resources\views\posts\create.blade.php
	 */
    public function create()
    {
        return view("posts.create");
    }

    /**
	 * Осуществляет хранение записией блога
     *
	 * @author Anton Ivanov
	 * @version 1.0, 23.08.2019
	 *
	 * @return void
	 */
    public function store()
    {
        $this->validate(request(), [
            'title' => 'required|min:2',
            'alias' => 'required',
            'intro' => 'required',
            'body' => 'required',
        ]);

        Post::create(
            request(array('title', 'alias', 'intro', 'body'))
        );

        return redirect('/');
    }

    /**
	 * Редактирует параметры публикации
	 *
	 * @author Anton Ivanov
	 * @version 1.0, 23.08.2019
	 *
     * @param object $post экземпляр модели Post
	 * @return object представление формы resources\views\posts\edit.blade.php
	 */
    public function edit(Post $post)
    {
        return view("posts.edit", compact('post'));
    }

    /**
	 * Обновляет параметры публикации
	 *
	 * @author Anton Ivanov
	 * @version 1.0, 23.08.2019
	 *
     * @param object $post экземпляр модели Post
	 * @return void
	 */
    public function update(Post $post)
    {
        $this->validate(request(), [
            'title' => 'required|min:2',
            'alias' => 'required',
            'intro' => 'required',
            'body' => 'required',
        ]);

        $post->update(request(['title', 'alias', 'intro', 'body']));
        return redirect('/');
    }

    /**
	 * Удаляет параметры публикации
	 *
	 * @author Anton Ivanov
	 * @version 1.0, 23.08.2019
	 *
     * @param object $post экземпляр модели Post
	 * @return void
	 */
    public function destroy(Post $post){
        $post->delete();
        return redirect('/');
    }
}
