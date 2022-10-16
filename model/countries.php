<?php
/**
 *Get data from json file
 */
class Countries
{
  public function select()
  {
    $coun_json = file_get_contents('../data/countries.json'); //Read json file
    $countries = json_decode($coun_json,true); //Convert json to php object

    for($i = 0; $i < count($countries); $i++){//Create new array with specific elements
            $count[$i]['name']    = $countries[$i]['name'];
            $count[$i]['capital'] = isset($countries[$i]['capital']) ? $countries[$i]['capital'] : 'empty';
            $count[$i]['region']  = $countries[$i]['region'];
            $count[$i]['flag']    = $countries[$i]['flag'];
    }

    return $count;
  }
}
?>
