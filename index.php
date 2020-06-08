<?php

require_once("config.php");

/*Carrega apenas um usuário pelo ID
$root = new Usuario();
$root->loadById(4);
echo $root;*/

/*Carrega uma lista de usuários
$lista = Usuario::getList();
echo json_encode($lista);*/

/*Carrega uma lista de usuarios buscando pelo login
$search = Usuario::search("jo");
echo json_encode($search);*/

/*Carrega um usuário usando o login e a senha
$usuario = new Usuario();
$usuario->login("root", "!@#$%");
echo $usuario;*/

/*Insere um novo usuário no banco
$aluno = new Usuario("aluno", "@lun0");
$aluno->insert();
echo $aluno;*/

/*Alterar o usuários
$usuario = new Usuario();
$usuario->loadById(5);
$usuario->update("Professor", "pr0f3550r");
echo $usuario;*/

$usuario  = new Usuario();
$usuario->loadById(6);
$usuario->delete();
echo $usuario;

?>