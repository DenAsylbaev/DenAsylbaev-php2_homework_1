<?php

namespace GeekBrains\LevelTwo\Blog;

use GeekBrains\LevelTwo\Blog;

class Post
{
    private int $id;
    private int $authorId;
    private string $title;
    private string $text;

    public function __construct(
        int $id,
        User $author,
        string $title,
        string $text
    ) {
        $this->id = $id;
        $this->authorId = $author->id();
        $this->title = $title;
        $this->text = $text;
}
    public function __toString()
    {
    // return  'Пользователь ' . $this->authorId . ' пишет: ' . $this->title . '/ ' . $this->text . PHP_EOL;
    return $this->text . PHP_EOL;

    }
    public function id(): int
    {
        return $this->id;
    }
}