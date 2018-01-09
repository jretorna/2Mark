<h2>Ajouter un(e) nouvel(le) étudiant(e)</h2>

<?php echo $this->Html->css(array('bootstrap.min','/app/webroot/css/cake.generic')); ?>

<?php
echo $this->Form->create('Student');
echo $this->Form->input('lastname', array('label' => 'Nom : '));
echo $this->Form->input('firstname', array('label' => 'Prénom : '));
echo $this->Form->input('dateOfBirth', array('label' => 'Date de naissance : ', 'type' => 'date', 'minYear' => '1970', 'maxYear' => date('Y'), 'dateFormat' => 'DMY'));
echo $this->Form->input('created', array('type' => 'hidden'));
echo $this->Form->end('Sauvegarder');
echo $this->Html->link('Retour', array('controller' => 'students','action' => 'index'), array('class' => 'btn btn-light'));
?>