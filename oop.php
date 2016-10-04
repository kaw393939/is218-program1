<?php
   
  class html {
    public $html;

    public function __construct($html = 'DEFAULT') {
 
      echo $html;

    }

  }

  class htmlTable extends html {
    protected $table;

    public function getTableHTML() {
      
      $this->html = 'some table html';
    
    }
  }

  $obj = new htmlTable;

  $html = $obj->getTableHTML();

  echo $obj->html; 







?>












