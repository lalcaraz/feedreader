<?php if(!class_exists('raintpl')){exit;}?><?php $tpl = new RainTPL;$tpl_dir_temp = self::$tpl_dir;$tpl->assign( $this->var );$tpl->draw( dirname("desktop/header") . ( substr("desktop/header",-1,1) != "/" ? "/" : "" ) . basename("desktop/header") );?>


<?php if( $fsc->stories ){ ?>

   <script src="<?php echo $path;?>/view/js/jquery.masonry.min.js"></script>
   <script type="text/javascript">
      $(document).ready(function() {
         $("#stories").masonry({
            itemSelector: '.story',
            isFitWidth: true,
            isAnimated: true
         });
      });
   </script>
   
   <div id="stories">
      <?php $loop_var1=$fsc->stories; $counter1=-1; if($loop_var1) foreach( $loop_var1 as $key1 => $value1 ){ $counter1++; ?>

         <div class="story<?php if( $value1->readed() ){ ?> story_readed<?php } ?>" onclick="fs_popup_story('<?php echo $path;?>/<?php echo $value1->url();?>')">
            <?php if( $value1->media_item ){ ?>

               <div class="image"><?php echo $value1->media_item->show_image();?></div>
               <h1><?php echo $value1->title;?></h1>
            <?php }else{ ?>

               <h1><?php echo $value1->title;?></h1>
               <p><?php echo $value1->description();?></p>
            <?php } ?>

            <div class="timesince">
               <?php echo $value1->popularity();?>

               <span><?php echo $value1->timesince();?></span>
            </div>
         </div>
         <a href="<?php echo $path;?>/<?php echo $value1->url();?>"></a>
      <?php } ?>

   </div>
<?php }else{ ?>

   <div class="info">
      <h1>No se han encontrado noticias populares :(</h1>
      <p>
         Esto es muy grave. No en plan "¡Vamos a morir todos!". No, simplemente
         es una mierda.<br/>
         Añade alguna fuente desde la sección
         <a href="<?php echo $path;?>/index.php?page=feed_list">fuentes</a>. O deja que lo haga
         otro y luego di que has sido tú y te llevas el mérito ;-)
      </p>
   </div>
<?php } ?>


<?php $tpl = new RainTPL;$tpl_dir_temp = self::$tpl_dir;$tpl->assign( $this->var );$tpl->draw( dirname("desktop/footer") . ( substr("desktop/footer",-1,1) != "/" ? "/" : "" ) . basename("desktop/footer") );?>