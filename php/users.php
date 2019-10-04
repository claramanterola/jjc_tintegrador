<?php
  $USUARIOS_FILENAME = file_get_contents("user.json");
  $users = json_decode($USUARIOS_FILENAME, true);
 ?>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div>
      <fieldset>
          <div class="container">
            <ul> USERS:
              <?php foreach($users as $user) : ?>
                <li><a href="<?= "http://localhost:8888/jjc_tintegrador/php/login.php".$user["email"] ?>">
                <?= $user["email"] ?>
                </a></li>
              <?php endforeach; ?>
            </ul>
          </div>
      </fieldset>
    </div>
  </body>
</html>