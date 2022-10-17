  <?php


    require_once('./config/dbconfig.php');
    $db = new dbconfig();

    class operations extends dbconfig
    {
        // Insert Record in the Database
        public function Store_Record()
        {
            global $db;
            if(isset($_POST['btn_save']))
            {
                $nom = $db->check($_POST['nom_ruche']);
                $etat = $db->check($_POST['etat_ruche']);
                $position = $db->check($_POST['position_ruche']);
           
                if($this->insert_record($nom,$etat,$position))
                {
                    echo '<div class="alert alert-success"> Insertion avec succes :) </div>';
                }
                else
                {
                    echo '<div class="alert alert-danger"> echec de votre insertion </div>';
                }
            }
        }

        // Insert Record in the Database Using Query
        function insert_record($a,$b,$c)
        {
            global $db;
            $query = "insert into ruche (nom_ruche,etat_ruche,position_ruche) values('$a','$b','$c')";
            $result = mysqli_query($db->connection,$query);

            if($result)
            {
                return true;
            }
            else
            {
                return false;
            }
        }


        // View Database Record
        public function view_record()
        {
            global $db;
            $query = "select * from ruche";
            $result = mysqli_query($db->connection,$query);
            return $result;
        }

        // Get Particular Record
        public function get_record($id)
        {
            global $db;
            $sql = "select * from ruche where id_ruche='$id'";
            $data = mysqli_query($db->connection,$sql);
            return $data;

        }

        // Update Record
        public function update()
        {
            global $db;

            if(isset($_POST['btn_update']))
            {
                $id = $_POST['id_ruche'];
                $nom = $db->check($_POST['nom_ruche']);
                $etat = $db->check($_POST['etat_ruche']);
                $position = $db->check($_POST['position_ruche']);
              


                if($this->update_record($id,$nom,$etat,$position))
                {
                    $this->set_messsage('<div class="alert alert-success"> Mise a jour avec succes : )</div>');
                    header("location:view.php");
                }
                else
                {
                    $this->set_messsage('<div class="alert alert-success"> Echec : )</div>');
                }


            }
        }

        // Update Function 2
        public function update_record($id,$nom,$etat,$position)
        {
            global $db;
            $sql = "update ruche set nom_ruche='$nom', etat_ruche='$etat', position_ruche='$position' where id_ruche='$id'";
            $result = mysqli_query($db->connection,$sql);
            if($result)
            {
                return true;
            }
            else
            {
                return false;
            }
        }



        // Set Session Message
        public function set_messsage($msg)
        {
            if(!empty($msg))
            {
                $_SESSION['Message']=$msg;
            }
            else
            {
                $msg = "";
            }
        }

        // Display Session Message
        public function display_message()
        {
            if(isset($_SESSION['Message']))
            {
                echo $_SESSION['Message'];
                unset($_SESSION['Message']);
            }
        }

        // Delete Record
        public function Delete_Record($id)
        {
            global $db;
            $query = "delete from ruche where id_ruche='$id'";
            $result = mysqli_query($db->connection,$query);
            if($result)
            {
                return true;
            }
            else
            {
                return false;
            }
        }



    }




?>
