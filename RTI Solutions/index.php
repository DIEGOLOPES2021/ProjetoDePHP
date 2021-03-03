<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="../styles-global.css" />
  <title>Calcular Frete</title>
</head>

<body>
  <!-- Colocar o formulário -->
  <form method="GET" action="calcular-aumento.php" >

  <h1>Aumento</h1>

  <div class="input-group">
    <label>Nome do Cliente</label>
    <input type="text" id="nome" name="nome" required/>
  </div>

  <div class="input-group">
    <label>Valor do Salario</label>
    <input type="number" id="salario" name="salario"  required/>
  </div>
 
  
  
  <button>Calcular</button>
  <button>Limpar</button>

  </form>
</body>

</html>