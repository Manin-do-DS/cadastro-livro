<?php
// classes/LivroRepository.php
require_once 'Livro.php';

class LivroRepository {
    private $arquivo;

    public function __construct($arquivo) {
        $this->arquivo = $arquivo;
        if (!file_exists($arquivo)) {
            file_put_contents($arquivo, json_encode([]));
        }
    }

    public function listar() {
        $conteudo = file_get_contents($this->arquivo);
        return json_decode($conteudo, true);
    }

    public function adicionar(Livro $livro) {
        $livros = $this->listar();
        $livros[] = [
            'titulo' => $livro->titulo,
            'autor' => $livro->autor,
            'ano' => $livro->ano,
            'isbn' => $livro->isbn
        ];
        file_put_contents($this->arquivo, json_encode($livros, JSON_PRETTY_PRINT));
    }

    public function excluir($isbn) {
        $livros = $this->listar();
        $livros = array_filter($livros, fn($livro) => $livro['isbn'] !== $isbn);
        file_put_contents($this->arquivo, json_encode(array_values($livros), JSON_PRETTY_PRINT));
    }

    public function editar($isbnAntigo, Livro $livroNovo) {
        $livros = $this->listar();
        foreach ($livros as &$livro) {
            if ($livro['isbn'] === $isbnAntigo) {
                $livro = [
                    'titulo' => $livroNovo->titulo,
                    'autor' => $livroNovo->autor,
                    'ano' => $livroNovo->ano,
                    'isbn' => $livroNovo->isbn
                ];
                break;
            }
        }
        file_put_contents($this->arquivo, json_encode($livros, JSON_PRETTY_PRINT));
    }

    public function buscarPorIsbn($isbn) {
        $livros = $this->listar();
        foreach ($livros as $livro) {
            if ($livro['isbn'] === $isbn) {
                return $livro;
            }
        }
        return null;
    }
}
