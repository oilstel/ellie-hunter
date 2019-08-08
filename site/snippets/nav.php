<?php if ($page->pause_site() == "true"): ?>
<?php else: ?>
<nav>
<?php foreach($site->children()->listed()->filterBy('template', 'in', ['home', 'default'])->limit(8) as $item): ?>
    <a <?php e($item->isActive(), ' class="active"') ?> href="<?php echo $item->url() ?>"></a>
<?php endforeach ?>
<? $archive = site()->children()->find('info') ?>
<a <?php if ($page->id() == 'info'): ?>class="active"<?php endif ?> href="<?php echo $archive->url() ?>"></a>
</nav>
<?php endif ?>