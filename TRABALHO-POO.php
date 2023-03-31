<?php

class Livro {
    private $titulo;
    private $autor;
    private $editora;
    private $preco;
    private $desconto;
    private $estoque;

    public function __construct($titulo, $autor, $editora, $preco, $desconto, $estoque){
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->editora = $editora;
        $this->preco = $preco;
        $this->desconto = $desconto;
        $this->estoque = $estoque;
    }

    //setters
    public function setTitulo($titulo){
        $this->titulo = $titulo;
    }

    public function setAutor($autor){
        $this->autor = $autor;
    }

    public function setEditora($editora){
        $this->editora = $editora;
    }

    public function setPreco($preco){
        $this->preco = $preco;
    }

    public function setDesconto($desconto){
        $this->desconto = $desconto;
    }

    public function setEstoque($estoque){
        $this->estoque = $estoque;
    }

    //getters
    public function getTitulo(){
        return $this->titulo;
    }

    public function getAutor(){
        return $this->autor;
    }

    public function getEditora(){
        return $this->editora;
    }

    public function getPreco(){
        return $this->preco;
    }

    public function getDesconto(){
        return $this->desconto;
    }

    public function getEstoque(){
        return $this->estoque;
    }

    //metodo para calcular o desconto do preço
    public function calcularPrecoComDesconto(){
        $precoComDesconto = $this->preco * (1 - $this->desconto / 100);
        return number_format($precoComDesconto, 2, '.');
    }

    //metodo para exibir detalhes do livro
    public function exibirDetalhes() {
        $detalhes = "Título: " . $this->titulo . "<br>" .
                    "Autor: " . $this->autor . "<br>" .
                    "Editora: " . $this->editora . "<br>" .
                    "Preço: $" . $this->preco . "<br>" .
                    "Desconto: " . $this->desconto . "%<br>" .
                    "Preço com desconto: $" . $this->calcularPrecoComDesconto();
                    "Estoque: " . $this->estoque . "<br>";
        return $detalhes;
    }
}

//criando as instancias dos livros

$livro1 = new Livro("O senhor dos Anéis", "J.R.R. Tolkien", "Harper Collins", 29.99, 10, 50);
$livro1->setTitulo("O senhor dos Anéis");
$livro1->setAutor("J.R.R. Tolkien");
$livro1->setEditora("Harper Collins");
$livro1->setPreco(29.99);
$livro1->setDesconto(10);
$livro1->setEstoque(50);

//alterando o nome e desconto do livro
$livro1->setTitulo("Os Hobbits");
$livro1->setDesconto(20);
echo "Filme 1 <br>";
echo $livro1->exibirDetalhes();

echo "<br>";
echo "----------------------------------------------------------------------------------------- <br>";

$livro2 = new Livro("1984", "George Orwell", "Penguin Books", 15.99, 5, 30);
$livro2->setTitulo("1984");
$livro2->setAutor("George Orwell");
$livro2->setEditora("Penguin Books");
$livro2->setPreco(15.99);
$livro2->setDesconto(5);
$livro2->setEstoque(30);

//alterando o preco do livro
$livro2->setPreco(16.99);

echo "Filme 2 <br>";
echo $livro2->exibirDetalhes();

echo "<br>";
echo "----------------------------------------------------------------------------------------- <br>";

$livro3 = new Livro("Orgulho e Preconceito", "Jane Austen", "Vintage Classics", 12.99, 15, 20);
$livro3->setTitulo("Orgulho e Preconceito");
$livro3->setAutor = ("Jane Austen");
$livro3->setEditora("Vintage Classics");
$livro3->setPreco(12.99);
$livro3->setDesconto(15);
$livro3->setEstoque(20);

//aterando a editora  e desconto do livro
$livro3->setEditora("Penguin Books");
$livro3->setDesconto(10);

echo "Filme 3 <br>";
echo $livro3->exibirDetalhes();

?>
