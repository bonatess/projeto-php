<?php
include 'conn.php';

$sql= 'SELECT * From BANDAS';

$result = $conn->query($sql);


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<table border=1>
    
    <thead>
        <th>ID</th>
        <th>Nome</th>
        <th>Data cadastro</th>
        <th></th>
        <th></th>
    </thead>
        <?php 
            while($dados = $result->fetch_assoc()){?>
     <tbody>
     <td><?php echo $dados['ID_BANDAS'];?></td>
            <td><?php echo"<a href='http://localhost/projPHP/projeto-php/index.php/alterar.php'>Alterar</a>";?></td>
            <td><?php echo"<a href='http://localhost/projPHP/projeto-php/index.php/excuir.php'>Excluir</a>";?></td>

     </tbody>
    <?php } ?>
</table>
    </thead>
    
</body>
</html>