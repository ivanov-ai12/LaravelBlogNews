<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Класс для работы с таблицей posts
 *
 * @author Anton Ivanov
 * @version 1.0, 23.08.2019
 *
 */
class Post extends Model
{
    protected $fillable = ['title', 'alias', 'intro', 'body'];

/**
 * Получает имя вызываемого метода (маршрут)
 *
 * @author Anton Ivanov
 * @version 1.0, 23.08.2019
 *
 * @return string Имя ключа маршрута
 */
    public function getRouteKeyName()
    {
        return 'alias';
    }
}
