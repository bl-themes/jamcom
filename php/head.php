<!-- Dynamic title tag -->
<?php echo Theme::metaTags('title'); ?>
<!-- Dynamic description tag -->
<?php echo Theme::metaTags('description'); ?>
<!-- Include Favicon -->
<?php echo Theme::favicon('img/favicon.png'); ?>
<!-- Include Bootstrap CSS file bootstrap.css -->
<?php echo Theme::cssBootstrap(); ?>
<!-- Include CSS Styles from this theme -->
<?php echo Theme::css('css/bootstrap.min.css'); ?>
<!-- CSS -->
<style>
li.list-group-item{padding-left: 0px;}
a:hover .card h4{color:#126efd;}
a:hover h5{color:#126efd;}
p a{color:#126efd;text-decoration: none;}
p a:hover{color:#126efd;text-decoration: none;}
li.list-group-item a:hover{color:#126efd;}
.ft p a:hover {color:#126efd;}
p img{width:100%;border-radius: 6px;}
</style>
<!-- Font Awesome -->
<script src="https://kit.fontawesome.com/99398214e6.js" crossorigin="anonymous"></script>
<!-- Load Bludit Plugins: Site head -->
<?php Theme::plugins('siteHead'); ?>
