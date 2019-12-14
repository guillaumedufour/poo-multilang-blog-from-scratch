<!doctype html>
<html lang="fr">
<head>
    <?php include_once 'views/includes/head.php' ?>
</head>
<body>
<div class="container">

    <?php include_once 'views/includes/header.php' ?>
    <div class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex justify-content-between">

            <?php
            foreach ($allCategories as $index => $category) { ?>
                <a class="p-2 text-muted" href="#"><?php echo($category['name']) ?></a>
            <?php }
            ?>
        </nav>
    </div>

    <div class="jumbotron p-4 p-md-5 text-white rounded bg-dark">
        <div class="col-md-6 px-0">
            <h1 class="display-4 font-italic"><?php echo($lastArticle['title']) ?></h1>
            <p class="lead my-3"><?php echo($lastArticle['sentence']) ?></p>
            <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">lire la suite...</a></p>
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-md-6">
            <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-primary"><?php echo($lastArticleRight['category']) ?></strong>
                    <h3 class="mb-0"><?php echo($lastArticleLeft['title']) ?></h3>
                    <div class="mb-1 text-muted"><?php echo($lastArticleLeft['date']) ?></div>
                    <p class="card-text mb-auto"><?php echo($lastArticleLeft['sentence']) ?></p>
                    <a href="#" class="stretched-link">Continue reading</a>
                </div>
                <div class="col-auto d-none d-lg-block">
                    <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg"
                         preserveAspectRatio="xMidYMid slice" focusable="false" role="img"
                         aria-label="Placeholder: Thumbnail"><title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#55595c"/>
                        <text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
                    </svg>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-success"><?php echo($lastArticleRight['category']) ?></strong>
                    <h3 class="mb-0"><?php echo($lastArticleRight['title']) ?></h3>
                    <div class="mb-1 text-muted"><?php echo($lastArticleRight['date']) ?></div>
                    <p class="mb-auto"><?php echo($lastArticleRight['sentence']) ?></p>
                    <a href="#" class="stretched-link">Continue reading</a>
                </div>
                <div class="col-auto d-none d-lg-block">
                    <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg"
                         preserveAspectRatio="xMidYMid slice" focusable="false" role="img"
                         aria-label="Placeholder: Thumbnail"><title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#55595c"/>
                        <text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
                    </svg>
                </div>
            </div>
        </div>
    </div>
</div>

<main role="main" class="container">
    <div class="row">
        <div class="col-md-8 blog-main">
            <h3 class="pb-4 mb-4 font-italic border-bottom">
                From the Firehose
            </h3>

            <?php
            foreach ($allArticles as $index => $article) { ?>
                <div class="blog-post">
                    <h2 class="blog-post-title"><?php echo($article['title']) ?></h2>
                    <p class="blog-post-meta">le <?php echo(date_format(date_create($article['date']), 'd/m/Y')); ?> par
                        <a
                                href="#"><?php echo($article['firstname'].' '.$article['lastname']) ?></a></p>
                    <p> <?php echo($article['content']) ?> </p>
                </div><!-- /.blog-post -->
            <?php }
            ?>

            <nav class="blog-pagination">
                <a class="btn btn-outline-primary" href="#">Older</a>
                <a class="btn btn-outline-secondary disabled" href="#" tabindex="-1" aria-disabled="true">Newer</a>
            </nav>

        </div><!-- /.blog-main -->

        <aside class="col-md-4 blog-sidebar">
            <div class="p-4 mb-3 bg-light rounded">
                <h4 class="font-italic">About</h4>
                <p class="mb-0">Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus
                    sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
            </div>


        </aside><!-- /.blog-sidebar -->

    </div><!-- /.row -->

</main><!-- /.container -->
<?php include_once 'views/includes/footer.php' ?>
</body>
</html>