<?php
/*
Plugin Name: Open Vote
Plugin URI: SECRET
Description: Simple voting system.
Version: 0.1
Author: Brian Tomlinson
Author URI: SECRET
License: GPLv2
*/

/*  Copyright 2012  Brian Tomlinson  (email : brian@SECRET)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

/**
 * Globals
 */
 
 $lbf_plugin_name = "LBFVote";
 
 /**
  * Includes
  */

  include('includes/scripts.php'); // Because we like to have JavaScript/JQuery readily available
  include('includes/data.php'); // Handles database connections and data manipulation
  include('includes/display.php'); // Manages display of information.
  
?>