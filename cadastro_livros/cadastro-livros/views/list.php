<!-- views/list.php -->
<h2>Livros Cadastrados</h2>
<table border="1">
    <tr>
        <th>Título</th><th>Autor</th><th>Ano</th><th>ISBN</th><th>Ações</th>
    </tr>
    <?php foreach ($livros as $livro): ?>
        <tr>
            <td><?= $livro['titulo'] ?></td>
            <td><?= $livro['autor'] ?></td>
            <td><?= $livro['ano'] ?></td>
            <td><?= $livro['isbn'] ?></td>
            <td>
                <a href="?editar=<?= $livro['isbn'] ?>">Editar</a> |
                <a href="?excluir=<?= $livro['isbn'] ?>" onclick="return confirm('Tem certeza?')">Excluir</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
