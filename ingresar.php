<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="estilo.php">

</head>

<body>
<?php include('conexion.php');?>

<table>
    <tr><th colspan="4"><hl>productos</hl></th></tr>
    <tr>
    <th>producto</th>
    <th>login</th>
    <th>administrador</th>
    <th>operador</th>
    </tr>

    <?php
    $sql="select * from productos";
    $resultado=mysqli_fetch_array($resultado))
    {
    ?>

<tr>
    <td><?php echo $mostrar('producto')?></td>
    <td><?php echo $mostrar('login')?></td>
    <td><?php echo $mostrar('administrador')?></td>
    <td><?php echo $mostrar('operador')?></td>
</tr>




</table>

</body>


</html>