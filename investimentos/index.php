<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../styles-global.css" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form method="$_GET" action="cotacao.php" >  
        <h1> XD Investimentos </h1>
        <div class="input-group">
        <label>Valor em Reais</label>
        <input type="number" id="reais" name="reais" />  
        </div>
    
    
        <div>
            <label>Conveter em:</label><br><br>
            <label>Dolares</label>
            <input ip="dolares" type="radio" name="sistema" value="dolares" />
        </div>

        <div>
            <label>Euros</label>
            <input ip="euros" type="radio"  name="sistema" value="euros" />
        </div>


        <br>
        <button>Calcular</button>
    </form>



</body>
</html>