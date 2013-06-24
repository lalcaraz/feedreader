<?php
/*
 * This file is part of FeedStorm
 * Copyright (C) 2013  Carlos Garcia Gomez  neorazorx@gmail.com
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 * 
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

/// Si lees esto es que no tienes activado PHP!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

date_default_timezone_set('Europe/Madrid');

if( !class_exists('Mongo') )
   echo "No tienes MongoDB instalado. Consulta la web oficial: https://github.com/NeoRazorX/feedstorm";
else if( !file_exists('config.php') )
   echo "Tienes que modificar el archivo config.php a partir del config-sample.php";
else
{
   require_once 'config.php';
   
   if( !defined('FS_MAX_AGE') )
      define('FS_MAX_AGE', 2592000);
   if( !defined('FS_MASTER_KEY') )
      define('FS_MASTER_KEY', '');
   
   require_once 'base/fs_controller.php';
   require_once 'raintpl/rain.tpl.class.php';
   
   /// ¿Qué controlador usar?
   if( isset($_GET['page']) )
   {
      if( file_exists('controller/'.$_GET['page'].'.php') )
      {
         require_once 'controller/'.$_GET['page'].'.php';
         $fsc = new $_GET['page']();
      }
      else
      {
         require_once 'controller/not_found.php';
         $fsc = new not_found();
      }
   }
   else
   {
      require_once 'controller/home.php';
      $fsc = new home();
   }
   
   if( $fsc->template )
   {
      /// configuramos rain.tpl
      raintpl::configure("base_url", null );
      raintpl::configure("tpl_dir", "view/" );
      
      /// ¿Se puede escribir sobre la carpeta temporal?
      if( file_exists('tmp/test') )
         raintpl::configure('cache_dir', 'tmp/');
      else if( mkdir('tmp/test') )
         raintpl::configure('cache_dir', 'tmp/');
      else
         die('No se puede escribir sobre la carpeta temporal (la carpeta tmp de FeedStorm).');
      
      raintpl::configure("path_replace", FALSE);
      $tpl = new RainTPL();
      $tpl->assign('name', FS_NAME);
      $tpl->assign('description', FS_DESCRIPTION);
      $tpl->assign('path', FS_PATH);
      $tpl->assign('analytics', FS_ANALYTICS);
      $tpl->assign('fsc', $fsc);
      $tpl->draw( $fsc->template );
   }
}

?>