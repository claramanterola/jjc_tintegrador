<?php
  function encriptarPassword($password) {
    return password_hash($password, PASSWORD_DEFAULT);
  }
?>
