<?php
session_start(); 
echo $_SESSION['nomeUsuario'];//A seção deve ser iniciada em todas as páginas
if (!empty($_SESSION['usuarioID'])) {		//Verifica se há seções
        session_destroy();						//Destroi a seção por segurança
        echo "Sessão iniciada";
       	header("Location: home.php") ;exit();	//Redireciona o visitante para login
}

?>