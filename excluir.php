<?php
$dsn = 'mysql:dbname=banco;host=127.0.0.1';
$user = 'root';
$password = '';
try {
$dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
echo 'Connection failed: ' . $e->getMessage();
}
$id=$_GET['id'];
$count = $dbh->exec("DELETE FROM clientes WHERE id = '$id'");
echo "<p>$count registro foi excluído</p>";
echo "<a href=tabela.php>Voltar</a></p>";
?>