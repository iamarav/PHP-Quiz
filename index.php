<?php
/***************************************
Written by: Gaurav Sachdeva (Arav)
Github: http://github.com/iamarav
Codepen: http://codepen.io/gauravsachdeva

***************************************/

    $sitename = 'Quiz';
    $sitedescription = 'Free Quiz';
    $author = 'Gaurav Sachdeva';
    
    $note = 'If you dont click any answer, the corresponding marks for that question will be marked <strong>ZERO</strong> and further changes cannot be undone.';

?>
<!DOCTYPE html>
<html>
<head>
<title><?= $sitename; ?></title> 
<!--    meta-->
    <meta name="description" content="<?= $sitedescription; ?>" >
    <meta name="author" content="Gaurav Sachdeva">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <meta name="keywords" content="Gaurav, Sachdeva, Free, Quiz, Open-Source, PHP">
    
<!--    styles-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat|PT+Serif" rel="stylesheet">
    <link rel="stylesheet" href="style.css" >
</head>
<body>
    <header>
    <h1><?= $sitename; ?></h1>
    </header>
    
    <hr>
    
    <div id="container">
        <p><strong>Note: </strong><?= $note; ?></p>
        <form action="result.php" method="POST">
        <ol type="1" >
        <div id="question-container">
            <li><h2 class="question" id="1" >What is the most well know fast food place?</h2></li>
            <input type="radio" name="answer-1" value="A" >McDonald's<br>
            <input type="radio" name="answer-1" value="B" >Van Heusen<br>
            <input type="radio" name="answer-1" value="C" >Nike<br>
            <input type="radio" name="answer-1" value="D" >Samsung<br>
        </div>
    
        <div id="question-container">
            <li><h2 class="question" id="2" >Golf player Vijay Singh belongs to which country?</h2></li>
            <input type="radio" name="answer-2" value="A" >USA<br>
            <input type="radio" name="answer-2" value="B" >Fiji<br>
            <input type="radio" name="answer-2" value="C" >India<br>
            <input type="radio" name="answer-2" value="D" >UK<br>
        </div>
    
        <div id="question-container">
            <li><h2 class="question" id="3" >Friction can be reduced by changing from</h2></li>
            <input type="radio" name="answer-3" value="A" >sliding to rolling<br>
            <input type="radio" name="answer-3" value="B" >rolling to sliding<br>
            <input type="radio" name="answer-3" value="C" >potential energy to kinetic energy<br>
            <input type="radio" name="answer-3" value="D" >dynamic to static<br>
        </div>
    
        <div id="question-container">
            <li><h2 class="question" id="4" >Film and TV institute of India is located at</h2></li>
            <input type="radio" name="answer-4" value="A" >Pune (Maharashtra)<br>
            <input type="radio" name="answer-4" value="B" >Rajkot (Gujarat)<br>
            <input type="radio" name="answer-4" value="C" >Pimpri (Maharashtra)<br>
            <input type="radio" name="answer-4" value="D" >Perambur (Tamilnadu)<br>
        </div>
    
        <div id="question-container">
            <li><h2 class="question" id="5" >The ozone layer restricts</h2></li>
            <input type="radio" name="answer-5" value="A" >Visible light<br>
            <input type="radio" name="answer-5" value="B" >Infrared radiation<br>
            <input type="radio" name="answer-5" value="C" >X-rays and gamma rays<br>
            <input type="radio" name="answer-5" value="D" >Ultraviolet radiation<br>
        </div>
        
        <input name="btn" value="Submit" type="submit">
            </ol>
        </form>
        
    </div>
    
</body>
</html>