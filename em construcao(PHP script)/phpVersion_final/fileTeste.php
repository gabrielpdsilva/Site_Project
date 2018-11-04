<?php 

$nome = $_POST['nome'];     // pegando o Valor de 'nome' do html

$assunto = $_POST['assunto'];   // pegando o valor de 'assunto' do html
$assunto = wordwrap($assunto, 70);  // definindo que assunto terá até 70 caracteres dentro de si

$from = $_POST['email'];    // pegando o valor de 'email' do html
$from = "From: $from";


 $email = "davizinhozl.mendes@gmail.com";

if($nome == "" || $email == "" || $assunto == "" || $from == ""){
    echo "preencha todos os campos necessários por favor.";
}
else{
    $booleanVariable = mail($email, $nome, $assunto, $from);
    if($booleanVariable)
        echo "Enviado!";

    else echo "um erro ocorreu";
}
?>