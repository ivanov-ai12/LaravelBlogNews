
# Описание функционала - Блог новостей
Фреймворк Laravel. </br>
controller \app\Http\Controllers\PostController.php </br>
router \routes\web.php </br>
model \app\Post.php </br>
create database \database\migrations\2019_08_22_000000_create_users_table.php </br>
          \database\migrations\2019_08_22_100000_create_password_resets_table.php </br>
          \database\migrations\2019_08_22_133211_create_posts_table.php </br>
          \database\migrations\2019_08_22_160610_update_post_table.php </br>

view index \resources\views\index.blade.php </br>
view create \resources\views\posts\create.blade.php </br>
view edit \resources\views\posts\edit.blade.php </br>
Для запуска проекта необходимо: </br>
1) Настройть адресацию в файле .env со </br>
2) Установите зависимости: </br>
    $ composer install </br>
    $ npm i </br>
3) Выполните все миграции: </br>
    $ php artisan migrate </br>
4) Заполнить базу данных дефолтными значениями, для этого выполните команду: </br>
    $ php artisan db:seed </br>
5) Запустите локальный сервер: </br>
    $ php artisan serv </br>
