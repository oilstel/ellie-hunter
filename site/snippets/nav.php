<?php if ($page->pause_site() == "true"): ?>
<?php else: ?>
<nav>
<?php foreach($site->children()->listed()->filterBy('template', 'in', ['home', 'default'])->limit(8) as $item): ?>
    <a <?php e($item->isActive(), ' class="active"') ?> href="<?php echo $item->url() ?>"></a>
<?php endforeach ?>

<?php foreach($site->children()->listed()->filterBy('template', 'in', ['archive']) as $item): ?>
    <a <?php e($item->isActive(), ' class="active"') ?> href="<?php echo $item->url() ?>"></a>
<?php endforeach ?>

</nav>
<?php endif ?>