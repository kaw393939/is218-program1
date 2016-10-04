<?php
 //look above is how you start a php progam and at the end you have to close your php tag
//This is how you print text in php  
  echo 'hello world';
  //This is how you store a value in a variable 
  $myvar = 'Some Text I want to store in a variable';

  //this is an example of the difference between single quotes and double quotes
  echo '<br>';
  echo '$myvar';
  echo '<br>';
  echo "$myvar";
  echo '<br>';
  //this is how you concatenate characters in PHP
  $url = 'http://www.google.com';
  $linkName = 'Google';
  echo '<a href="' . $url . '">' . $linkName . '</a>';
  //when you do this, god kills kittens
  echo "<a href=\"$url\">$linkName</a>";
  //this is an example of php arrays

  $myarray = array();
  //this is how you add values to an array
  $myarray[] = 'some value 1';
  $myarray[] = 'some value 2';
  $myarray[] = 'some value 3';

  //print_r($myarray);
  //this is an example of an associative array and a nested array
  $myAssoc['value1'] = array ('LinkName' => 'NJIT', 'URL' => 'www.njit.edu');
  $myAssoc['value2'] = array ('LinkName'=> 'Facebook', 'URL' => 'www.facebook.com');
  $myAssoc['value3'] = array('LinkName' => 'Google', 'URL' => 'www.google.com');
  print_r($myAssoc);
  // this is how you print_r / access a array by naming the key you want to access
  //print_r($myAssoc);

  foreach($myAssoc as $link ) {

 //    print_r($link);

    echo '<a href="http://' . $link['URL'] . '">' . $link['LinkName'] . '</a> <br>';
  }

  foreach($myAssoc as $link) {
    foreach($link as $key => $value) {
      echo $key . ' ' . $value . "\n";

    }
  }



  //This is how you define a class in php 
  class myclass {
    public $myPublic;
    private $myPrivate;
    protected $myProtected;

    public function __construct() {
     //$this is the internal reference to the object witin a class, the arrow points
     //The arrow points to the property or method being accessed within the object
      $this->myPublic = 1;
      $this->myPrivate = 2;
      $this->myProtected = 3;
    //this is how you call a method inside an object and pass a value;
      $this->sayHello('Keith');
      $this->noPass();
      $this->sayHello();
    }
    public function noPass() {} 
    public function sayHello($name) {
   
      echo 'Hello ' . $name . '<br>';   
    }
    public function sayGoodBye($name) {

      echo 'Goodbye ' . $name . '<br';
    }

    public function __destruct() {

      $this->sayGoodBye('Keith');

    }


  }
  //This is how you instantiate a new class object
  $obj = new myclass;
  $obj->sayHello('Theresa');
  $obj->myPublic = 'swamp gas';
  print_r($obj);
  echo 'done';
























?>
