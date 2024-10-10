<?php
    $conn = mysqli_connect("localhost", "root", "", "blog");

    $query = mysqli_query($connect, "SELECT * FROM test");

    $articles = mysqli_fetch_all($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header class="bg-secondary p-4">
        <h1 class="text-center">BLOG</h1>
        <div class="text-end">
            <a href="ajouter.php" class="text-light">Administration</a>
        </div>


    </header>
    <main class="container">
        <h1 class="text-success">Liste article</h1>
        <?php while($articles = $query ->fetch_assoc()): ?>
        <h2 class="text-succes">
            <a href="article.php" <?= var_dump($article[$cle][0]) ?>></a>
          
        </h2>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Natus, repellat deserunt officia eos distinctio, omnis sequi adipisci hic quasi unde tempore saepe velit corrupti, assumenda iusto excepturi tenetur. Sequi, voluptatibus.</p>
        <div>
            Créé par CLTR LE GOAT
        </div>
        <hr>
            <?php endwhile; ?>
</body>
</html>