<?php 

$jsonbody = file_get_contents('php://input');

$jsonObject =  json_decode($jsonbody);

function array_rangesum(array $numArr, $jsonObject): int {

    $firstInt = $jsonObject->firstInt;
    $lastInt = $jsonObject->lastInt;

    if($firstInt>0 && $lastInt>0){
        if($firstInt<$lastInt){
            $firtSearch = array_search($firstInt, $numArr);
            $lastSearch = array_search($lastInt, $numArr);
            if ($lastSearch = array_search($lastInt, $numArr)>0){
                $lastSearch = array_search($lastInt, $numArr);
                }
            else{
                $lastSearch = array_search($numArr[count($numArr)-1], $numArr);
                }     
            $length = $lastSearch - $firtSearch + 1;
            $result = array_sum(array_slice($numArr, $firtSearch, $length));
            return $result;
        }
        else{
            return 0;
        }
    }
    else{
        return -1;
    }
}

$numArr = [ 10, 20, 30, 40, 50, 60, 70, 80, 90, 100 ];

$result = array_rangesum($numArr,$jsonObject);

echo $result;

?>