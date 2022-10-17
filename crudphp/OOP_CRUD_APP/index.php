<?php
    require_once('./config/dbconfig.php');
    $db = new operations();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>hello</title>
</head>
<body class="bg-dark">

    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="card mt-5">
                    <div class="card-header">
                        <h2> Signup Form </h2>
                    </div>
                        <?php $db->Store_Record(); ?>
                        <div class="card-body">
                            <form method="POST">
                                <input type="text" name="nom" placeholder=" Entrer nom" class="form-control mb-2" required>
                                <input type="text" name="prenom" placeholder=" Entrer prenom" class="form-control mb-2" required>
                                <input type="text" name="adresse" placeholder=" Entrer adresse" class="form-control mb-2" required>
                                <input type="text" name="ville" placeholder="Entrer ville" class="form-control mb-2" required>
                                <input type="text" name="age" placeholder="Entrer age" class="form-control mb-2" required>
                                <input type="text" name="sexe" placeholder="Entrer sexe" class="form-control mb-2" required>
                        </div>
                    <div class="card-footer">
                            <button class="btn btn-success" name="btn_save"> Enregistrer </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
