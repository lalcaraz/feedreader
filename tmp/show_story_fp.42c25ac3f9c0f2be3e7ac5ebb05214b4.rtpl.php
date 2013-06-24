<?php if(!class_exists('raintpl')){exit;}?><?php $tpl = new RainTPL;$tpl_dir_temp = self::$tpl_dir;$tpl->assign( $this->var );$tpl->draw( dirname("mobile/header") . ( substr("mobile/header",-1,1) != "/" ? "/" : "" ) . basename("mobile/header") );?>


<script type="text/javascript">
   $(document).ready(function() {
      $("#story_editions2").hide();
      $('#b_show_feeds2').click(function () {
         $("#b_show_editions2").removeClass('activa');
         $("#story_editions2").hide();
         $('#b_show_feeds2').addClass('activa');
         $("#story_feeds2").show();
      });
      $('#b_show_editions2').click(function () {
         $('#b_show_feeds2').removeClass('activa');
         $("#story_feeds2").hide();
         $("#b_show_editions2").addClass('activa');
         $("#story_editions2").show();
      });
   });
</script>

<?php if( $fsc->story ){ ?>

<div class="story_info">
   <span class="label">Popularidad: <?php echo $fsc->story->popularity();?></span>
   <h3><?php echo $fsc->story->title;?></h3>
   <?php if( $fsc->story->media_item ){ ?>

      <div class="media_item"><?php echo $fsc->story->media_item->show($fsc->story->link());?></div>
   <?php } ?>

   <p><?php echo $fsc->story->description;?></p>
   <table width="100%">
      <tr>
         <td>
            <a class="btn" target="_blank" href="<?php echo $fsc->twitter_url();?>">Tweet</a>
         </td>
         <td align="right">
            <a href="<?php echo $fsc->story->edit_url();?>" class="btn btn-success">Editar</a>
            <a target="_blank" href="<?php echo $fsc->story->link();?>" class="btn btn-primary">Abrir enlace</a>
         </td>
      </tr>
   </table>
</div>

<ul class="pestanyas">
   <li id="b_show_feeds2" class="activa">Fuentes</li>
   <li id="b_show_editions2">Ediciones</li>
</ul>

<div class="pestanya_content" id="story_feeds2">
   <table class="lista">
      <tr>
         <th align="left">Fecha</th>
         <th align="left">Enlace</th>
         <th align="left">Fuente</th>
      </tr>
      <?php $loop_var1=$fsc->story->feed_links(); $counter1=-1; if($loop_var1) foreach( $loop_var1 as $key1 => $value1 ){ $counter1++; ?>

      <tr>
         <td><?php echo $value1->timesince();?></td>
         <td><a target="_blank" href="<?php echo $value1->link();?>"><?php echo $value1->title;?></a></td>
         <td><a href="<?php echo $value1->feed_url();?>"><?php echo $value1->feed_name();?></a></td>
      </tr>
      <?php }else{ ?>

      <tr><td colspan="3">Sin resultados.</td></tr>
      <?php } ?>

   </table>
</div>

<div class="pestanya_content" id="story_editions2">
   <table class="lista">
      <tr>
         <th align="left">Fecha</th>
         <th align="left">Título</th>
         <th align="right">Votos</th>
      </tr>
      <?php $loop_var1=$fsc->story->editions(); $counter1=-1; if($loop_var1) foreach( $loop_var1 as $key1 => $value1 ){ $counter1++; ?>

      <tr>
         <td><?php echo $value1->timesince();?></td>
         <td><a href="<?php echo $path;?>/<?php echo $value1->url();?>"><?php echo $value1->title;?></a></td>
         <td align="right"><?php echo $value1->votes;?></td>
      </tr>
      <?php }else{ ?>

      <tr><td colspan="3">Sin resultados.</td></tr>
      <?php } ?>

   </table>
</div>
<?php } ?>


<?php $tpl = new RainTPL;$tpl_dir_temp = self::$tpl_dir;$tpl->assign( $this->var );$tpl->draw( dirname("mobile/footer") . ( substr("mobile/footer",-1,1) != "/" ? "/" : "" ) . basename("mobile/footer") );?>