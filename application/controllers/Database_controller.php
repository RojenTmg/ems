<?php
class Database_controller extends CI_Controller {
    public function sql()
    {
      // $goto = site_url();
      // $goto .= 'database_creation/database.php';
      require_once(APPPATH.'database_creation/database.php');
      require_once(APPPATH.'database_creation/hashpw.php');
    }
   }