<?php
/*
Problem Solver : Yogesh Shrimali
Objective : Find a position
*/

/**
 * Find a position
 * @param  array  $direction, integer $size, integer $row, integer $column,  
 * @return position
*/
function finalPos($direction, $size, $row, $column)
{

    // Traverse the direction array
    $boundary = $size-1;
    foreach($direction AS $key => $value)
    {
        if($value == 'UP'){
            $row--;
            //Remain same position if move to outside of boundary
            ($row < 0) ? $row = 0 : $row = $row;
        }else if ($value == 'DOWN'){
            $row++;
            //Remain same position if move to outside of boundary
            ($row >= $boundary) ? $row = $boundary : $row = $row;
        }else if ($value == 'LEFT'){
            $column--;
            //Remain same position if move to outside of boundary
            ($column < 0) ? $column = 0 : $column = $column;
        }else if ($value == 'RIGHT'){
            $column++;
            //Remain same position if move to outside of boundary
            ($column >= $boundary) ? $column = $boundary : $column = $column;
        }
    }

    //Calculate final position
    $final_position = ($row*$size)+$column;

    return $final_position;
}

//Accept Inputs
$direction = array('RIGHT', 'UP','DOWN','LEFT','DOWN','DOWN');
$row = 0;
$column = 0;
$size = 4;

//Return Final Position
echo "Final position of ball is <b>". finalPos($direction, $size, $row, $column) . "</b>";
