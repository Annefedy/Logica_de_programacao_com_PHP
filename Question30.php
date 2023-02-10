<!-- 30 - Popular uma tabela HTML 
com dados relacionados aos dados do exercício PARTE 5 
-->

<!DOCTYPE html>
<html>

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <title>Tabela</title>
</head>

<body>

  <div class="container">

    <img src="img/logoIbrap.png" class="rounded mx-auto d-block" alt="logo Ibrap">

    <figure class="text-center">
      <blockquote class="blockquote">
        <h1>Tabela de cadastro</h1>
      </blockquote>
    </figure>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Tipo</th>
          <th>Modelo</th>
          <th>Marca</th>
          <th>Cor</th>
          <th>Renavam</th>
          <th>Placa</th>
          <th>Ações</th>
        </tr>
      </thead>
      <tbody>
        <?php
        // Aqui você deve popular a tabela com os dados desejados
        $dados = array(
          array('Tipo' => 'Carro', 'Modelo' => 'Uno', 'Marca' => 'Fiat', 'Cor' => 'Prata', 'Renavam' => '123456789', 'Placa' => 'ABC-1234'),
          array('Tipo' => 'Carro', 'Modelo' => 'Gol', 'Marca' => 'Volkswagen', 'Cor' => 'Azul', 'Renavam' => '987654321', 'Placa' => 'XYZ-4321'),
          array('Tipo' => 'Moto', 'Modelo' => 'Biz', 'Marca' => 'Honda', 'Cor' => 'Vermelha', 'Renavam' => '154873963', 'Placa' => 'ABC-9876'),
          array('Tipo' => 'Caminhão', 'Modelo' => 'F4000', 'Marca' => 'Ford', 'Cor' => 'Branca', 'Renavam' => '951237456', 'Placa' => 'QWE-3241'),
          array('Tipo' => 'Van', 'Modelo' => 'Kombi', 'Marca' => 'Volkswagen', 'Cor' => 'Amarela', 'Renavam' => '741258963', 'Placa' => 'ZYX-9876'),
        );

        foreach ($dados as $dado) {
        ?>
          <tr>
            <td><?php echo $dado['Tipo']; ?></td>
            <td class="md"><?php echo $dado['Modelo']; ?></td>
            <td><?php echo $dado['Marca']; ?></td>
            <td><?php echo $dado['Cor']; ?></td>
            <td><?php echo $dado['Renavam']; ?></td>
            <td><?php echo $dado['Placa']; ?></td>
            <td>
              <button class="btn btn-sm btn-danger btn-excluir">Excluir</button>
              <button class="btn btn-sm btn-primary btn-alterar">Alterar</button>
            </td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
    <input type="hidden" id="teste" value="S">
    <button class="btn btn-sm btn-success btn-adicionar">Adicionar</button>
  </div>

  <script type="text/javascript">
    $(document).ready(function() {
      if ($('#teste').val() == 'S') {
        $('h2').append('<span class="text-danger"> TESTE </span>');
        setInterval(function() {
          $('.text-danger').fadeOut(1000).fadeIn(1000);
        }, 1000)
      }

      $('.btn-excluir').click(function() {
        if (confirm("Deseja realmente excluir?")) {
          $(this).closest('tr').remove();
        }
      });

      $('.btn-alterar').click(function() {
        var tr = $(this).closest('tr');
        var tipo = tr.find('td:eq(0)').html();
        var modelo = tr.find('td:eq(1)').html();
        var marca = tr.find('td:eq(2)').html();
        var cor = tr.find('td:eq(3)').html();
        var renavam = tr.find('td:eq(4)').html();
        var placa = tr.find('td:eq(5)').html();

        tr.find('td:eq(0)').html('<input type="text" value="' + tipo + '">');
        tr.find('td:eq(1)').html('<input type="text" value="' + modelo + '">');
        tr.find('td:eq(2)').html('<input type="text" value="' + marca + '">');
        tr.find('td:eq(3)').html('<input type="text" value="' + cor + '">');
        tr.find('td:eq(4)').html('<input type="text" value="' + renavam + '">');
        tr.find('td:eq(5)').html('<input type="text" value="' + placa + '">');
      });

      $('.btn-adicionar').click(function() {
        var novaLinha = '<tr>' +
          '<td><input type="text"></td>' +
          '<td><input type="text"></td>' +
          '<td><input type="text"></td>' +
          '<td><input type="text"></td>' +
          '<td><input type="text"></td>' +
          '<td><input type="text"></td>' +
          '<td>' +
          '<button class="btn btn-sm btn-danger btn-excluir">Excluir</button>' +
          '<button class="btn btn-sm btn-primary btn-alterar">Alterar</button>' +
          '</td>' +
          '</tr>';

        $('.btn-adicionar').attr('disabled', true);
        $('tbody').append(novaLinha);
      });

      $('tbody input').keyup(function() {
        if ($('.btn-adicionar').is(":checked")) {
          $('tbody input').attr('disabled', true);
        } else {
          $('tbody input').removeAttr('disabled');
        }
      })

      $('tbody .md').click(function() {
        alert($(this).closest('tr').find('td:eq(2)').html());
      });
    });
  </script>

</body>

</html