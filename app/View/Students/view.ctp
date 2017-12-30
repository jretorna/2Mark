<h1><?php
echo h($student['Student']['lastname']) . " " . h($student['Student']['firstname']); ?></h1>

<p><small>Crée le : <?php echo $student['Student']['created']; ?></small></p>
//TODO Faire la vue qui va bien