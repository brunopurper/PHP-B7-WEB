<?php 

// private and protect não acessamos fota da classe
// métodos -> 

class Post {
    public $likes = 0;
    public $coments = [];
    public $author;

    public function aumentarLike(){
        $this->likes++;
    }
}

$post1 = new Post();
$post1->likes = 3;

$post2 = new Post();
$post2->likes = 10;