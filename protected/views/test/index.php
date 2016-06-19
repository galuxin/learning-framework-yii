hello world! <?php echo $a." ". $b." ". $c; ?>

<div>
  <!-- <a href="http://google.com" target="_blank">Google</a><br/> -->
  <?php echo CHtml::link('Home', array('site/index', 'id'=>5), array('target' => '_blank')); ?>
</div>

<div>

  <ol>
  <?php foreach ($users as $user) { ?>
    <li><?= $user->name ?></li>
  <?php } ?>
  </ol>

  <ul>
  <?php foreach ($errors as $error) { ?>
    <li><?= $error[0]; ?></li>
  <?php } ?>
  </ul>

</div>
