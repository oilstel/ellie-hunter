</div>

<nav id="nav-footer">
<?php snippet('nav') ?>
</nav>

<?php if ($page->isHomePage()): ?>
<script>
    var text = [
        <?php $strings = $page->strings()->toStructure(); foreach($strings as $string): ?>
            <?php if($string != $strings->last()): ?>
                `<?php echo $string->text() ?>`,
            <?php else: ?>
                `<?php echo $string->text() ?>`
            <?php endif ?>
        <?php endforeach ?>
    ]
</script>
<?= js(['assets/js/home.js', '@auto']) ?>

<?php else: ?>
<?= js(['assets/js/footer.js', '@auto']) ?>
<?php endif ?>

</body>
</html>
