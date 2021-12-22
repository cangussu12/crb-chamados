<?php


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
 <!-- CSS -->
 <link rel="stylesheet" href="estilo.css">

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>
<body>

<div class="container app" style="padding-top: 20px;">
  <br />
  <br/>
  <form class="container-sm" style="width: 300px; height:20px;" action="logar.php" method="POST">
  <div class="row">
      <div class="form-floating mb-3">
          <img src="img/crb-logo.png" width="100%" height="100%">
      </div>
    </div>

      <div class="form-floating mb-3">
          <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="email">
          <label for="floatingInput">Email address</label>
      </div>
      <div class="form-floating">
          <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="senha">
          <label for="floatingPassword">Password</label>
      </div>
      <div class="input-group mb-2" style="padding-top: 10px;">
          <button type="submit" id="botao">Entrar</button>
      </div>
  </form>
</div>
</body>
</html>