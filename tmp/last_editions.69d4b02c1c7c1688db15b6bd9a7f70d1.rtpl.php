<?php if(!class_exists('raintpl')){exit;}?><?php $tpl = new RainTPL;$tpl_dir_temp = self::$tpl_dir;$tpl->assign( $this->var );$tpl->draw( dirname("desktop/header") . ( substr("desktop/header",-1,1) != "/" ? "/" : "" ) . basename("desktop/header") );?>


<?php if( $fsc->editions ){ ?>

   <?php if( $fsc->show_info ){ ?>

   <div class="info">
      <table width="100%">
         <tr>
            <td>
               <h1>¿Esto qué es?</h1>
               <p>
                  Aquí aparecen las últimas noticias editadas por los usuarios.
                  Para editar una noticia sólo tienes que hacer clic sobre ella
                  y a continuación pulsar el botón <b>editar</b>.
                  <br/>
                  Y si encuentras algún fallo,
                  <a href="#" onclick="fs_popup_iframe('<?php echo $path;?>/index.php?page=comments'); return false;">avísame!</a>
               </p>
               <p><a class="button" href="<?php echo $path;?>/<?php echo $fsc->url();?>&show_info=FALSE">Entendido</a></p>
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

   </div>
<?php }else{ ?>

   <div class="info">
      <h1>No se han encontrado ediciones :(</h1>
      <p>
         Para crear una edición simplemente selecciona una noticia y pulsa el
         botón <b>editar</b>.
      </p>
   </div>
<?php } ?>


<?php $tpl = new RainTPL;$tpl_dir_temp = self::$tpl_dir;$tpl->assign( $this->var );$tpl->draw( dirname("desktop/footer") . ( substr("desktop/footer",-1,1) != "/" ? "/" : "" ) . basename("desktop/footer") );?>