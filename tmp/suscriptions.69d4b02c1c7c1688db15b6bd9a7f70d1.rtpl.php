<?php if(!class_exists('raintpl')){exit;}?><?php $tpl = new RainTPL;$tpl_dir_temp = self::$tpl_dir;$tpl->assign( $this->var );$tpl->draw( dirname("desktop/header") . ( substr("desktop/header",-1,1) != "/" ? "/" : "" ) . basename("desktop/header") );?>


<?php if( $fsc->suscriptions ){ ?>

<div class="bloque">
   <table width="100%">
      <tr>
         <td valign="top">
            <div class="title">Estas son tus suscripciones:</div>
            <table class="lista">
               <tr>
                  <th align="left">Nombre + descripción</th>
                  <th align="left">Última actualización</th>
                  <th align="right">Suscriptores</th>
               </tr>
               <?php $loop_var1=$fsc->suscriptions; $counter1=-1; if($loop_var1) foreach( $loop_var1 as $key1 => $value1 ){ $counter1++; ?>

               <tr>
                  <td><a href="<?php echo $value1->url();?>"><?php echo $value1->name();?></a> <?php echo $value1->description();?></td>
                  <td><?php echo $value1->last_update_timesince();?></td>
                  <td align="right"><?php echo $value1->suscriptors();?></td>
               </tr>
               <?php } ?>

               <tr>
                  <td colspan="3">
                     <a href="<?php echo $path;?>/index.php?page=feed_list">Añadir más fuentes...</a>
                  </td>
               </tr>
            </table>
         </td>
         <td align="right" valign="top">
            <a id="b_talk" href="#" onclick="fs_popup_iframe('<?php echo $path;?>/index.php?page=comments'); return false;">
               <img class="face" src="<?php echo $path;?>/view/img/me_gusta.png" alt="me gusta"/>
            </a>
         </td>
      </tr>
   </table>
</div>
<?php }else{ ?>

<div class="info">
   <h1>No estás suscrito a ninguna fuente.</h1>
   <p>
      Puedes buscar fuentes interesantes desde la sección <a href="<?php echo $path;?>/index.php?page=feed_list">fuentes</a>
      y suscríbirte.
   </p>
</div>
<?php } ?>


<?php $tpl = new RainTPL;$tpl_dir_temp = self::$tpl_dir;$tpl->assign( $this->var );$tpl->draw( dirname("desktop/footer") . ( substr("desktop/footer",-1,1) != "/" ? "/" : "" ) . basename("desktop/footer") );?>