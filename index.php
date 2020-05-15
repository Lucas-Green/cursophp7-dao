<?php 

require_once("config.php");

//carrega um usuario
//$alexandre = new Usuario();
//$alexandre->loadbyId(2);
//echo $alexandre;

//Carrega uma lista de usuarios
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista de usuarios buscando pelo login
//$search = Usuario::search("tu");
//echo json_encode($search);

//Carrega um usuario usando o login e a senha 
//$usuario = new Usuario();
//$usuario->login("Lucas", "123456789");
//echo $usuario;

/*Carregando um novo usuario
$aluno = new Usuario("aluno", "$*&£");
$aluno->insert();
echo $aluno;
*/

$usuario = new Usuario();

$usuario->loadById(9);

$usuario->update("joaozinho", "paderinho()£%");

echo $usuario;

?>