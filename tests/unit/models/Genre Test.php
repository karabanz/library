<?php

namespace tests\unit\models;

use app\models\Genre;

class GenreTest extends \Codeception\Test\Unit
{
    public function testFindBooks(){
        $genre = Genre::findOne(1);
        // Ищем книги по жанру с id 1
        $books = $genre->findBooks();
        // Убедиться, что кол-во эле-тов в массиве равно = 2
        expect_that(count($books) == 2);
    }
    
    //public function testFindIssuance(){
//
   // }

}
