<?php 
    require_once("config.php");

    error_reporting(E_ALL);
     ini_set('display_errors', 1);

//Carrega um usuário
//$root = new Usuario();
//$root->loadbyId(3);
//echo $root; 

//Carrega uma lista de usuários
//$lista = Usuario::getList(); // chama direto porque é um método static
//echo json_encode($lista);

/*Carrega uma lista de usuários buscando pelo login
$search = Usuario::search("jo");
echo json_encode($search);*/ 

/*carrega um usuário usando o login e a senha
$usuario = new Usuario();
$usuario->login("Isabella", "78945");
echo $usuario;*/ 

/*
//Criando um novo usuário
$aluno = new Usuario("aluno", "@lun0");
$aluno->insert();
echo $aluno;
*/
/*
//Alterar um usuário
$usuario = new Usuario();
$usuario->loadById(6);
$usuario->update("professor", "!@#$%¨&*");
echo $usuario;
*/
    
//Deleta um usuário


    die ("Kamila"); 
    $usuario = new Usuario(); 

    $usuario->loadById(6); 

    $usuario->delete(); 

    echo $usuario; 

?>
