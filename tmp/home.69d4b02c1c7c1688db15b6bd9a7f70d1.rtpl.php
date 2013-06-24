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
      <?php } ?>

   </div>
<?php }else{ ?>

   <div class="info">
      <h1>No se han encontrado noticias para tí :(</h1>
      <p>
         Para que aparezcan noticias aquí debes suscribirte a alguna fuente,
         mira en la sección <a href="<?php echo $path;?>/index.php?page=feed_list">fuentes</a>.
         También puedes buscar noticias interesantes desde la sección
         <a href="<?php echo $path;?>/index.php?page=discover_stories">descubrir</a>.
      </p>
   </div>
   
   <?php if( $fsc->popular OR $fsc->editions ){ ?>

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
      <?php $loop_var1=$fsc->editions; $counter1=-1; if($loop_var1) foreach( $loop_var1 as $key1 => $value1 ){ $counter1++; ?>

         <div class="story" onclick="fs_popup_edition('<?php echo $path;?>/<?php echo $value1->url();?>')">
            <?php if( $value1->media_item ){ ?>

               <div class="image"><?php echo $value1->media_item->show_image();?></div>
               <h1><?php echo $value1->title;?></h1>
            <?php }else{ ?>

               <h1><?php echo $value1->title;?></h1>
               <p><?php echo $value1->description();?></p>
            <?php } ?>

            <div class="timesince">
               <?php echo $value1->votes;?> votos
               <span><?php echo $value1->timesince();?></span>
            </div>
         </div>
         <a href="<?php echo $path;?>/<?php echo $value1->url();?>"></a>
      <?php } ?>

      <?php $loop_var1=$fsc->popular; $counter1=-1; if($loop_var1) foreach( $loop_var1 as $key1 => $value1 ){ $counter1++; ?>

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
   <?php } ?>

<?php } ?>

<!--
<div class="info">
   <table width="100%">
      <tr>
         <td align="right" valign="top">
            <img class="face" src="<?php echo $path;?>/view/img/wooow.png" alt="wooow"/>
         </td>
         <td>
            <h1>Últimos cambios en <?php echo $name;?> <?php echo $fsc->version();?>:</h1>
            <ul>
               <li>Añadidos más filtros anti-spam.</li>
               <li>
                  Añadidos botones para compartir en <a class="twitter" href="#">twitter</a>
                  y <a class="facebook" href="#">facebook</a>
               </li>
               <li>
                  Las menciones en Twitter, Facebook y Meneame cuentan
                  para calcular la popularidad de cada noticia.
               </li>
               <li>Mejorado el algoritmo para extraer vídeos de youtube.</li>
            </ul>
         </td>
      </tr>
   </table>
</div>
-->
<?php $tpl = new RainTPL;$tpl_dir_temp = self::$tpl_dir;$tpl->assign( $this->var );$tpl->draw( dirname("desktop/footer") . ( substr("desktop/footer",-1,1) != "/" ? "/" : "" ) . basename("desktop/footer") );?>