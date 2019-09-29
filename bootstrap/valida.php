<?php
session_start();

$usuarios_validos = array(
    array('id' => 1, 'email' => 'gato@gato.com.br', 'senha' => '12345'),
    array('id' => 2, 'email' => 'cahorro@cachorro.com.br', 'senha' => '12345'),
    array('id' => 3, 'email' => 'hamster@hamster.com.br', 'senha' => '12345'),
    array('id' => 4, 'email' => 'papagaio@papagaio.com.br', 'senha' => '12345')
);

$email = isset($_POST['email']) ? $_POST['email'] : null;
$senha = isset($_POST['senha']) ? $_POST['senha'] : null;

$valido=false;
foreach ($usuarios_validos as $usuarios){
    if (($usuarios['email'] == $email) && ($usuarios['senha'] == $senha)){
        $valido=true; 
	}
}
if ($valido==true){
    header('Location: principal.php');
}   else{
    header("Location:/?error=1");
    }
?>
