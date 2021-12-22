<?php

    class Usuario {

        public function login($email, $senha){
            global $pdo;

            $sql = "SELECT * FROM usuarios WHERE email = :email AND senha = :senha";
            $sql = $pdo->prepare($sql);
            $sql->bindValue(":email", $email);
            $sql->bindValue(":senha", md5($senha));
            $sql->execute();

            if($sql->rowCount() > 0) {
                $dado = $sql->fetch();

                $_SESSION['idUsuario'] = $dado['id'];

                return true;
                } else {
                    return false;
            }
        }

             public function logado($id) {

                    global $pdo;

                    $array = array();

                    $sql = "SELECT email FROM usuarios WHERE id = :idUsuario";
                    $sql = $pdo->prepare($sql);
                    $sql->bindValue(":idUsuario", $id);
                    $sql->execute();

                    if($sql->rowCount() > 0) {
                        $array = $sql->fetch();
                    }

                    return $array;
                }

                public function usuarios() {

                    global $pdo;

                    $array = array();

                    $sql = "SELECT * FROM usuarios";
                    $sql = $pdo->prepare($sql);
                    $sql->execute();

                    if($sql->rowCount() > 0) {
                        $array = $sql->fetchAll();
                    }

                    return $array;
                }

                
                public function perfil($id) {

                    global $pdo;

                    $array = array();

                    $sql = "SELECT sit FROM usuarios WHERE id = :idUsuario";
                    $sql = $pdo->prepare($sql);
                    $sql->bindValue(":idUsuario", $id);
                    $sql->execute();

                    if($sql->rowCount() > 0) {
                        $array = $sql->fetch();
                    }

                    return $array;
                }
              
            }


?>