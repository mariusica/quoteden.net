<?php
if (isset($title)) {
    $title = $title . SITE_SEPARATOR . SITE_NAME;
} else {
    $title = SITE_NAME;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title><?php print $title; ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="<?php print Url::site('rss.xml') ?>" title="<?php print SITE_NAME; ?> feed" type="application/rss+xml" rel="alternate" />
<link type="image/x-icon" href="<?php print Url::site('img/favicon.ico') ?>" rel="shortcut icon">
<link type="text/css" href="<?php print Url::site('min/?g=css'); ?>" rel="stylesheet" media="screen" />
</head>
<body class="<?php print $model . '-' . $action ?>">
<div id="header" role="banner">
<div id="header-inner">

<h1 id="logo"><a rel="home" title="<?php print SITE_NAME; ?> - Home Page" href="/"><?php print SITE_NAME; ?></a></h1>

<div class="quote">
    <div class="text"><p>One man can make a difference and every man should try.</p></div>
    <div class="author"><a href="/author/id/1">Jacqueline Kennedy Onassis</a></div>
</div><!-- /.quote -->

<a title="Add quotes" href="<?php
if (!$user) {
    print Url::site('user/login', 'https');
} else {
    print Url::site('quote/add');
}
?>" class="plus <?php
if (!$user) {
    print 'log-in" title="Log in">Log in';
} else {
    print 'add-quotes" title="Add quotes">Add quotes';
}
?></a>

<div id="login">
    <form id="user-login-form" method="post" accept-charset="UTF-8" action="<?php print Url::site('user/login'); ?>">
        <input type="text" value="" size="15" name="username" maxlength="60" title="Username" />
        <input type="password" size="15" maxlength="60" name="password" title="Password" />
        <input type="submit" value="Log in" name="login" />
    </form>
</div>

<ul id="navigation" role="navigation">
    <li<?php if ($model == 'quote' && $action == 'index'): ?> class="active"<?php endif; ?>>
        <a href="<?php print Url::site('') ?>" title="home page">Home</a>
    </li>
    <li<?php if ($model == 'quote' && $action == 'top'): ?> class="active"<?php endif; ?>>
        <a href="<?php print Url::site('quote/top') ?>" title="Top rated quotes">Top Rated</a>
    </li>
    <li<?php if ($model == 'category'): ?> class="active"<?php endif; ?>>
        <a href="<?php print Url::site('category') ?>" title="Categories">Categories</a>
    </li>
    <li id="search"<?php if ($model == 'search'): ?> class="active"<?php endif; ?>>
        <form method="get" accept-charset="UTF-8" action="<?php print Url::site('search') ?>">
            <label>Search: <input type="text" title="Search this site" value="<?php if (isset($_GET['q'])) print $_GET['q']; ?>" size="15" name="q" maxlength="255" /></label>
            <input type="submit" value="Search" id="edit-submit" />
        </form>
    </li>
</ul>


</div></div><!-- /#header-inner, /#header -->
<div id="content" role="main">
<div id="content-inner">
<?php print $content ?>
</div><!-- /#content-inner -->
</div><!-- /#content -->

<div id="footer" role="contentinfo">
<div id="footer-inner">
Copyright &copy; 2009 - <?php print date('Y'); ?> <a href="/"><?php print SITE_NAME; ?></a>
</div><!-- /#footer-inner -->
</div><!-- /#footer -->

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript" src="<?php print Url::site('min/?g=js'); ?>"></script>
</body>
</html>
