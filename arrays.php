<?php
#Array - Variable that holds multiple values
/* 
        - Indexed
        - Associative
        - Multi-dimensional

*/


// Indexed

$people = array('Rares', 'Crisan', 'Lunca');
$cars = ['honda', 'Toyota', 'miself'];
$cars[3] = 'Cevrolet';
$cars[] = 'BMW';

// echo count($cars);
// print_r($cars);
// var_dump($cars);


// Associative arrays
$people = array( 'Rares' => 19, 'Jose' => 32, 'William' => 37);
$ids = [12020 => 'video1', 12021 => 'video nice'];

$people['Crisan'] = 20;
// echo $people['Crisan'];
// print_r($people['Crisan']);

// var_dump($people['Crisan']);

// Multi-dimensional
$things = array(
        array('Potato', 'Cucumber', 'Tomato'),
        array('Mazda', 'Toyota', 'Lamborghini')
);

// echo $things[0][0];

$year = array(
        'January' => array(
                'week1' => array(
                        'monday', 
                        'tuesday', 
                        'wensday', 
                        'thursday', 
                        'friday', 
                        'saturday', 
                        'sunday'
                ),
                'week2' => array(
                        'monday', 
                        'tuesday', 
                        'wensday', 
                        'thursday', 
                        'friday', 
                        'saturday', 
                        'sunday'
                        )        
                ),

        'February' => array(
                'week1' => array(
                        'monday', 
                        'tuesday', 
                        'wensday', 
                        'thursday', 
                        'friday', 
                        'saturday', 
                        'sunday'
                ),
                'week2' => array(
                        'monday', 
                        'tuesday', 
                        'wensday', 
                        'thursday', 
                        'friday', 
                        'saturday', 
                        'sunday'
                        )        
                        )
                );


// echo $year['January']['week1'][6];




?>