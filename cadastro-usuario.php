<?php 
$sql = session_start();
$nome = $_POST['usuario'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$confirmaSenha = $_POST['confirma-senha'];
$estado = $_POST['estado'];
$cep = $_POST['cep'];
$cidade = $_POST['cidade'];
$endereco = $_POST['endereco'];
$confirma = $_POST['confirma-real'];

echo "Cadastro realizado com sucesso";
echo "Nome: ".$nome;
echo "CPF: ".$cpf;
echo "E-mail: ".$email;
echo "Senha: ".$senha;
echo "Confirmação da Senha: ".$confirmaSenha;
echo "Estado: ".$estado;
echo "CEP: ".$cep;
echo "Cidade: ".$cidade;
echo "Endereço: ".$endereco;
echo "Pessoa real? ".$confirma;

if ($senha == $confirmaSenha) {
	echo "Okay";
} else {
	echo "Senhas não são iguais!";
}

 ?>