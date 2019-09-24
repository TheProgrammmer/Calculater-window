<?php
<<<<<<< HEAD
$message = $_POST['from_ajax'];
mail('Ваш емайл','Хорактеристики окна', $message);
=======
$to      = 'ira email@';
$subject = 'Хорактеристики окна';
$message = 'ajax zapros@';


mail($to, $subject, $message);
>>>>>>> 57162a8a453d42bd65ff452f51268648daf2cc6f
?>