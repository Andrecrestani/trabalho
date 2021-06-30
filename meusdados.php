<?php

echo "<pre>";

$nome=$_POST['nome'];
  if (empty($_POST['nome'])){
      echo " o campo nome está vaziu" ;
  }else{
    echo"nome valido";
}
  echo "<pre>";

$idade=$_POST['idade'];
  if (empty($_POST['idade'])){
      echo " o campo idade esta  vaziu" ;
  }else{
    echo"idade aceita";
}

echo "<pre>";

$email=$_POST['email'];
  if (empty($_POST['email'])){
      echo "o campo email esta  vaziu" ;
  }else{
    echo"email aceito";
}
  echo "<pre>";

$senha=$_POST['senha'];
  if (strlen($senha) < 10){
      echo "sua senha deve ter pelo menos 10 caracteres";
  } else{
      echo"senha aceita";
  }


?>