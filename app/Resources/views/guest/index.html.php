<?php $view->extend('base.html.php') ?>

<?php $view['slots']->start('body') ?>

<div class="error">
    <?php if (isset($errors)): ?>
        <?php foreach ($errors as $error): ?>
            <?php echo $error->getMessage() ?>
        <?php endforeach ?>
    <?php endif; ?>
</div>

<div class="form">
  <?php echo $view['form']->start($form) ?>
      <?php echo $view['form']->errors($form) ?>
      <?php echo $view['form']->row($form['name']) ?>
      <?php echo $view['form']->row($form['email']) ?>
      <?php echo $view['form']->row($form['text']) ?>
  <?php echo $view['form']->widget($form['save'], array('label' => 'Send entry')) ?>
  <?php echo $view['form']->end($form) ?>
</div>

<hr/>

<?php foreach ($allEntry as $entry): ?>

<div class="entryName">
  <a href="mailto:<?php echo $entry->getEmail() ?>"><?php echo $entry->getName(); ?></a>
</div>

<div style="clear: both;">

<div class="entryContent">
    <?php echo $entry->getText() ?>
</div>

<?php if ($view['security']->isGranted('ROLE_ADMIN') or ($entry->getSid() == @$cookie) or ($entry->getSid() == @$session)): ?>
  <p align="right"><a href="/delete/<?php echo $entry->getId() ?>">Delete entry</a></p>
<?php endif ?>

<hr/>

<?php endforeach ?>

<div class="pagination">
  <?php if (@$page == 1 and @$page1right == ""): echo "";
  else: ?>
      <?php echo @$pervpage . @$page1left . '<b><span class="active curved">' . @$page . '</span></b>' . @$page1right . @$nextpage; ?>
  <?php endif; ?>
</div>

<?php $view['slots']->stop() ?>