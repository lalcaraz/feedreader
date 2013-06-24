<?php if(!class_exists('raintpl')){exit;}?><?php if( $fsc->story ){ ?>

<div class="story_info">
   <h1><?php echo $fsc->story->title;?></h1>
   <?php if( $fsc->story->media_item ){ ?>

   <div class="media_item"><?php echo $fsc->story->media_item->show($fsc->story->link());?></div>
   <?php } ?>

   <p><?php echo $fsc->story->description;?></p>
   <table width="100%">
      <tr>
         <td>
            <span class="label" title="<?php echo $fsc->story->clics;?> clics, <?php echo $fsc->story->tweets;?> tweets, <?php echo $fsc->story->likes;?> likes, <?php echo $fsc->story->meneos;?> meneos">
               Popularidad: <?php echo $fsc->story->popularity();?>

            </span>
            <a class="twitter" target="_blank" href="<?php echo $fsc->twitter_url();?>" title="<?php echo $fsc->story->tweets;?> tweets">Twitter</a>
            <a class="facebook" target="_blank" href="<?php echo $fsc->facebook_url();?>" title="<?php echo $fsc->story->likes;?> likes">Facebook</a>
         </td>
         <td align="right">
            <a href="<?php echo $fsc->story->edit_url();?>" class="button_edit">Editar</a> &nbsp;
            <a target="_blank" href="<?php echo $fsc->story->link();?>" class="button">Abrir enlace</a>
         </td>
      </tr>
   </table>
</div>
<ul class="pestanyas">
   <li id="b_show_feeds" class="activa">Fuentes</li>
   <li id="b_show_editions">Ediciones</li>
</ul>
<div class="pestanya_content" id="story_feeds">
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

      <tr>
         <td colspan="3">Sin resultados.</td>
      </tr>
      <?php } ?>

   </table>
</div>
<div class="pestanya_content" id="story_editions">
   <table class="lista">
      <tr>
         <th align="left">Fecha</th>
         <th align="left">Título</th>
         <th align="right">Votos</th>
      </tr>
      <?php $loop_var1=$fsc->story->editions(); $counter1=-1; if($loop_var1) foreach( $loop_var1 as $key1 => $value1 ){ $counter1++; ?>

      <tr>
         <td><?php echo $value1->timesince();?></td>
         <td><a href="#" onclick="fs_popup_edition('<?php echo $path;?>/<?php echo $value1->url();?>'); return false;"><?php echo $value1->title;?></a></td>
         <td align="right"><?php echo $value1->votes;?></td>
      </tr>
      <?php }else{ ?>

      <tr>
         <td colspan="3">Sin resultados.</td>
      </tr>
      <?php } ?>

   </table>
</div>
<?php } ?>