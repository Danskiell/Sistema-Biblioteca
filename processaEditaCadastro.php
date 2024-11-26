<?php
include 'db.php';

// Valida os dados do formulário
if (isset($_POST['id'], $_POST['titulo'], $_POST['autor'], $_POST['genero'], $_POST['status_disponibilidade'])) {
    $id = intval($_POST['id']);
    $titulo = trim($_POST['titulo']);
    $autor = trim($_POST['autor']);
    $genero = trim($_POST['genero']);
    $status_disponibilidade = trim($_POST['status_disponibilidade']);

    // Atualiza os dados do livro
    $query = "UPDATE livros SET titulo = ?, autor = ?, genero = ?, status_disponibilidade = ? WHERE id = ?";
    $stmt = mysqli_prepare($conexao, $query);
    mysqli_stmt_bind_param($stmt, "ssssi", $titulo, $autor, $genero, $status_disponibilidade, $id);

    if (mysqli_stmt_execute($stmt)) {
        // Redireciona após sucesso
        header('Location: index.php?pagina=cadastros');
    } else {
        echo "Erro ao atualizar o livro: " . mysqli_error($conexao);
    }
} else {
    echo "Dados incompletos no formulário.";
}
?>
