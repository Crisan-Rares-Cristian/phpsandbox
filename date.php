<?php
    // echo date('d'); // Day
    // echo date('m'); // month
    // echo date('Y'); // Year
    // echo date('l'); // day of the week

    // echo date('Y-m-d');

    // echo date('h'); // wrong Hour needs fix (look down)
    // echo date('i'); // minute
    // echo date('a'); // AM or PM


    // Set Time Zome
    date_default_timezone_set('EET');
    echo date('H:i A') . "<br>";

    $timestamp = mktime(23, 13, 55, 8, 25, 2001);

    echo $timestamp; /* Unix Timestamp is a long integer 
    containing the number of seconds between the Unix Epoch
    (January 1 1970 00:00:00 GMT) and the specified time */

    echo date('m.d.Y H.i.s', $timestamp);

    $timestamp2 = strtotime('tomorrow 13:45');

    echo date('m.d.Y H.i.s', $timestamp2);

?>