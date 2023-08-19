<?php

function insert($table,$data){

$fields = $value = array();
foreach (array_keys($data) as $key) {
  # code...
    if($key != "save"){
      $fields[] = "`$key`";
      $value[] = "'".implode(",", $data($key))."'";
    }
}
$fields = implode(",", $fields);
$value = implode(",", $values);
if(mysqli_query($dbhandle,"INSERT INTO $table($fields) VALUES($values)")){
  echo "done";

}else{
  print_r(array('mysqli error' => mysqli_error($dbhandle) ));
}
}