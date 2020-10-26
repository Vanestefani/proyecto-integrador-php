<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="description" content="Fashi Template" />
    <meta name="keywords" content="Fashi, unica, creative, html" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <title><?php echo $title; ?></title>
    <!-- Css Styles -->
    <?php include('cssgeneral.php'); ?>

  </head>
  <body>
    <!-- Page Preloder -->
    <div id="preloder">
      <div class="loader"></div>
    </div>
    <?php include('header.php'); ?>
    <?php include($childView); ?>
    <?php include('footer.php'); ?>
    <?php include('jsgeneral.php'); ?>

</html>
