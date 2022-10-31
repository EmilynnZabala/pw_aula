<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php
    include 'conexao.php';
    $Busca_cargo=$cn->query("select Cargo from tbl_Empregos group by Cargo");
    $Busca_area=$cn->query("select Area from tbl_Empregos group by Area");
    ?>

</head>


<body>
<form name="frmbusca" method="get" action="pesquisarr.php">

<select name="SltCargo">
            <option value = "Selecione">Selecione</opition>
            <?php 
            while($exibeCargo=$Busca_cargo->fetch(PDO::FETCH_ASSOC)){?>
            <option values = <?php echo $exibeCargo['Cargo'];?>>
            <?php echo $exibeCargo['Cargo']; ?></option>
            <?php } ?>
</select>


<select name="SltArea">
            <option value = "Selecione">Selecione</opition>
            <?php 
            while($exibeArea=$Busca_area->fetch(PDO::FETCH_ASSOC)){?>
            <option values = <?php echo $exibeArea['Area'];?>>
            <?php echo $exibeArea['Area']; ?></option>
            <?php } ?>
</select>
</form>

<div>
    <?php
    if (!isset($_GET['SltCargo']) and !isset($_GET['SltArea']))
    {
        
    } 
    else {
        $cargo = $_GET['SltCargo'];
        $area  =  $_GET['SltArea'];
        echo "<table border ='1' width='80%'><tr>";
        echo "<td width='8%'> Registro </td> <td width='22%'> Nome </td> <td width='10%'> Cargo </td> 
        <td width='10%'> Area </td> <td width ='10%'> Salario </td> <td width='10%'> eStatus </td>";
    }
    
</body>
</html> 
