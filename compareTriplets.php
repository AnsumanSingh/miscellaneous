<!-- compareTriplets.php-->

<?php

function compareTriplets($a, $b) {
    // Write your code here
    
    
    $i=0;
    $aResult=0;
    $bResult=0;
    //print_r($b);die;
    foreach($a as $aa){
        
        if($aa > $b[$i]){
            
            $aResult=$aResult+1;
        }
        
        if($aa < $b[$i]){
            
            $bResult=$bResult+1;
        }
        $i=$i+1;
        
    }
    
    return array($aResult,$bResult);

}