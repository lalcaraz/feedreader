<?php if(!class_exists('raintpl')){exit;}?><?php $tpl = new RainTPL;$tpl_dir_temp = self::$tpl_dir;$tpl->assign( $this->var );$tpl->draw( dirname("mobile/header") . ( substr("mobile/header",-1,1) != "/" ? "/" : "" ) . basename("mobile/header") );?>


<?php if( $fsc->stories ){ ?>

   <div>
      <?php $loop_var1=$fsc->stories; $counter1=-1; if($loop_var1) foreach( $loop_var1 as $key1 => $value1 ){ $counter1++; ?>

      <div class="story<?php if( $value1->readed() ){ ?> story_readed<?php } ?>" onclick="fs_go2url('<?php echo $path;?>/<?php echo $value1->url();?>')">
         <?php if( $value1->media_item ){ ?>

            <div class="image"><?php echo $value1->media_item->show_image();?></div>
            <h4><?php echo $value1->title;?></h4>
         <?php }else{ ?>

            <h4><?php echo $value1->title;?></h4>
            <p><?php echo $value1->description();?></p>
         <?php } ?>

         <div class="timesince">
            <?php echo $value1->popularity();?>

            <span><?php echo $value1->timesince();?></span>
         </div>
      </div>
      <?php } ?>

   </div>
<?php }else{ ?>

   <div class="alert">
      <h3>No se han encontrado noticias para tí :(</h3>
      <p>
         Para que aparezcan noticias aquí debes suscribirte a alguna fuente,
         mira en la sección <a href="<?php echo $path;?>/index.php?page=feed_list">fuentes</a>.
         También puedes buscar noticias interesantes desde la sección
         <a href="<?php echo $path;?>/index.php?page=discover_stories">descubrir</a>.
      </p>
   </div>
   
   <?php if( $fsc->popular ){ ?>

   <div>
      <?php $loop_var1=$fsc->editions; $counter1=-1; if($loop_var1) foreach( $loop_var1 as $key1 => $value1 ){ $counter1++; ?>

      <div class="story" onclick="fs_go2url('<?php echo $path;?>/<?php echo $value1->url();?>')">
         <?php if( $value1->media_item ){ ?>

            <div class="image"><?php echo $value1->media_item->show_image();?></div>
            <h4><?php echo $value1->title;?></h4>
         <?php }else{ ?>

            <h4><?php echo $value1->title;?></h4>
            <p><?php echo $value1->description();?></p>
         <?php } ?>

         <div class="timesince">
            <?php echo $value1->votes;?> votos
            <span><?php echo $value1->timesince();?></span>
         </div>
      </div>
      <a href="<?php echo $path;?>/<?php echo $value1->url();?>"></a>
      <?php } ?>

      <?php $loop_var1=$fsc->popular; $counter1=-1; if($loop_var1) foreach( $loop_var1 as $key1 => $value1 ){ $counter1++; ?>

      <div class="story<?php if( $value1->readed() ){ ?> story_readed<?php } ?>" onclick="fs_go2url('<?php echo $path;?>/<?php echo $value1->url();?>')">
         <?php if( $value1->media_item ){ ?>

            <div class="image"><?php echo $value1->media_item->show_image();?></div>
            <h4><?php echo $value1->title;?></h4>
         <?php }else{ ?>

            <h4><?php echo $value1->title;?></h4>
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

<?php } ?>


<?php $tpl = new RainTPL;$tpl_dir_temp = self::$tpl_dir;$tpl->assign( $this->var );$tpl->draw( dirname("mobile/footer") . ( substr("mobile/footer",-1,1) != "/" ? "/" : "" ) . basename("mobile/footer") );?>