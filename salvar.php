<?php

$dsn = 'mysql:dbname=banco;host=127.0.0.1';
$user = 'root';
$password = '';
try {
$dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
echo 'Connection failed: ' . $e->getMessage();
}

$nome=$_GET['nome'];
$data=$_GET['data'];
$salario=$_GET['salario'];

$count = $dbh->exec("insert into clientes (nome,data,salario) 
          value('$nome','$data', '$salario') ");
          
          
echo "<p>$count registro foi incluído</p>";
echo "<a href=tabela.php>Voltar</a></p>";

?>