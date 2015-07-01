<?php
 
/* set out document type to text/javascript instead of text/html */
/* header("Content-type: text/javascript"); */
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
 
/* our multidimentional php array to pass back to javascript via ajax */
 $arr = array(
        'hasil' => array(
        array(  
                first_name => "Amhers",
                last_name => "Brown",
                age => "49",
                email => "amhers.br@example.com"
        ),
        array(
                first_name => "Bob",
                last_name => "Darian",
                age => "48",
                email => "bob_darian@example.com"
        ),
        array(  
                first_name => "Carl",
                last_name => "Jungns",
                age => "47",
                email => "carl.jugns@example.com"
        ),
        array(
                first_name => "Dirk",
                last_name => "Brian",
                age => "46",
                email => "dirk.brian@example.com"
        ),
        array(
                first_name => "Enhart",
                last_name => "Redd",
                age => "45",
                email => "enhart.redd@example.com"
        ),
    )
);
 
 
/* encode the array as json. this will output:
{"hasil":[{"first_name":"Amhers","last_name":"Brown","age":"49","email":"amhers.br@example.com"},
{"first_name":"Bob","last_name":"Darian","age":"48","email":"bob_darian@example.com"},
{"first_name":"Carl","last_name":"Jungns","age":"47","email":"carl.jugns@example.com"},
{"first_name":"Dirk","last_name":"Brian","age":"46","email":"dirk.brian@example.com"},
{"first_name":"Enhart","last_name":"Redd","age":"45","email":"enhart.redd@example.com"}]}
*/
 echo json_encode($arr);  
 
?>
