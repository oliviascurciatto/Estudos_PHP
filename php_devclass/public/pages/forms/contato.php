<?php

require "../../../bootstrap.php";



if (isEmpty()) {
    flash('message', 'Preencha todos os campos');
};

$validate = validate([
    'nome' => 's',
    'email' => 'e',
    'message' => 'm',
    'subject' => 'a'
]);

//dd($validate->nome);
