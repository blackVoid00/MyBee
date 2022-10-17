<?php

    require_once('./config/dbconfig.php');
    $db = new operations();

    if(isset($_GET['D_ID']))
    {
        global $db;
        $ID = $_GET['D_ID'];

        if($db->Delete_Record($ID))
        {
            $db->set_messsage('<div class="alert alert-danger"> Suppression avec succes </div>');
            header("location:view.php");
        }
        else
        {
            $db->set_messsage('<div class="alert alert-danger"> Echec </div>');
        }
    }


?>
