<?php
/***************************************
Written by: Gaurav Sachdeva (Arav)
Github: http://github.com/iamarav
Codepen: http://codepen.io/gauravsachdeva

***************************************/

    if(!isset($_POST['btn'])){
        header('Location: error.php?e=1'); 
        exit;
        //if no button was clicked then go to error page
    }

    $totalMarks = 0; // Do not edit, initialisation of variable
    $totalQues = 5; //Enter total number of questions here
    
    //first value can be anything as array initialise with 0
    $ans = array('undef',
                 'A',
                'B',
                'A',
                'A',
                'D');

    for ($i=1; $i<= $totalQues; $i++){
    if(isset($_POST['answer-'.$i])){
        if($_POST['answer-'.$i] == $ans[$i] ){
            $totalMarks++;
        }    
    }
    }
    
    
?>
<!DOCTYPE html>
<html>
    <head>
    <title>Result for Quiz</title>
    
        <!--    meta-->
    <meta name="author" content="Gaurav Sachdeva">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <meta name="keywords" content="Gaurav, Sachdeva, Free, Quiz, Open-Source, PHP">
    
<!--    styles-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat|PT+Serif" rel="stylesheet">
    <link rel="stylesheet" href="style.css" >
        
    </head>
    
    <body>
        <header><h1>Quiz</h1></header>
        <hr>
            <div id="result">
        <p>Result:
        <strong style="font-size:1.5em;" ><?= $totalMarks; ?></strong>/<?= $totalQues; ?></p>
                </div>
    
    </body>
    
    

</html>