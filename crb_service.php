<?php
     try {
        $base = new PDO("mysql:host=localhost;dbname=db_chamados_crb", "root", "");

        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $query = "SELECT * FROM usuarios WHERE email = :email AND senha = :senha";
        $stmt = $base->prepare($query);

        $email = ($_POST["email"]);
        $senha = ($_POST["senha"]);

        $stmt->bindValue(":email", $email);
        $stmt->bindValue(":senha", $senha);

        $stmt->execute();

       $registro = $stmt->rowCount();

       if ($registro != 0) {
            echo "entrou";
        } else {
           echo "erro";     
        }
     }catch (Exception $e){
        die("Error" . $e->getMessage());
     }
    
?>