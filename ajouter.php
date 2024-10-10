<?php
    $conn = mysqli_connect("localhost", "root", "", "blog");

    if(isset($_POST['article'])){
        $query = " INSERT INTO test VALUES(NULL, '$titre', '$contenu', 'Now())";

        mysqli_query($connect, $query);

        
    }
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
        <h1 class="text-center">Blog</h1>
        <div class="text-end">
            <a href="" class="text-light">Administration</a>
        </div>


    </header>
  
        <form action="" method="POST">
            <div class="form-group">
                <label for="">PSEUDO</label>
                <input  name="pseudo" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Contenu</label>
                <textarea  name="Contenu" class="form-control"></textarea>
            </div>

            <input type="submit" class="btn btn-success mt-3">
        </form>
            <footer class="text-center bg-secondary p-4 mt-5">
                BLOG - IPSSI
            </footer>
</body>
</html>