<?php
echo $this->Html->css(array('bootstrap.min','/app/webroot/css/cake.generic'));
    echo $this->Html->link('Ajouter un étudiant', array('controller' => 'students','action' => 'add'), array('class' => 'btn btn-success'));

?>

<table>
    <tr>
        <th>Id</th>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Date de Naissance</th>
        <th>Actions</th>
    </tr>

    <!-- Here is where we loop through our $posts array, printing out post info -->

    <?php foreach ($students as $student): ?>
    <tr>
        <td><?php echo $student['Student']['id']; ?></td>
        <td><?php echo $student['Student']['lastname']; ?></td>
        <td><?php echo $student['Student']['firstname']; ?></td>
        <td><?php echo date("d/m/Y", strtotime($student['Student']['dateOfBirth'])); ?></td>
        <td>
            <?php echo $this->Html->link("Voir",
            array('controller' => 'students', 'action' => 'view', $student['Student']['id']),
            array('class' => 'btn btn-secondary')); ?>
            <?php echo $this->Html->link("Editer",
            array('controller' => 'students', 'action' => 'edit', $student['Student']['id']),
            array('class' => 'btn btn-primary')); ?>
            <?php echo $this->Form->postLink("Supprimer",
            array('controller' => 'students', 'action' => 'delete', $student['Student']['id']),
            array('class' => 'btn btn-danger',
            'confirm' => 'Etes-vous sûr de supprimer ?')
                    ); ?>


                        </td>

    </tr>
    <?php endforeach; ?>
    <?php unset($student); ?>
</table>