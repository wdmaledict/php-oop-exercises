<?php

class Book
{
  public $title;
  public $author;
  public $pages;
}

$book1 = new Book();
$book2 = new Book();

$book1->title = 'Biocentrizm';
$book1->author = 'Robert Lanza';
$book1->pages = 150;

$book2->title = 'Umece ratovanja';
$book2->author = 'Sun Cu';
$book2->pages = 100;

var_dump($book1);
var_dump($book2);