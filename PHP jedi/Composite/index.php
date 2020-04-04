<?php  

require 'class.php';

$form = new Form();
$form->addElement(new Label('Usuario:'));
$form->addElement(new InputText('Usuario'));

$form->addElement(new Label('Senha:'));
$form->addElement(new InputText('senha', 'password'));

$form->addElement(new SubmitButton('Enviar'));

echo $form->render();

?>