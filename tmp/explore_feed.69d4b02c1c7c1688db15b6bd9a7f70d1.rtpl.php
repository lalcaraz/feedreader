<?php if(!class_exists('raintpl')){exit;}?><?php $tpl = new RainTPL;$tpl_dir_temp = self::$tpl_dir;$tpl->assign( $this->var );$tpl->draw( dirname("desktop/header") . ( substr("desktop/header",-1,1) != "/" ? "/" : "" ) . basename("desktop/header") );?>


<?php if( $fsc->feed ){ ?>

<script src="<?php echo $path;?>/view/js/jquery.masonry.min.js"></script>
<script type="text/javascript">
   $(document).ready(function() {
      $("#stories").masonry({
         itemSelector: '.story',
         isFitWidth: true,
         isAnimated: true
      });
      $('#b_remove_feed').click(function() {
         window.location.href = "<?php echo $fsc->url();?>&delete="+prompt('Clave maestra:');
      });
   });
</script>

<div class="info">
   <table width="100%">
      <tr>
         <td>
            <h1><?php echo $fsc->feed->name;?></h1>
         </td>
         <td align="right">
            <?php if( $fsc->unsuscribe ){ ?>

            <a class="button_remove" href="<?php echo $fsc->suscribe_url;?>"><?php echo $fsc->suscribe_text;?></a>
            <?php }else{ ?>

            <a class="button" href="<?php echo $fsc->suscribe_url;?>"><?php echo $fsc->suscribe_text;?></a>
            <?php } ?>

         </td>
      </tr>
   </table>
   <table class="lista">
      <tr>
         <th align="left">Descripción</th>
         <th align="left">URL</th>
         <th align="left">Última actualización</th>
         <th align="left">Última comprobación</th>
         <th align="right">Suscriptores</th>
         <th align="right">Errores</th>
      </tr>
      <tr>
         <td><?php echo $fsc->feed->description;?>.</td>
         <td><?php echo $fsc->feed->url;?></td>
         <td><?php echo $fsc->feed->last_update_timesince();?></td>
         <td><?php echo $fsc->feed->last_check_timesince();?></td>
         <td align="right"><?php echo $fsc->feed->suscriptors;?></td>
         <td align="right"><?php echo $fsc->feed->strikes;?></td>
      </tr>
   </table>
   <table width="100%">
      <tr>
         <td>
            <a class="facebook" target="_blank" href="<?php echo $fsc->facebook_url();?>">Facebook</a>
            <a class="twitter" target="_blank" href="<?php echo $fsc->twitter_url();?>">Twitter</a>
         </td>
         <td align="right">
            <a id="b_remove_feed" class="remove" href="#">Eliminar esta fuente</a>
         </td>
      </tr>
   </table>
</div>

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
<?php } ?>


<?php $tpl = new RainTPL;$tpl_dir_temp = self::$tpl_dir;$tpl->assign( $this->var );$tpl->draw( dirname("desktop/footer") . ( substr("desktop/footer",-1,1) != "/" ? "/" : "" ) . basename("desktop/footer") );?>