<?php


class test1
{
    private int $i = 4;
    private string $str = '54,23,2,$i,7,2,';
    private array $array = [];

    /*Creating array without sort */
    public function __construct(){

        $arr = explode(',',$this->str );
        for ($l = 0; $l < count($arr); $l++){
            if(gettype($arr[$l]) != 'integer' ){
                if (strripos($arr[$l],'$') !== false){
                    $this->array[] =  $this->{trim($arr[$l], " \$")};
                }
                if  (($int = (int)$arr[$l]) != 0) {
                    $this->array[] = $int;
                }
            }
        }

    }

    /* Sorting the array in ascending order */
    public function getSortArray(){
        for ($i = 0; $i < count($this->array); $i++){
            $test = $this->array[$i];
            for ($k = 0; $k < count($this->array); $k++){
                if($test < $this->array[$k]){
                    $this->array[$i] = $this->array[$k];
                    $this->array[$k] = $test;
                    $test = $this->array[$i];
                }
            }
        }
        return $this->array;
    }

    /*Get array without sort*/
    public function getArray(){
        return $this->array;
    }
    /*Get simple string*/
    public function getString(){
        return $this->str;
    }

}

