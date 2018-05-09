<?php 
	$sql = session_start();
	$usuariot =$_POST['usuario'];
	$senhat =$_POST['senha'];

	if($usuariot == 'admin@admin.com'){
		header("Location: painel-adm.php");
	} else {
		header("Location: painel-usuario.php");
	}
 ?>
