<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="../styles-global.css" />
  <title>Calcular Frete</title>
</head>

<body>
  <!-- Colocar o formulário -->
  <form method="GET" action="calcula-frete.php" >
  <h1>Calcular Frete</h1>
  <div class="input-group">
    <label>Cidad de Origin</label>
    <input type="text" id="origem" name="origem" required/>

  </div>
  <div class="input-group">
    <label>Cidad de Destino</label>
    <input type="text" id="destino" name="destino"  required/>

  </div>
  <div class="input-group">
    <label>Distancia</label>
    <input type="text" id="distancia" name="distancia"  required/>

  </div>
  <div class="input-group">
    <label>pedagios</label>
    <input type="text" id="pedagios" name="pedagios" required/>

  </div>
  
  <button>Calcular</button>
  <button>Limpar</button>

  </form>
</body>

</html>