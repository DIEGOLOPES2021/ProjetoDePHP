<?php 
$cidades= [
    1 => "jandira ",
    2 => "osasco ",
    3 => "barueri",
    4 => "cararpicuiba",
    5 => "itapevi",
    6 => "sao paulo",
    7 => "santana de parnaiba",
    8 => "cotia",
];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles-global"/>
</head>
<body>
    <form method="$_POST" action="exercicio05.php" >
        <div class="input-group">
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" placeholder="Escreva seu nome"/>
        </div>
        <div class="input-group">
            <select name="cidade" id="cidade">
            <option value=""> Selecione</option>
            <?php 
                foreach ($cidades  as $key => $cidade){
            ?>
                 <option value="<?= $kay ?>"><?= $cidade ?> </option>
            <?php
                }
            ?>
            </select>
        </div>
        <button>Enviar</button>

<?php   
    $nome = isset($_POST["nome"])  ? $_POST["nome"]: "";
    $cidadeSelecionada= isset($_POST["cidade"])  ? $_POST["cidade"]: "";

    if($nome != "" && $cidadeSelecionada !=""){
?>
<h3> ola <?= $nome ?>, de <?= $cidades[$cidadeSelecionada]?>, seja bem vindo.</h3>
<?php 
}
?> 
    </form>
</body>
</html>