<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title> <?php  echo isset($title) ? $title : ''; ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    <?php $this->load->view('backend/_includes/head.php'); ?>

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

  </head>

  <body>
  <!--[if lt IE 7]>
  <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
  <![endif]-->

    <div class="container"> 
      
      <header>
        <div>
          <p>header here </p>
        </div>
        <?php $this->load->view('backend/_includes/nav.php'); ?>  
      </header> 

      <?php $this->load->view('backend/pages/' . $main_content); ?>

    </div>

    <?php $this->load->view('backend/_includes/footer.php'); ?>

  </body>
</html>
