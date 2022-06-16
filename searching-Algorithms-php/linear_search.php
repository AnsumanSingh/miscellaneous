<?php

/*
Problem: Given an array arr[] of n elements, write a function to search a given element x in arr[].


Input : arr[] = {10, 20, 80, 30, 60, 50, 
                     110, 100, 130, 170}
          x = 110;

 */
// error_reporting(E_ALL);
// ini_set('display_errors', '1');


  function search($arr,$element){

  		foreach ($arr as $key => $value) {
  			

  			if($element == $value){

  				return $key;
  			}

  		}

  }



  $list  = array(10,20,80,30,60,50,110,100,130,170);
  $element = 100;
  $ans = search($list,$element);


  echo "found index =>>>".$ans;

