<?php

use GeekBrains\LevelTwo\Blog\User;
use GeekBrains\LevelTwo\Person\Name;
use GeekBrains\LevelTwo\Blog\Post;
use GeekBrains\LevelTwo\Blog\Comment;
// use GeekBrains\LevelTwo\Blog\Repositories\InMemoryUsersRepository;
// use GeekBrains\LevelTwo\Blog\Exceptions\UserNotFoundException;
use GeekBrains\LevelTwo\Blog\Exceptions\IncorrectInputException;


include __DIR__ . "/vendor/autoload.php";

$faker = Faker\Factory::create('ru_RU');

$name = new Name('Петр', 'Петров');

$user = new User(
    101, 
    $name, 
    "admin"
);

$post = new Post(
    001,
    $user,
    'Приветствие',
    'Всем привет!'
);

try {
    if ($argv[1] === 'user') {
        $nameArr = explode(' ',trim($faker->name()));
        $name = new Name($nameArr[0], $nameArr[1]);
        $user = new User(102, $name, "Admin");
        echo $user;
    } else if ($argv[1] === 'post') {
        $post = new Post(
            002,
            $user,
            $faker->realText(rand(10, 20)),
            $faker->realText(rand(30, 100))
        );    
        echo $post;
    } else if ($argv[1] === 'comment') {
        $comment = new Comment(
            $user,
            $post,
            $faker->realText(rand(20, 100))
        );    
        echo $comment;
    } else {
        throw new IncorrectInputException("ОШИБКА ВВОДА\n");
    }


} catch (IncorrectInputException | Exception $e) {
    echo $e->getMessage() . PHP_EOL;
}