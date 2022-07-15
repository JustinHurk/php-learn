<?php

class Post
{
    public $title;

    public $author;

    public $published;

    public function __construct($title, $author, $published)
    {
        $this->title = $title;
        $this->author = $author;
        $this->published = $published;
    }
}

$posts = [
    new Post('My first Post', 'JV', true),
    new Post('My Second Post', 'JV',true),
    new Post('My Third Post', 'BE',true),
    new Post('My Fourth Post', 'JS',false),
];


//array filter
// $unpunlished = array_filter($posts, function ($post){
//     return ! $post->published;

// });

// $publishedPosts = array_filter($posts, function ($post){
//     return $post->published;

// });

// foreach ($posts as $post) {
//     $post->published = true;
// }

//array map
// $modified = array_map(function ($post) {
//     return ['title' => $post->title];
// }, $posts);

// $titles = array_map(function ($post) {
//     return $post->title;
// }, $posts);

$posts = array_map(function ($post) {
    return (array) $post;
}, $posts);

$titles = array_column($posts, 'author');

var_dump($titles);