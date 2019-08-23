<?php

/**
 * Осуществляет маршрутизацию по проекту
 *
 * @author Anton Ivanov
 * @version 1.0, 23.08.2019
 *
 * @return void
 */

Route::get('/', "PostsController@index");

Route::get('/posts/create',"PostsController@create");

Route::get('/posts/{post}', "PostsController@show");

Route::post('/post',"PostsController@store");

Route::get('/posts/{post}/edit', "PostsController@edit");

Route::patch('/posts/{post}', "PostsController@update");

Route::delete('/posts/{post}', "PostsController@destroy");

/*
 * GET /posts
 * GET /posts/create
 * POST /posts
 * GET /posts/{id}/edit
 * PATCH /posts/{id}
 * GET /posts/{id}
 * DELETE /posts/{ID}
 */
