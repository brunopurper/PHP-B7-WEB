<?php 

class Post {
    public $likes = 0;
    public $coments = [];
    public $author;
}

$post1 = new Post();
$post1->likes = 3;

$post2 = new Post();
$post2->likes = 10;