<?php

require_once("config.php");

//Carrega apenas um usuário pelo ID
// $root = new Usuario();
// $root->loadById(4);
//echo $root;

//Carrega uma lista de usuários
// $lista = Usuario::getList();
// echo json_encode($lista);

//Carrega uma lista de usuarios buscando pelo login
// $search = Usuario::search("jo");
// echo json_encode($search);

//Carrega um usuário usando o login e a senha
// $usuario = new Usuario();
// $usuario->login("root", "!@#$%");
//echo $usuario;

$aluno = new Usuario("aluno", "@lun0");
$aluno->insert();

echo $aluno;

?>