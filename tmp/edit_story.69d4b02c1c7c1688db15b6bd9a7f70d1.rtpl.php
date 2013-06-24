<?php if(!class_exists('raintpl')){exit;}?><?php $tpl = new RainTPL;$tpl_dir_temp = self::$tpl_dir;$tpl->assign( $this->var );$tpl->draw( dirname("desktop/header") . ( substr("desktop/header",-1,1) != "/" ? "/" : "" ) . basename("desktop/header") );?>


<?php if( $fsc->story ){ ?>

<script src="<?php echo $path;?>/view/js/jquery.masonry.min.js"></script>
<script type="text/javascript">
   $(document).ready(function() {
      $("#media_items").masonry({
         itemSelector: '.media_item2',
         isFitWidth: true,
         isAnimated: true
      });
   });
</script>

<div class="bloque">
   <h1>Editar noticia:</h1>
   Desde aquí puedes editar la noticia para seleccionar una imágen más apropiada,
   corregir faltas de ortografía, mejorar la redacción, etc ... pero no te
   emociones porque no sustituye a la noticia original. Esta versión corregida
   aparecerá en la sección <b>ediciones</b>.
   
   <br/><br/>
   
   <form action="<?php echo $fsc->url();?>" method="post">
      <table width="100%">
         <tr>
            <td width="110" align="right"><b>¿Eres humano?</b> &nbsp;</td>
            <td>
               <input id="r_human_yes" type="radio" name="human" value="POZI"/>
               <label for="r_human_yes">Si</label>
               <input id="r_human_no" type="radio" name="human" value="PONO" checked="checked"/>
               <label for="r_human_no">No</label>
            </td>
            <td width="100" align="center"><input type="submit" value="Guardar"/></td>
         </tr>
         <tr>
            <td width="110" align="right"><b>Nuevo título:</b> &nbsp;</td>
            <td><input class="full" type="text" name="title" value="<?php echo $fsc->story_edition->title;?>" size="60" autocomplete="off"/></td>
         </tr>
         <tr>
            <td align="right"><b>Descripción:</b> &nbsp;</td>
            <td><textarea name="description" rows="6"><?php echo $fsc->story_edition->description();?></textarea></td>
         </tr>
      </table>
      
      <h2>Ahora selecciona una imágen:</h2>
      
      <div id="media_items">
         <div class="media_item2">
            <?php if( !$fsc->story_edition->media_id ){ ?>

               <input type="radio" name="media_id" value="none" checked="checked"/> Ninguna
            <?php }else{ ?>

               <input type="radio" name="media_id" value="none"/> Ninguna
            <?php } ?>

         </div>
         <?php $loop_var1=$fsc->story->media_items(); $counter1=-1; if($loop_var1) foreach( $loop_var1 as $key1 => $value1 ){ $counter1++; ?>

         <div class="media_item2">
            <?php if( $value1->get_id()==$fsc->story_edition->media_id ){ ?>

               <input type="radio" name="media_id" value="<?php echo $value1->get_id();?>" checked="checked"/> Seleccionar
            <?php }else{ ?>

               <input type="radio" name="media_id" value="<?php echo $value1->get_id();?>"/> Seleccionar
            <?php } ?>

            <div class="media_item_show"><?php echo $value1->show();?></div>
         </div>
         <?php } ?>

      </div>
   </form>
</div>
<?php } ?>


<?php $tpl = new RainTPL;$tpl_dir_temp = self::$tpl_dir;$tpl->assign( $this->var );$tpl->draw( dirname("desktop/footer") . ( substr("desktop/footer",-1,1) != "/" ? "/" : "" ) . basename("desktop/footer") );?>