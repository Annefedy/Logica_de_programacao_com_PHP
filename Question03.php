<!DOCTYPE html>
<html>

<head>
  <title>Calculadora</title>
  <style type="text/css">
    * {
      font-family: sans-serif;
    }

    div {
      margin-top: 10px;
    }

    input[type="text"] {
      width: 250px;
      padding: 10px;
    }

    button {
      padding: 10px;
      font-size: 16px;
    }
  </style>
</head>

<body>
  <h1>Calculadora</h1>
  <form action="Question03.php" method="post">
    <div>
      <label>Escolha uma operação:</label>
      <select name="operacao">
        <option value="soma">Soma</option>
        <option value="subtracao">Subtração</option>
        <option value="multiplicacao">Multiplicacao</option>
        <option value="divisao">Divisão</option>
      </select>
    </div>
    <div>
      <label>Primeiro número:</label>
      <input type="text" name="numero1" />
    </div>
    <div>
      <label>Segundo número:</label>
      <input type="text" name="numero2" />
    </div>
    <div>
      <button type="submit">Calcular</button>
    </div>
  </form>
</body>

</html>

<?php
if (isset($_POST['operacao'])) {
  $numero1 = $_POST['numero1'];
  $numero2 = $_POST['numero2'];
  $operacao = $_POST['operacao'];

  if ($operacao == 'soma') {
    $resultado = $numero1 + $numero2;
    echo "Resultado da $operacao: $resultado";
  } elseif ($operacao == 'subtracao') {
    $resultado = $numero1 - $numero2;
    echo "Resultado da $operacao: $resultado";
  } elseif ($operacao == 'multiplicacao') {
    $resultado = $numero1 * $numero2;
    echo "Resultado da $operacao: $resultado";
  } elseif ($operacao == 'divisao') {
    $resultado = $numero1 / $numero2;
    echo "Resultado da $operacao: $resultado";
  }
}
?>