<!-- app/Resources/views/base.html.php -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<title><?php $view['slots']->output('title', 'Guest Book') ?></title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<link href="<?php echo $view['assets']->getUrl('css/style.css') ?>" rel="stylesheet" />
</head>

<body>
<div class="wrapper">

	<header class="header">
      <h1>Guest Book</h1>
    </header><!-- .header-->

	<main class="content">
		<?php $view['slots']->output('body') ?>
    </main><!-- .content -->

</div><!-- .wrapper -->

<footer class="footer">
  &COPY; 2016. Ivan Bazhenov
</footer><!-- .footer -->

</body>
</html>