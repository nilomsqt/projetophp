<?php
$dsn = 'mysql:dbname=banco;host=127.0.0.1';
$user = 'root';
$password = '';
try {
$dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
echo 'Connection failed: ' . $e->getMessage();
}

$id = $_GET['id'];
$sql = "SELECT * FROM clientes where id='$id' ";
foreach ($dbh->query($sql) as $row) {
    echo "<h1> Novo Cadastro</h1>

    <form action=atualizar.php>
    <input type=hidden name=id value=$id>

    <p>Nome</p>
    <input type=text name=nome value=".$row['nome'].">
    
    <p>Data de nascimento</p>
    <input type=date name=data value=".$row['data'].">
    
    <p>Salario</p>
    <input type=number name=salario value=".$row['salario'].">
    <br><br>
    <input type=submit value=Salvar>
    </form>";

    echo "<a href=tabela.php>Voltar</a></p>";

}