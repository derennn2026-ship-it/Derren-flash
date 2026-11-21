<?php
session_start();
// Ganti password ini!
$PASSWORD = 'admin123';
if(($_POST['pass'] ?? '') === $PASSWORD) $_SESSION['admin'] = true;

if(empty($_SESSION['admin'])){
  echo '<form method="post" style="text-align:center;padding:50px">
        <input type="password" name="pass" placeholder="Password admin">
        <button>Login</button></form>';
  exit;
}
header('Location: index.php');