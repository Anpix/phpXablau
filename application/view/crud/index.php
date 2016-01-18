<a href="crud/add/mais_uma_coisa_pra_variar">Adicionar</a>
<hr/>
Uma coisa: <br/>
<?php var_dump($thing); ?>
<br/>
ID de uma coisa: <?php echo $thing->id; ?>
<hr/>
Várias coisas:<br/>
<?php foreach($things as $thing) : ?>
    ID: <?php echo $thing->id; ?> / What: <?php echo $thing->what; ?> / <a href="crud/edit/<?php echo $thing->id; ?>">editar</a> / <a href="crud/remove/<?php echo $thing->id; ?>">excluir</a><br/>
<?php endforeach; ?>