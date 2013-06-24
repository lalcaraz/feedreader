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

require_once 'model/story.php';
require_once 'model/story_edition.php';

class not_found extends fs_controller
{
   public $editions;
   public $popular;
   public $show_info;
   public $stories;
   
   public function __construct()
   {
      parent::__construct('not_found', '404', '¡Página no encontrada en '.FS_NAME.'!', 'home');
   }
   
   protected function process()
   {
      $this->new_error_msg('¡Página no encontrada!');
      
      $this->show_info = FALSE;
      $this->stories = array();
      
      /// cargamos ediciones y noticias populares hasta llegar a FS_MAX_STORIES
      $ssids = array();
      $edition = new story_edition();
      $this->editions = array();
      foreach( $edition->last_editions() as $e )
      {
         $ssids[] = $e->story_id;
         $this->editions[] = $e;
      }
      $this->popular = array();
      if( count($this->editions) < FS_MAX_STORIES )
      {
         $i = count($this->editions);
         $story = new story();
         foreach( $story->popular_stories() as $s )
         {
            if($i < FS_MAX_STORIES AND !in_array($s->id2str(), $ssids) )
            {
               $this->popular[] = $s;
               $i++;
            }
         }
      }
   }
}

?>