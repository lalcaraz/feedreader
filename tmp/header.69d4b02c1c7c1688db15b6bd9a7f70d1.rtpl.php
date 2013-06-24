<?php if(!class_exists('raintpl')){exit;}?><!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="es" xml:lang="es" >
<head>
   <title><?php echo $fsc->title;?></title>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
   <meta name="description" content="<?php echo $fsc->get_description();?>" />
   <meta name="Robots" content="all" />
   <link type="text/css" href="<?php echo $path;?>/view/desktop/desktop.css" rel="stylesheet" />
   <script src="<?php echo $path;?>/view/js/jquery.js"></script>
   <?php if( $analytics ){ ?>

   <script type="text/javascript">
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', '<?php echo $analytics;?>']);
      _gaq.push(['_trackPageview']);
      (function() {
         var ga = document.createElement('script');
         ga.type = 'text/javascript';
         ga.async = true;
         ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
         var s = document.getElementsByTagName('script')[0];
         s.parentNode.insertBefore(ga, s);
      })();
   </script>
   <?php } ?>

   <script src="<?php echo $path;?>/view/js/basic.js"></script>
</head>
<body>
   <div id="shadow_box"></div>
   <div id="popups"></div>
   <a id="b_close_popup" class="close_popup" href="#" onclick="fs_close_popups(); return false;">
      <img src="<?php echo $path;?>/view/img/close.png" alt="close"/>
   </a>
   
   <table class="header">
      <tr>
         <td align="right"><a class="logo" href="<?php echo $path;?>/"><?php echo $name;?></a></td>
         <td class="buttons">
         <?php if( $fsc->page=='home' ){ ?>

            <a class="selected" href="<?php echo $path;?>/">Portada</a>
         <?php }else{ ?>

            <a href="<?php echo $path;?>/">Portada</a>
         <?php } ?>

         <?php if( $fsc->page=='popular_stories' ){ ?>

            <a class="selected" href="<?php echo $path;?>/index.php?page=popular_stories">Populares</a>
         <?php }else{ ?>

            <a href="<?php echo $path;?>/index.php?page=popular_stories">Populares</a>
         <?php } ?>

         <?php if( $fsc->page=='discover_stories' ){ ?>

            <a class="selected" href="<?php echo $path;?>/index.php?page=discover_stories">Descubrir</a>
         <?php }else{ ?>

            <a href="<?php echo $path;?>/index.php?page=discover_stories">Descubrir</a>
         <?php } ?>

         <?php if( $fsc->page=='last_editions' ){ ?>

            <a class="selected" href="<?php echo $path;?>/index.php?page=last_editions">Ediciones</a>
         <?php }else{ ?>

            <a href="<?php echo $path;?>/index.php?page=last_editions">Ediciones</a>
         <?php } ?>

         <?php if( $fsc->page=='feed_list' ){ ?>

            <a class="selected" href="<?php echo $path;?>/index.php?page=feed_list">Fuentes</a>
         <?php }else{ ?>

            <a href="<?php echo $path;?>/index.php?page=feed_list">Fuentes</a>
         <?php } ?>

         <?php if( $fsc->page=='suscriptions' ){ ?>

            <a class="selected" href="<?php echo $path;?>/index.php?page=suscriptions">Suscripciones</a>
         <?php }else{ ?>

            <a href="<?php echo $path;?>/index.php?page=suscriptions">Suscripciones</a>
         <?php } ?>

         </td>
         <td align="right">
            <a id="b_talk" href="#" onclick="fs_popup_iframe('<?php echo $path;?>/index.php?page=comments'); return false;">Comentarios</a>
         </td>
      </tr>
   </table>
   
   <?php if( $fsc->get_errors() ){ ?>

   <div class="errors">
      <ul><?php $loop_var1=$fsc->get_errors(); $counter1=-1; if($loop_var1) foreach( $loop_var1 as $key1 => $value1 ){ $counter1++; ?><li><?php echo $value1;?></li><?php } ?></ul>
   </div>
   <?php } ?>

   
   <?php if( $fsc->get_messages() ){ ?>

   <div class="messages">
      <ul><?php $loop_var1=$fsc->get_messages(); $counter1=-1; if($loop_var1) foreach( $loop_var1 as $key1 => $value1 ){ $counter1++; ?><li><?php echo $value1;?></li><?php } ?></ul>
   </div>
   <?php } ?>