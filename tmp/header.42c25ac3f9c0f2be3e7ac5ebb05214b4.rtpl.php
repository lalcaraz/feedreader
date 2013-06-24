<?php if(!class_exists('raintpl')){exit;}?><!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="es" xml:lang="es" >
<head>
   <title><?php echo $fsc->title;?></title>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
   <meta name="description" content="<?php echo $fsc->get_description();?>" />
   <meta name="Robots" content="all" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link type="text/css" href="<?php echo $path;?>/view/mobile/css/bootstrap.min.css" rel="stylesheet" />
   <link type="text/css" href="<?php echo $path;?>/view/mobile/css/bootstrap-responsive.min.css" rel="stylesheet" />
   <link type="text/css" href="<?php echo $path;?>/view/mobile/css/base.css" rel="stylesheet" />
   <script src="<?php echo $path;?>/view/js/jquery.js"></script>
   <script src="<?php echo $path;?>/view/mobile/js/bootstrap.min.js"></script>
   <script src="<?php echo $path;?>/view/mobile/js/bootstrap-responsive.min.js"></script>
   <?php if( $analytics ){ ?>

   <script type="text/javascript">
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', '<?php echo $analytics;?>']);
      _gaq.push(['_trackPageview']);
      (function() {
         var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
         ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
         var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
   </script>
   <?php } ?>

   <script src="<?php echo $path;?>/view/js/basic.js"></script>
</head>
<body>
   <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
         <a class="brand" href="<?php echo $path;?>/"><?php echo $name;?></a>
         <div class="container">
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
            </button>
            <div class="nav-collapse collapse">
            <ul class="nav">
            <?php if( $fsc->page=='home' ){ ?>

               <li class="active"><a href="<?php echo $path;?>/">Portada</a></li>
            <?php }else{ ?>

               <li><a href="<?php echo $path;?>/">Portada</a></li>
            <?php } ?>

            <?php if( $fsc->page=='popular_stories' ){ ?>

               <li class="active"><a href="<?php echo $path;?>/index.php?page=popular_stories">Populares</a></li>
            <?php }else{ ?>

               <li><a href="<?php echo $path;?>/index.php?page=popular_stories">Populares</a></li>
            <?php } ?>

            <?php if( $fsc->page=='discover_stories' ){ ?>

               <li class="active"><a href="<?php echo $path;?>/index.php?page=discover_stories">Descubrir</a></li>
            <?php }else{ ?>

               <li><a href="<?php echo $path;?>/index.php?page=discover_stories">Descubrir</a></li>
            <?php } ?>

            <?php if( $fsc->page=='last_editions' ){ ?>

               <li class="active"><a href="<?php echo $path;?>/index.php?page=last_editions">Ediciones</a></li>
            <?php }else{ ?>

               <li><a href="<?php echo $path;?>/index.php?page=last_editions">Ediciones</a></li>
            <?php } ?>

            <?php if( $fsc->page=='feed_list' ){ ?>

               <li class="active"><a href="<?php echo $path;?>/index.php?page=feed_list">Fuentes</a></li>
            <?php }else{ ?>

               <li><a href="<?php echo $path;?>/index.php?page=feed_list">Fuentes</a></li>
            <?php } ?>

            <?php if( $fsc->page=='suscriptions' ){ ?>

               <li class="active"><a href="<?php echo $path;?>/index.php?page=suscriptions">Suscripciones</a></li>
            <?php }else{ ?>

               <li><a href="<?php echo $path;?>/index.php?page=suscriptions">Suscripciones</a></li>
            <?php } ?>

            <?php if( $fsc->page=='comments' ){ ?>

               <li class="active"><a href="<?php echo $path;?>/index.php?page=comments">¡Habla!</a></li>
            <?php }else{ ?>

               <li><a href="<?php echo $path;?>/index.php?page=comments">¡Habla!</a></li>
            <?php } ?>

            </ul>
            </div>
         </div>
      </div>
   </div>
   
   <?php if( $fsc->get_errors() ){ ?>

   <div class="alert alert-error">
      <ul><?php $loop_var1=$fsc->get_errors(); $counter1=-1; if($loop_var1) foreach( $loop_var1 as $key1 => $value1 ){ $counter1++; ?><li><?php echo $value1;?></li><?php } ?></ul>
   </div>
   <?php } ?>

   <?php if( $fsc->get_messages() ){ ?>

   <div class="alert alert-info">
      <ul><?php $loop_var1=$fsc->get_messages(); $counter1=-1; if($loop_var1) foreach( $loop_var1 as $key1 => $value1 ){ $counter1++; ?><li><?php echo $value1;?></li><?php } ?></ul>
   </div>
   <?php } ?>