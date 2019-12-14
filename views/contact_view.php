<!doctype html>
<html lang="fr">
<head>
    <?php include_once 'views/includes/head.php' ?>
</head>
<body>
<div class="container">

    <?php include_once 'views/includes/header.php' ?>

    <main role="main" class="container">
        <h1> Contact</h1>

        <form action="" method="post">
            <div class="form-group">
                <label for="exampleFormControlInput1">Email</label>
                <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>

            <div class="form-group">
                <label for="exampleFormControlSelect2">Prénom</label>
                <input type="text" name="firstname" placeholder="John">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Message</label>
                <textarea name="message" class="form-control" id="exampleFormControlTextarea1" rows="3"
                          placeholder="Message">
                </textarea>
            </div>
            <button type="submit" class="btn btn-primary" name="btnContact">Submit</button>
        </form>

    </main>

    <?php include_once 'views/includes/footer.php' ?>

</body>
</html>