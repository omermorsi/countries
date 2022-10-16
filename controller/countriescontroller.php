<?php
header("Content-Type:application/json");
require_once '../model/countries.php';
/**
 *Search and filter results
 */
class Countriescontroller extends Countries
{

  public function index()
  {

    $filter = json_decode(file_get_contents("php://input"), true)['params']['cap'];//Get the wanted search's param
    $all_couns = $this->select();
    $filtered_couns = array();

    //Find match's results and return it as an array
    for($i = 0; $i < count($all_couns); $i++){
        if(strlen($filter) > 0 && stripos($all_couns[$i]['capital'], $filter) !== false ){
            $filtered_couns[$i] = $all_couns[$i];
          }
    }

    return json_encode($filtered_couns);//Convert data to json file
  }
}

$c = new Countriescontroller();
echo $c->index();

?>
