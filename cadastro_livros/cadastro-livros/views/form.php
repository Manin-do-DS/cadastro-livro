<!-- views/form.php -->
<h2><?= $livroEditar ? 'Editar Livro' : 'Cadastrar Livro' ?></h2>
<form method="post">
    <input type="hidden" name="isbn_original" value="<?= $livroEditar['isbn'] ?? '' ?>">
    <input type="text" name="titulo" placeholder="Título" value="<?= $livroEditar['titulo'] ?? '' ?>" required><br>
    <input type="text" name="autor" placeholder="Autor" value="<?= $livroEditar['autor'] ?? '' ?>" required><br>
    <input type="number" name="ano" placeholder="Ano" value="<?= $livroEditar['ano'] ?? '' ?>" required><br>
    <input type="text" name="isbn" placeholder="ISBN" value="<?= $livroEditar['isbn'] ?? '' ?>" required><br>
    <button type="submit">Salvar</button>
</form>
