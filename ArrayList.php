<?php


class ArrayList
{
public $arrayList;

public function ArrayList($arr=''){
    if(is_array($arr)==true)
        $this->arrayList=$arr;
        else
            $this->arrayList=array();
}

public function add($obj){
    array_push($this->arrayList,$obj);
}

public function get($index){
    if ($this->isInterger($index)&& $index<$this->size()){
        return $this->arrayList[index];
    }else{
        die('Error in ArrayList.get');
    }
}
public function isInterger($toCheck){
    return preg_match('/^[0-9]+$/',$toCheck);
}
}