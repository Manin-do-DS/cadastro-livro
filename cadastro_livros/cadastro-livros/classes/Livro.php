<?php
// classes/Livro.php

class Livro {
    public $titulo;
    public $autor;
    public $ano;
    public $isbn;

    public function __construct($titulo, $autor, $ano, $isbn) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->ano = $ano;
        $this->isbn = $isbn;
    }
}
