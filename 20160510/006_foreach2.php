<?php
$a = ['A'=>1, 3=>2, 'Z'=>'Hello', 'O'=>21];
var_dump($a);
echo "<br /><br />";
foreach ( $a as $key => $value) {
  echo $key .",". $value ."<br />";
}
?>
