<?php

if(!empty($_POST['nome']) && !empty($_POST['senha'])){
  //include 'config.php';
  require 'UserLoginSession.php';

  $nome = addslashes($_POST['nome']);
  $senha = addslashes($_POST['senha']);

  $user = new UserLogin();

  if($user->logar($nome, $senha) == true){
    if(isset($_SESSION['logado'])){
      header('Location:inicial.php');
    }else{
  header('Location:../html/index.html');
    }
  }else{
  header('Location:../html/index.html');
  }

}else{
  header('Location:../html/index.html');
}
?>
