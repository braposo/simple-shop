<?php

  if($_POST){

    $name=$_POST['form_nome'];
    $email=$_POST['form_email'];
    $notes=$_POST['form_notes'];


    // --- Definir email para envio
    $recipient = "email@gmail.com";
    // ---

    $items = "";
    foreach ($_POST['items'] as $item) { 
        $items .= "\t- ".$item . "\n";
    }

    $message = "Nome: ".$name."\n".
               "Email: ".$email."\n".
               "Notas: ".$notes."\n\n".
               "Artigos\n".$items;


    $response = mail($recipient, "Interesse em artigos da casa", $message, "From: " . $name . " <" . $email . ">");

    return $response;

  }

?>