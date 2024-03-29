<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo $title ?></title>
    <link rel="stylesheet" href="https://kit.fontawesome.com/360805e100.css" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/360805e100.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="/assets/css/index.css" />
    <?=$this->section('css') ?>
  </head>

  <body>
    <header>
      <?=$this->partial('site.header') ?>
    </header>

    <section class="content">
      <?=$this->section('content') ?>
    </section>

    <script src="/assets/js/jquery.js"></script>
    <script src="/assets/js/index.js"></script>
    <?=$this->section('scripts') ?>
  </body>
</html>