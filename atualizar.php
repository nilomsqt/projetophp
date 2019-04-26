<?php
$dsn = 'mysql:dbname=banco;host=127.0.0.1';
$user = 'root';
$password = '';

try {
$dbh = new PDO($dsn, $user, $password,);
} catch (PDOException $e) {
echo 'Connection failed: ' . $e->getMessage();
}
$id = $_GET['id'];
$nome=$_GET['nome'];
$data=$_GET['data'];
$salario=$_GET['salario'];


$sql = "update clientes 
set nome='$nome', 
data='$data',
salario=$salario
where id=$id";

  
$count = $dbh->exec($sql);

echo "<p>$count registro(s) foi atualizado</p>";
echo "<a href=tabela.php>Voltar</a></p>";
?>
