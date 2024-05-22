<h2>Projetos</h2>

<div class="panel panel-default">
  <div class="panel-heading text-right">
    <div class="pull-right">
      <a class="btn btn-primary" href='MODEL/Projeto.php'>Novo</a>
    </div>
  </div>
  <br>
  <div class="panel-body">
    <table id="tabela" class="table table-striped table-bordered table-hover" style="width:100%">
      <thead>
        <tr>
          <th>Nome</th>
          <th>Duração</th>
          <th width="280px">Ações</th>
        </tr>
      </thead>
      <tbody>
        <?php if (isset($projetos) && is_array($projetos)) : ?>
          <?php foreach ($projetos as $projeto) : ?>
            <tr>
              <td><?= htmlspecialchars($projeto->nome) ?></td>
              <td><?= htmlspecialchars($projeto->duracao) ?></td>
              <td>
                <a class="btn btn-primary" href='Projeto.php=<?= htmlspecialchars($projeto->id) ?>'>Ver</a>
                <a class="btn btn-primary" href='Projeto.php<?= htmlspecialchars($projeto->id) ?>'>Alterar</a>
                <a class="btn btn-danger" href='Projeto.php<?= htmlspecialchars($projeto->id) ?>' onclick="return confirm('Você tem certeza que deseja excluir este projeto?')">Excluir</a>
              </td>
            </tr>
          <?php endforeach; ?>
        <?php else : ?>
          <tr>
            <td colspan="3">Nenhum projeto encontrado.</td>
          </tr>
        <?php endif; ?>
      </tbody>
    </table>
  </div>
</div>


