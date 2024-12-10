<?php
$array=[];//empty array that we will fill with random numbers.
$varriable=-1;//holds the result we want to find.
$temp=null;//Our temporary variable.
$control=0;//If the correct result comes back, break the loop.
$count=0;//It keeps track of how many repetitions we achieved to reach the correct result.
while(true)
{
    for($i=0;$i<5;$i++)
    {
        $temp=rand(1,10);
        $array[$i]=$temp;//assigns random numbers to temporary variable.
        if($i!=0&&$array[$i]!==$varriable+2)//It checks whether the array holds the values ​​we want.
        {
        unset($array);
        $control=0;//If the array does not hold the value we want, it resets the control variable.
        goto a;//We skip using goto to avoid incrementing the control variable
        }
        $control++;//increases the control variable
    }   
        a:  
        if($control==5)//The control finds out whether the variable reaches the desired number.
        {
            break;//We break the while loop
        }          
         $count++;//Increasing the count variable
}
     echo $count;//It shows how many times we found it