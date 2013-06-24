<?php if(!class_exists('raintpl')){exit;}?><?php $tpl = new RainTPL;$tpl_dir_temp = self::$tpl_dir;$tpl->assign( $this->var );$tpl->draw( dirname("desktop/header") . ( substr("desktop/header",-1,1) != "/" ? "/" : "" ) . basename("desktop/header") );?>


<?php if( $fsc->stories ){ ?>

   <?php if( $fsc->show_info ){ ?>

   <div class="info">
      <table width="100%">
         <tr>
            <td>
               <h1>¿Qué pasa aquí?</h1>
               <p>
                  Aquí tienes una ración aleatoria de noticias frescas, fresquísimas.
                  Noticias de cualquier fuente. ¡Para cuando te aburras!
               </p>
               <ul>
                  <li>
                     Si alguna noticia está ilustrada con una imagen que no se corresponde o no
                     te gusta como está redactada, haz clic sobre la noticia y pulsa el botón
                     <b>editar</b> para modificarla.
                  </li>
                  <li>
                     Y si encuentras algún fallo,
                     <a href="#" onclick="fs_popup_iframe('<?php echo $path;?>/index.php?page=comments'); return false;">avísame!</a>
                  </li>
               </ul>
               <p><a class="button" href="<?php echo $path;?>/<?php echo $fsc->url();?>&show_info=FALSE">Vale, ya lo pillo</a></p>
            </td>
            <td align="right" valign="top">
               <a id="b_talk" href="#" onclick="fs_popup_iframe('<?php echo $path;?>/index.php?page=comments'); return false;">
                  <img class="face" src="<?php echo $path;?>/view/img/me_gusta.png" alt="me gusta"/>
               </a>
            </td>
         </tr>
      </table>
   </div>
   <?php } ?>

   
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
      <h1>No se han encontrado noticias :(</h1>
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