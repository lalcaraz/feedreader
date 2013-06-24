<?php if(!class_exists('raintpl')){exit;}?><?php $tpl = new RainTPL;$tpl_dir_temp = self::$tpl_dir;$tpl->assign( $this->var );$tpl->draw( dirname("mobile/header") . ( substr("mobile/header",-1,1) != "/" ? "/" : "" ) . basename("mobile/header") );?>


<div class="alert alert-info">
   <h2>¿Qué hago yo aquí?</h2>
   <p>
      Aquí tienes la lista de fuentes de <b><?php echo $name;?></b>.
      Si no encuentras lo que buscas, puedes añadir una fuente
      desde este formulario:
   </p>
   <form action="<?php echo $fsc->url();?>" method="post">
      <input type="text" name="feed_url" placeholder="URL (RSS/ATOM)" size="25"/>
      <br/>
      <b>¿Eres humano?</b>
      <br/>
      <label for="r_human_yes" class="radio inline">
         <input id="r_human_yes" type="radio" name="human" value="POZI"/>
         Si
      </label>
      <label for="r_human_no" class="radio inline">
         <input id="r_human_no" type="radio" name="human" value="PONO" checked="checked"/>
         No
      </label>
      <br/><br/>
      <input type="submit" class="btn btn-primary" value="Añadir fuente"/>
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
</div>

<div class="well">
   <table class="lista">
      <tr>
         <th align="left">Nombre + Última actualización</th>
         <th align="right">S</th>
         <th align="right">E</th>
      </tr>
      <?php $loop_var1=$fsc->feed_list; $counter1=-1; if($loop_var1) foreach( $loop_var1 as $key1 => $value1 ){ $counter1++; ?>

      <tr>
         <td><a href="<?php echo $value1->url();?>"><?php echo $value1->name;?></a> <?php echo $value1->last_update_timesince();?></td>
         <td align="right"><?php echo $value1->suscriptors;?></td>
         <td align="right"><?php echo $value1->strikes;?></td>
      </tr>
      <?php }else{ ?>

      <tr><td colspan="3">Sin resultados.</td></tr>
      <?php } ?>

   </table>
</div>

<?php $tpl = new RainTPL;$tpl_dir_temp = self::$tpl_dir;$tpl->assign( $this->var );$tpl->draw( dirname("mobile/footer") . ( substr("mobile/footer",-1,1) != "/" ? "/" : "" ) . basename("mobile/footer") );?>