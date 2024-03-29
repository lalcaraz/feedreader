<?php if(!class_exists('raintpl')){exit;}?><?php $tpl = new RainTPL;$tpl_dir_temp = self::$tpl_dir;$tpl->assign( $this->var );$tpl->draw( dirname("desktop/header") . ( substr("desktop/header",-1,1) != "/" ? "/" : "" ) . basename("desktop/header") );?>


<div class="info">
   <table width="100%">
      <tr>
         <td>
            <h1>¿Qué hago yo aquí?</h1>
            <p>
               Aquí tienes la lista de fuentes de <b><?php echo $name;?></b>.
               Si no encuentras lo que buscas, puedes añadir una fuente
               desde este formulario:
            </p>
            <form action="<?php echo $fsc->url();?>" method="post">
               <input type="text" name="feed_url" placeholder="URL (RSS/ATOM)" size="50"/>
               <b>¿Eres humano?</b>
               <input id="r_human_yes" type="radio" name="human" value="POZI"/>
               <label for="r_human_yes">Si</label>
               <input id="r_human_no" type="radio" name="human" value="PONO" checked="checked"/>
               <label for="r_human_no">No</label>
               <br/>
               <input type="submit" value="Añadir fuente"/>
            </form>
            <ul>
               <li>Tienes que introducir la dirección de una fuente en formato RSS o ATOM.</li>
               <li>
                  La mayoría de las fuentes dicen que cumplen los estandares RSS o ATOM,
                  pero es mentira.
               </li>
               <li>
                  No te preocupes, esta web saca noticias de cualquier
                  fuente, por muy mentirosa que sea.
               </li>
               <li>
                  Si no sabes de qué estoy hablando, simplemente elige una fuente de abajo,
                  haces clic y ves las noticias que tiene. Si te gusta, pulsas el botón
                  suscribir.
               </li>
            </ul>
         </td>
         <td align="right" valign="top">
            <a href="<?php echo $path;?>/index.php?page=stats">
               <img class="face" src="<?php echo $path;?>/view/img/mother_of_god.png" alt="mother of god"/>
            </a>
         </td>
      </tr>
   </table>
</div>

<div class="bloque">
   <table class="lista">
      <tr>
         <th align="left">Nombre + URL</th>
         <th align="left">Última comprobación</th>
         <th align="left">Última actualización</th>
         <th align="right">Suscriptores</th>
         <th align="right">Errores</th>
      </tr>
      <?php $loop_var1=$fsc->feed_list; $counter1=-1; if($loop_var1) foreach( $loop_var1 as $key1 => $value1 ){ $counter1++; ?>

      <tr>
         <td><a href="<?php echo $value1->url();?>"><?php echo $value1->name;?></a> <?php echo $value1->show_url();?></td>
         <td><?php echo $value1->last_check_timesince();?></td>
         <td><?php echo $value1->last_update_timesince();?></td>
         <td align="right"><?php echo $value1->suscriptors;?></td>
         <td align="right"><?php echo $value1->strikes;?></td>
      </tr>
      <?php }else{ ?>

      <tr><td colspan="6">Sin resultados.</td></tr>
      <?php } ?>

   </table>
</div>

<?php $tpl = new RainTPL;$tpl_dir_temp = self::$tpl_dir;$tpl->assign( $this->var );$tpl->draw( dirname("desktop/footer") . ( substr("desktop/footer",-1,1) != "/" ? "/" : "" ) . basename("desktop/footer") );?>