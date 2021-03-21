<?php
    class User extends Connect{
        
        public function login(){
            $signin=parent::Conexion();
            parent::setNames();
            if (isset($_POST["send"])) {
                $email = $_POST["user_email"];
                $pass  = $_POST["user_pass"];
                if (empty($email) and empty($pass)) {
                    header("Location:".Connect::route()."index.php?m=2");
                    exit();
                } else {
                    $sql = "SELECT * FROM tm_user WHERE user_email=? AND user_pass=? AND user_state=1";
                    $stmt = $signin->prepare($sql);
                    $stmt->bindValue(1,$email);
                    $stmt->bindValue(2,$pass);
                    $stmt->execute();
                    $result = $stmt->fetch();
                    if (is_array($result) and count($result)>0) {
                        $_SESSION["user_id"]=$result["user_id"];
                        $_SESSION["user_name"]=$result["user_name"];
                        $_SESSION["user_lastname"]=$result["user_lastname"];
                        header("Location:".Connect::route()."view/home");
                        exit();
                    } else {
                        header("Location:".Connect::route()."index.php?m=2");
                        exit();
                    }
                    
                }
                
            }
        }
    }
?>