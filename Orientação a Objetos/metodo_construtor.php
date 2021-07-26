<?php 

class Post {
    public int $likes = 0;
    public array $coments = [];
    public string $author;

    public function __construct($qtlikes = 0)
    {
        $this->likes = $qtlikes;
        echo 'teste';
    }

    public function aumentarLike(){
        echo 'abc';
        $this->likes++;
    }
}

// isso é um objeto

$post1 = new Post(25);
$post1->likes = 3;

$post2 = new Post();
$post2->likes = 10;