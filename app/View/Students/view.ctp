<?php
    echo $this->Html->css(array('bootstrap.min','/app/webroot/css/cake.generic'));
    $currentStudent = $student['Student'];
    $marks = $student['Mark'];
?>

<h2><?php echo h($currentStudent['lastname']) . " " . h($currentStudent['firstname']); ?></h2>

<div class="viewView">
    <dl>
       <dt><span><?php echo __("ID"); ?> : </span></dt>
       <dd><?php echo h($currentStudent['id']); ?></dd>
       <dt><span><?php echo __("Nom"); ?> : </span></dt>
       <dd><?php echo h($currentStudent['lastname']); ?></dd>
       <dt><span><?php echo __("Prénom"); ?> : </span></dt>
       <dd><?php echo h($currentStudent['firstname']); ?></dd>
       <dt><span><?php echo __("Date de naissance"); ?> : </span></dt>
       <dd><?php echo h(date("d/m/Y", strtotime($currentStudent['dateOfBirth']))); ?></dd>
       <dt><span><?php echo __("Créé le"); ?> : </span></dt>
       <dd><?php echo h(date("d/m/Y", strtotime($currentStudent['created']))); ?></dd>
    </dl>
</div>
<br>
<?php if(!empty($marks)){ ?>
    <h3><?php echo "Note(s) de " . h($currentStudent['lastname']) . " " . h($currentStudent['firstname']); ?></h3>
    <?php
    echo $this->Html->link('Ajouter une nouvelle note',
        array('controller'  => 'marks',
              'action'      => 'add',
              $currentStudent['id']),
              array('class' => 'btn btn-success'));
    ?>

    <table>
        <tr>
            <th>Id</th>
            <th>Matière</th>
            <th>Note (/20)</th>
            <th>Ajoutée le</th>
        </tr>

<?php foreach ($marks as $mark) :?>
    <tr>
        <td><?php echo $mark['id']; ?></td>
        <td><?php echo $mark['subject']; ?></td>
        <td><?php echo $mark['mark']; ?></td>
        <td><?php
        echo date("d/m/Y", strtotime($mark['created'])); ?></td>
    </tr>

<?php
    endforeach;
    unset($student);
?>

</table>

<?php
    } else { ?>
        <div class="alert alert-success" role="alert">
            Cet(te) étudiant(e) n'a aucune note. <?php echo $this->Html->link('Ajouter en une !',
            array('controller' => 'marks',
                  'action'     => 'add',
                  $currentStudent['id']));?>
        </div>
<?php
    }
    echo $this->Html->link('Retour', array(
        'controller' => 'students',
        'action' => 'index'),
        array('class' => 'btn btn-light'));
 ?>