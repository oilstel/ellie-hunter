<!doctype html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <link rel="shortcut icon" type="image/png" href="<?php echo url('assets/images/favicon.png') ?>">

<title><?php if ($page->isHomePage()): ?><?= $site->title() ?><?php else: ?><?= $page->title() ?> – <?= $site->title() ?><?php endif ?></title>

  <?php if ($page->isHomePage()): ?>
    <?= css(['assets/css/home.css', '@auto']) ?>
  <?php endif ?>

  <?= css(['assets/css/main.css', '@auto']) ?>

  <?= js(['assets/js/jquery.js', '@auto']) ?>

  <?php if ($page->isHomePage()): ?>
    <style>
        /* .drawing-container {
            background-image: url('<?php if($image = $page->cover()->toFile()): ?><?= $image->url() ?><?php endif ?>');
        } */
        body {
          overflow: hidden;
        }
    </style>
  <?php endif ?>

    <style>
        body {
          color: <?php echo $page->text_color() ?> !important;
          background: <?php echo $page->bg_color() ?> !important;
        }
        a {
          color: <?php echo $page->text_color() ?> !important;
        }
        /* main p a:hover {
          border-bottom: 1px solid <?php echo $page->text_color() ?> !important;
        } */
        main p a::before {
          border: 1px solid <?php echo $page->text_color() ?>;
        }
        main p a:hover::before {
          background-color: <?php echo $page->text_color() ?>;
        }
        main p a {
          margin-right: 10px;
          border: 1px solid <?php echo $page->text_color() ?>;
        }
        .drawing-text {
          fill: <?php echo $page->text_color() ?> !important;
        }
        nav a {
          background-color: <?php echo $page->bg_color() ?>;
          border-bottom: 1px solid <?php echo $page->text_color() ?>;
        }
        nav a:hover {
          border: 1px solid;
        }
        h1 {
        }
        .active, .active:hover {
          background: <?php echo $page->text_color() ?>;
        }
        #archive tr td {
          border-color: <?php echo $page->text_color() ?>;
        }
    </style>
</head>
<body>

  <div id="page">
    <header>
    <?php snippet('nav') ?>
    </header>
