<?php

require_once "Autor.php";
require_once "Editora.php";
require_once "Livro.php";
require_once "Emprestimo.php";
require_once "Usuario.php";

// Recebendo dados do formulário
$nomeUsuario = $_POST['usuario'];
$email = $_POST['email'];

$nomeAutor = $_POST['autor'];
$nacionalidade = $_POST['nacionalidade'];

$nomeEditora = $_POST['editora'];
$cidade = $_POST['cidade'];

$titulo = $_POST['titulo'];
$isbn = $_POST['isbn'];
$categoria = $_POST['categoria'];

$codigo = $_POST['codigo'];
$dataEmprestimo = $_POST['dataEmprestimo'];
$dataDevolucao = $_POST['dataDevolucao'];

// Criando objetos
$autor = new Autor($nomeAutor, $nacionalidade);

$editora = new Editora($nomeEditora, $cidade);

$livro = new Livro(
    $titulo,
    $isbn,
    $categoria,
    $autor,
    $editora
);

$emprestimo = new Emprestimo(
    $codigo,
    $dataEmprestimo,
    $dataDevolucao,
    $livro
);

$usuario = new Usuario(
    $nomeUsuario,
    $email,
    $emprestimo
);

// Exibição
echo "<h2>Dados do Empréstimo</h2>";

echo "Usuário: " . $usuario->getNome() . "<br>";
echo "Email: " . $usuario->getEmail() . "<br><br>";

$emprestimo->imprimir();

?>