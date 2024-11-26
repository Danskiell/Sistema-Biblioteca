<br>
<div class="caixa">
    <h4 class="fw-bold mb-4">Editar Cadastro de Livro</h4>
    <a type="button" class="btn btn-dark mb-3" href="?pagina=cadastros"><i class="bi bi-backspace"></i> Voltar</a>
    <form method="post" action="processaEditaCadastro.php" autocomplete="off">
        <input value="<?php echo $linha['id']; ?>" type="hidden" id="id" name="id">

        <div class="mb-3">
            <label for="titulo" class="form-label">Título</label>
            <input value="<?php echo $linha['titulo']; ?>" type="text" class="form-control bg-dark text-light border-0" id="titulo" name="titulo" required>
        </div>
        
        <div class="mb-3">
            <label for="autor" class="form-label">Autor</label>
            <input value="<?php echo $linha['autor']; ?>" type="text" class="form-control bg-dark text-light border-0" id="autor" name="autor" required>
        </div>
        
        <div class="mb-3">
            <label for="genero" class="form-label">Gênero</label>
            <input value="<?php echo $linha['genero']; ?>" type="text" class="form-control bg-dark text-light border-0" id="genero" name="genero" required>
        </div>
        
        <div class="mb-3">
            <label for="status_disponibilidade" class="form-label">Status de Disponibilidade</label>
            <select class="form-control bg-dark text-light border-0" id="status_disponibilidade" name="status_disponibilidade" required>
                <option value="disponível" <?php echo ($linha['status_disponibilidade'] == 'disponível') ? 'selected' : ''; ?>>Disponível</option>
                <option value="indisponível" <?php echo ($linha['status_disponibilidade'] == 'indisponível') ? 'selected' : ''; ?>>Indisponível</option>
            </select>
        </div>
        
        <button type="submit" class="btn btn-dark w-100">Salvar</button>
    </form>
</div>
