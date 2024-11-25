<div class="caixa">
    <h4 class="text-center fw-bold mb-4">Cadastro de Livros</h4>
    <a type="button" class="btn btn-success mb-3" href="?pagina=novoCadastro">
        <i class="bi bi-plus"></i> Cadastrar Livro
    </a>
    <div>
        <table id="table_id" class="table table-striped table-hover align-middle">
            <thead class="table-dark">
                <tr>
                    <th>Título</th>
                    <th>Autor</th>
                    <th>Gênero</th>
                    <th>Status</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($linha = mysqli_fetch_array($consultaCadastros)) {
                    $statusClass = $linha['status_disponibilidade'] == 'Disponível' ? 'text-success' : 'text-danger';
                    echo '<tr>';
                    echo '<td>' . $linha['titulo'] . '</td>';
                    echo '<td>' . $linha['autor'] . '</td>';
                    echo '<td>' . $linha['genero'] . '</td>';
                    echo '<td class="' . $statusClass . '">' . $linha['status_disponibilidade'] . '</td>';
                    echo '<td>
                        <div class="d-flex justify-content-around">
                            <form method="post" action="?pagina=editaCadastro" class="d-inline">
                                <input type="hidden" name="id" value="' . $linha['id'] . '">
                                <button type="submit" class="btn btn-outline-primary btn-sm" title="Editar">
                                    <i class="bi bi-pencil-square"></i>
                                </button>
                            </form>
                            <form method="post" action="deletaCadastro.php" class="d-inline">
                                <input type="hidden" name="id" value="' . $linha['id'] . '">
                                <button type="submit" class="btn btn-outline-danger btn-sm" title="Excluir">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </form>
                        </div>
                    </td>';
                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
