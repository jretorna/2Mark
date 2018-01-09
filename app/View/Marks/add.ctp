<h2>Ajouter une nouvelle note</h2>

<?php echo $this->Html->css(array('bootstrap.min','/app/webroot/css/cake.generic')); ?>

<?php
echo $this->Form->create('Mark');
echo $this->Form->input('subject', array('label' => 'Matière : '));
echo $this->Form->input('mark', array('label' => 'Note : '));
echo $this->Form->input('studentId', array('type' => 'hidden'));
echo $this->Form->input('created', array('type' => 'hidden'));
echo $this->Form->end('Ajouter');?>