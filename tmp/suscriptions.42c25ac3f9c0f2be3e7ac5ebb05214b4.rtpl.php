<?php if(!class_exists('raintpl')){exit;}?><?php $tpl = new RainTPL;$tpl_dir_temp = self::$tpl_dir;$tpl->assign( $this->var );$tpl->draw( dirname("mobile/header") . ( substr("mobile/header",-1,1) != "/" ? "/" : "" ) . basename("mobile/header") );?>


<?php if( $fsc->suscriptions ){ ?>

<div class="well">
   <h3>Nombre + descripción:</h3>
   <?php $loop_var1=$fsc->suscriptions; $counter1=-1; if($loop_var1) foreach( $loop_var1 as $key1 => $value1 ){ $counter1++; ?>

      <p><a href="<?php echo $value1->url();?>"><?php echo $value1->name();?></a> <?php echo $value1->description();?></p>
   <?php } ?>

</div>
<?php }else{ ?>

<div class="alert">
   <h2>No estás suscrito a ninguna fuente.</h2>
   <p>
      Puedes buscar fuentes interesantes desde la sección <a href="<?php echo $path;?>/index.php?page=feed_list">fuentes</a>
      y suscríbirte.
   </p>
</div>
<?php } ?>


<?php $tpl = new RainTPL;$tpl_dir_temp = self::$tpl_dir;$tpl->assign( $this->var );$tpl->draw( dirname("mobile/footer") . ( substr("mobile/footer",-1,1) != "/" ? "/" : "" ) . basename("mobile/footer") );?>