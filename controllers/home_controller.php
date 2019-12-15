<?php

$allArticles = Articles::getAllArticles();
$allCategories = Categories::getAllCategories();

$lastArticle = Articles::getLastArticle();
$lastArticleLeft = Articles::getLastArticle(1);
$lastArticleRight = Articles::getLastArticle(1);

