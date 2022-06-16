<!-- diagonalDifference.php

Given a square matrix, calculate the absolute difference between the sums of its diagonals.

For example, the square matrix

is shown below:

1 2 3
4 5 6
9 8 9  

The left-to-right diagonal =
. The right to left diagonal = . Their absolute difference is

.

Function description

Complete the

function in the editor below.

diagonalDifference takes the following parameter:

    int arr[n][m]: an array of integers

Return

    int: the absolute diagonal difference

Input Format

The first line contains a single integer,
, the number of rows and columns in the square matrix .
Each of the next lines describes a row, , and consists of space-separated integers

.

Constraints

Output Format

Return the absolute difference between the sums of the matrix's two diagonals as a single integer. -->
<?php

function diagonalDifference($arr) {

    $n = count($arr[0]);
    $principal=0;
    $secondary=0;
    
    for($i=0; $i < $n; $i++){
        
        for($j=0; $j < $n; $j++){
            
            if($i==$j){
                
                $principal = $principal + $arr[$i][$j];
                
            }
            
             if(($i+$j) == $n-1){
                
                $secondary = $secondary + $arr[$i][$j];
                
            }
            
        }
        
       
        
    }
        return abs($principal-$secondary);
     //echo '$principal==>'.$principal.'$secondary==>'.$secondary;
}



