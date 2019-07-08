<?php if ($page->pause_site() == "true"): ?>
<?php else: ?>
<nav>
<?php foreach($site->children()->listed()->filterBy('template', 'in', ['home', 'default'])->limit(8) as $item): ?>
    <a <?php e($item->isActive(), ' class="active"') ?> href="<?php echo $item->url() ?>" style="background-color: <?php echo $item->bg_color() ?>; border-color:<?php echo $item->text_color() ?>;"></a>
<?php endforeach ?>
<? $archive = site()->children()->find('archive') ?>
<a <?php if ($page->id() == 'archive'): ?>class="active"<?php endif ?> href="<?php echo $archive->url() ?>" style="background-color: <?php echo $archive->bg_color() ?>; border-color:<?php echo $archive->text_color() ?>;"></a>
</nav>
<?php endif ?>