<?php

namespace GeekBrains\LevelTwo\Blog;

use GeekBrains\LevelTwo\Blog;

class Comment
{
    // private int $id;
    private int $authorId;
    private int $postId;
    private string $text;

    public function __construct(
        // int $id,
        User $author,
        Post $post,
        string $text
    ) {
        // $this->id = $id;
        $this->authorId = $author->id();
        $this->postId = $post->id();
        $this->text = $text;
}
    public function __toString()
    {
    // return  'Пользователь ' . $this->authorId . ' оставил комментарий к посту ' . $this->postId .': ' . $this->text . PHP_EOL;
    return $this->text . PHP_EOL;

    }
}