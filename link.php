<?php

  class html {
    protected $html;
  
    public function getHTML() {

      return $this->html;

    }
  }

  class HTMLLink extends html {
  
    public function getLink($url, $linkName) {

      $this->html = '<a href="' . $url . '">' . $linkName . '</a>';
      
      return $this->html;
    }
  }


  $obj = new HTMLLink;

  echo $obj->getLink('www.google.com', 'Google');
  
  print_r($obj);
  


?>
