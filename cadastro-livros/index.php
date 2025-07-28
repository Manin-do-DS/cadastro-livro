<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <title>Cadastro de Livros</title>
    <link rel="stylesheet" href="views/livro.css" />
</head>
<body>
<?php
require_once './classes/Livro.php';
require_once './classes/LivroRepository.php';

$repo = new LivroRepository('./data/livros.json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $ano = $_POST['ano'];
    $isbn = $_POST['isbn'];
    $isbnOriginal = $_POST['isbn_original'] ?? null;

    $livro = new Livro($titulo, $autor, $ano, $isbn);

    if ($isbnOriginal) {
        $repo->editar($isbnOriginal, $livro);
    } else {
        $repo->adicionar($livro);
    }



    header("Location: index.php");
    exit;
}

if (isset($_GET['excluir'])) {
    $repo->excluir($_GET['excluir']);
    header("Location: index.php");
    exit;
}

$livroEditar = null;
if (isset($_GET['editar'])) {
    $livroEditar = $repo->buscarPorIsbn($_GET['editar']);
}

$livros = $repo->listar();

include './views/form.php';
include './views/list.php';
?>
</body>
</html>