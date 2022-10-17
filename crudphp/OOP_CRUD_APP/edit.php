<?php
    require_once('./config/dbconfig.php');
    $db = new operations();
    $db->update();
    $id = $_GET['U_ID'];
    $result = $db->get_record($id);
    $data = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>hey</title>
</head>
<body class="bg-dark">

    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="card mt-5">
                    <div class="card-header">
                        <h2> Mise a jour </h2>
                    </div>
                        <?php $db->Store_Record(); ?>
                        <div class="card-body">
                            <form method="POST">
                                <input type="hidden" name="id_ruche" value="<?php echo $data['id_ruche']; ?>">
                                <input type="text" name="nom_ruche" placeholder=" nom_ruche" class="form-control mb-2" required value="<?php echo $data['nom_ruche']; ?>">
                                <input type="text" name="etat_ruche" placeholder="etat_ruche" class="form-control mb-2" required value="<?php echo $data['etat_ruche']; ?>">
                                <input type="text" name="position_ruche" placeholder=" position_ruche" class="form-control mb-2" required value="<?php echo $data['position_ruche']; ?>">
                               
                        </div>
                        </div>
                        </div>
                    <div class="card-footer">
                            <button class="btn btn-success" name="btn_update"> Mettre a jour</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
