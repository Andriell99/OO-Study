<?php
require_once 'Pessoa.php';
require_once 'Publicacao.php';
class Livro implements Publicacao{
    private $titulo;
    private $autor;
    private $totalPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;
    
#const getters setters    
    public function __construct($titulo, $autor, $totalPaginas, $leitor) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->totalPaginas = $totalPaginas;
        $this->leitor = $leitor;
        $this->aberto=false;
        $this->pagAtual=0;
    }

    
    public function getTitulo() {
        return $this->titulo;
    }

    public function getAutor() {
        return $this->autor;
    }

    public function getTotalPaginas() {
        return $this->totalPaginas;
    }

    public function getPagAtual() {
        return $this->pagAtual;
    }

    public function getAberto() {
        return $this->aberto;
    }

    public function getLeitor() {
        return $this->leitor;
    }

    public function setTitulo($titulo): void {
        $this->titulo = $titulo;
    }

    public function setAutor($autor): void {
        $this->autor = $autor;
    }

    public function setTotalPaginas($totalPaginas): void {
        $this->totalPaginas = $totalPaginas;
    }

    public function setPagAtual($pagAtual): void {
        $this->pagAtual = $pagAtual;
    }

    public function setAberto($aberto): void {
        $this->aberto = $aberto;
    }

    public function setLeitor($leitor): void {
        $this->leitor = $leitor;
    }
#metodos functions

    public function detalhes(){
        echo"O livro {$this->getTitulo()}, escrito por {$this->getAutor()}";
        echo"<br>Ele tem {$this->getTotalPaginas()} paginas</br>";
        echo"<br>Atualmente esta na pagina {$this->getPagAtual()}</br>";
        echo"<br>Atualmente quem esta lendo é  {$this->getLeitor()->getNome()}</br>";
    }
    
    #[\Override]
    public function abrir() {
        $this->setAberto(true);
    }

    #[\Override]
    public function avancarPag() {
        $this->setPagAtual($this->getPagAtual() + 1);
    }

    #[\Override]
    public function fechar() {
      $this->setAberto(false);  
    }

    #[\Override]
    public function folhear($p) {
        if($p>$this->getTotalPaginas()){
            $this->setPagAtual(0);
        }else{
          $this->setPagAtual($p);  
        }
    }

    #[\Override]
    public function voltarPag() {
        $this->setPagAtual($this->getPagAtual() - 1);
    }
  
    
}
