<?php

function listaFilmes(){

  $con = mysqli_connect("localhost","root","");
  mysqli_select_db($con,"cinema");
  $lista = mysqli_query($con,"SELECT * FROM filmes");

  if (!$lista) {
    die("nâo foi possivel listar os filmes");
  }

  while ($row = mysqli_fetch_assoc($lista)) {
    
    echo"<div class='floating-box'>";
    echo '<input type="radio" name="filme" value="'.$row["id_filme"].'">';
    echo $row['nome'],"<br>";
    echo $row['genero'],"<br>";
    echo $row['classificacao'],"<br>";
    echo"</div>";
  }
  mysqli_close($con);

}

function cadastraFilmes(){
  $nome = $_POST["nome"];
  $genero = $_POST["genero"];
  $classificacao = $_POST["classificacao"];
  $id = rand(100000, 999999);

  $con = mysqli_connect("localhost","root","");
  mysqli_select_db($con,"cinema");
  $insert = "INSERT INTO filmes VALUES ('".$id."', '".$nome."', '".$genero."', '".$classificacao."');";
  echo $insert;
  mysqli_query($con,$insert);
  mysqli_close($con);
  header('Location: /cinema/');
}

function cadastraClientes(){
  $nome = $_POST["nome"];
  $cpf = $_POST["cpf"];
  $idade = $_POST["idade"];
  $id = rand(100000, 999999);

  $con = mysqli_connect("localhost","root","");
  mysqli_select_db($con,"cinema");
  $insert = "INSERT INTO cliente VALUES ('".$id."', '".$cpf."', '".$nome."', '".$idade."');";
  echo $insert;
  mysqli_query($con,$insert);
  mysqli_close($con);
  header('Location: /cinema/');
}

function vendeIngresso(){
  $filme = $_POST["filme"];
  $numeroP = $_POST["numeroP"];
  $preco = $_POST["preco"];
  $metodoPagamento = $_POST["metodo"];
  $tipo = $_POST["tipo"];
  $data = $_POST["data"];
  $horario = $_POST["horario"];
  $linguagem = $_POST["linguagem"];
  $sala = $_POST["sala"];
  $cpf = $_POST["cpf_cliente"];
  $existeHorario = false;
  $id_ingresso = rand(100000, 999999);

  $con = mysqli_connect("localhost","root","");
  mysqli_select_db($con,"cinema");

  $select = "SELECT * from horarios WHERE data = ".$data." AND horarios = ".$horario.";";
  $lista = mysqli_query($con,$select);
  if ($lista) {
    $id_horario = $row['id_horario'];
  }else{
    $id_horario = rand(100000, 999999);
    $insert = "INSERT INTO horarios VALUES ('".$id_horario."', '".$data."', '".$horario."', '".$linguagem."');";
    echo $insert;
    mysqli_query($con,$insert);
  }

  $select = "SELECT * from cliente WHERE cpf =".$cpf.";";
  $lista = mysqli_query($con,$select);
  if ($lista) {
    $cpf = mysqli_fetch_assoc($lista)['id_cliente'];
  }
  
  $insert = "INSERT INTO ingressos VALUES ('".$id_ingresso."', '".$numeroP."', '".$preco."', '1','".$metodoPagamento."','".$tipo."','".$cpf."','".$id_horario."');";
  echo $insert;
  mysqli_query($con,$insert);

  mysqli_close($con);

  header('Location: /cinema/');
}

if(isset($_POST["genero"])){
  cadastraFilmes();
}else if(isset($_POST["cpf"])){
  cadastraClientes();
}else if(isset($_POST["cpf_cliente"])){
  vendeIngresso();
}
 
?>