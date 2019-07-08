<?php snippet('header') ?>

<main id="archive-full">

<table id="archive" cellpadding="0" role="grid">
    <thead>
      <tr role="row" class="tablesorter-headerRow">
        <th data-column="0"><div class="dot"></div></th>
        <th data-column="0">title</th>
        <th data-column="0">place</th>
        <th data-column="0">type</th>
        <th data-column="0">year</th>
      </tr>
    </thead>
    <tbody aria-live="polite" aria-relevant="all">
        <?php foreach($site->children()->listed() as $item): ?>
        <?php if ($item->isHomePage() || $item->id() == 'archive'): ?>
        <?php else: ?>
          <?php if ($item->show_in_archive() == 'true'): ?>
          <tr class="item-title" data-id="<?php echo html($item->num()) ?>" role="row">
              <td><a href="<?php echo $item->url() ?>" class="dot" style="background-color: <?php echo $item->bg_color() ?>; border-color:<?php echo $item->text_color() ?>;"></a></td>
              <td><a href="<?php echo $item->url() ?>"><?php echo $item->title() ?></a></td>
              <td><?php echo $item->place() ?></td>
              <td class="type"><?php echo $item->type() ?></td>
              <td><?php echo $item->year() ?></td>
          </tr>
          <?php endif ?>
        <?php endif ?>
        <?php endforeach ?>
    </tbody>
  </table>

  </main>