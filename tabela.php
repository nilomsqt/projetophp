<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    
    <title>Tabela de cadastro</title>
<link rel=stylesheet href=https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css>

<script src=https://code.jquery.com/jquery-3.3.1.js></script>
<script src=https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js></script>
 
<script>
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>

</head>
<body>
<style>
h1{
    
    font-size: 38px;
    background-color: lightgray;
    font-family:"Times new romam";
}
</style>
<h1>Tabela de Registros</h1>

        <br>
<a href=incluir.php>Novo cadastro</a>
<br><br>
<table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Nascimento</th>
                <th>Salario</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
<?php
$dsn = 'mysql:dbname=banco;host=127.0.0.1';
$user = 'root';
$password = ''; 
try {
$dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
echo 'Connection failed: ' . $e->getMessage();
}
$sql = 'SELECT * FROM clientes ';
foreach ($dbh->query($sql) as $row) {
    
    echo "<tr>";
    echo "<td>".$row['id']."</td>";
    echo "<td>".$row['nome']."</td>";
    echo "<td>".$row['data']."</td>";
    echo "<td>".$row['salario']."</td>";
    echo "<td><a href=editar.php?id=".$row['id'].">Editar</a></td>";
    echo "<td><a href=excluir.php?id=".$row['id'].">Excluir</a></td>";
    echo "</tr>";
}
?>
        </tbody>
        <tfoot>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Nascimento</th>
                <th>Salario</th>
                <th></th>
                <th></th>
            </tr>
        </tfoot>
    </table>
</body>
</html>