<?php

// use GeekBrains\Blog\User;
use GeekBrains\Person\{Name, Person};
use GeekBrains\Blog\Post;

spl_autoload_register(function ($className)
{
    $file = $className . ".php";
    $file = str_replace(array('\\', 'GeekBrains'), array('/', 'src'), $file);

    if (file_exists($file)) {
        include $file;
    }
});

$post = new Post(
    new Person(
    new Name('Иван', 'Никитин'),
    new DateTimeImmutable()
    ),
    'Всем привет!'
    );
    print $post;