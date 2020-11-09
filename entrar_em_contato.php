<?php

$data	    = date("d/m/Y - H:i:s");
$nome       = $_POST['tagname_contato_nome'];
$email      = $_POST['tagname_contato_email'];
$telefone   = $_POST['tagname_contato_telefone'];
$mensagem   = $_POST['tagname_contato_mensagem'];

//      PRIMEIRA VIA DO E-MAIL

$destino        = "jonasfilhorpm@gmail.com";
$assunto        = "TENTATIVA DE ACESSO";
$header         = "
<b>TENTATIVA DE ACESSO
<br><br>
==============================================<br>
        $data <br>
==============================================<br>
";


// Função HTML :)
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html;charset=iso-8859-1\r\n";
$headers .= "From: $nome <$email>\r\n";

//      E-MAIL SEGUNDA VIA
// =================================================== //

$resp_assunto   = "Obrigado pelo contato <b>$nome</b>";
$header2        = "
Olá <b>$nome</b>,
<br><br>
Obrigado pelo seu contato.<br>
Estaremos respondendo o mais rápido possivel!
<br><br><br>

==============================================<br>
";

// Função HTML
$headers2 .= "MIME-Version: 1.0\r\n";
$headers2 .= "Content-type: text/html; charset=iso-8859-1\r\n";
$headers2 .= "From: Jonas Filho <jonasfilhorpm@gmail.com>\r\n";
