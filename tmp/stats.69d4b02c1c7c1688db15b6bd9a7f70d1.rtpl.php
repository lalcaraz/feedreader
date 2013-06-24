<?php if(!class_exists('raintpl')){exit;}?><?php $tpl = new RainTPL;$tpl_dir_temp = self::$tpl_dir;$tpl->assign( $this->var );$tpl->draw( dirname("desktop/header") . ( substr("desktop/header",-1,1) != "/" ? "/" : "" ) . basename("desktop/header") );?>


<div class="bloque">
   <table width="100%">
      <tr>
         <td align="right" valign="top">
            <img class="face" src="<?php echo $path;?>/view/img/mother_of_god.png" alt="wooow"/>
         </td>
         <td valign="top">
            <div class="title">Estadísticas:</div>
            <ul class="horizontal">
               <li>FeedStorm: v<?php echo $fsc->version();?></li>
               <li>MongoDB: v<?php echo $fsc->mongo_version();?></li>
               <li>Usuarios: <?php echo $fsc->visitor->show_count();?></li>
               <li>Fuentes: <?php echo $fsc->feed->show_count();?></li>
               <li>Suscripciones: <?php echo $fsc->suscription->show_count();?></li>
               <li>Historias/fuente: <?php echo $fsc->feed_story->show_count();?></li>
               <li>Historias: <?php echo $fsc->story->show_count();?></li>
               <li>Ediciones: <?php echo $fsc->story_edition->show_count();?></li>
               <li>Visitas: <?php echo $fsc->story_visit->show_count();?></li>
               <li>Elementos multimedia/historia: <?php echo $fsc->story_media->show_count();?></li>
               <li>Elementos multimedia: <?php echo $fsc->media_item->show_count();?></li>
            </ul>
         </td>
      </tr>
   </table>
</div>

<div class="info">
   <h1>Últimas visitas:</h1>
   <table class="lista">
      <tr>
         <th align="left">Fecha</th>
         <th align="left">IP</th>
         <th align="left">Navegador</th>
         <th align="right">Historia</th>
      </tr>
      <?php $loop_var1=$fsc->story_visit->last(); $counter1=-1; if($loop_var1) foreach( $loop_var1 as $key1 => $value1 ){ $counter1++; ?>

      <tr>
         <td><?php echo $value1->timesince();?></td>
         <td><?php echo $value1->ip;?></td>
         <td><?php echo $value1->user_agent;?></td>
         <td align="right"><a target="_blank" href="<?php echo $value1->url();?>"><?php echo $value1->story_id;?></a></td>
      </tr>
      <?php }else{ ?>

      <tr><td>-</td><td>-</td><td>-</td><td align="right">-</td></tr>
      <?php } ?>

   </table>
</div>

<div class="bloque">
   <div class="title">Nuevos usuarios:</div>
   <table class="lista">
      <tr>
         <th align="left">Fecha</th>
         <th align="left">Nick</th>
         <th align="left">Navegador</th>
      </tr>
      <?php $loop_var1=$fsc->visitor->last(); $counter1=-1; if($loop_var1) foreach( $loop_var1 as $key1 => $value1 ){ $counter1++; ?>

      <tr>
         <td><?php echo $value1->login_timesince();?></td>
         <td><?php echo $value1->nick;?></td>
         <td><?php echo $value1->user_agent;?></td>
      </tr>
      <?php }else{ ?>

      <tr><td>-</td><td>-</td><td>-</td></tr>
      <?php } ?>

   </table>
</div>

<?php $tpl = new RainTPL;$tpl_dir_temp = self::$tpl_dir;$tpl->assign( $this->var );$tpl->draw( dirname("desktop/footer") . ( substr("desktop/footer",-1,1) != "/" ? "/" : "" ) . basename("desktop/footer") );?>