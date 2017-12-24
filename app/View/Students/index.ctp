<h1>Blog posts</h1>
<table>
    <tr>
        <th>Id</th>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Date de Naissance</th>
        <th>Créé le</th>
        <th>Actions</th>
    </tr>

    <!-- Here is where we loop through our $posts array, printing out post info -->

    <?php foreach ($students as $student): ?>
    <tr>
        <td><?php echo $student['Student']['id']; ?></td>
        <td><?php echo $student['Student']['lastname']; ?></td>
        <td><?php echo $student['Student']['firstname']; ?></td>
        <td><?php echo $student['Student']['dateOfBirth']; ?></td>
        <td><?php echo $student['Student']['created']; ?></td>
        <td>
            <?php echo $this->Html->link("Voir",
                array('controller' => 'students', 'action' => 'view', $student['Student']['id'])); ?>
                <?php echo $this->Html->link("Editer",
                    array('controller' => 'students', 'action' => 'edit', $student['Student']['id'])); ?>
                    <?php echo $this->Html->link("Supprimer",
                        array('controller' => 'students', 'action' => 'delete', $student['Student']['id'])); ?>


                        </td>

    </tr>
    <?php endforeach; ?>
    <?php unset($student); ?>
</table>