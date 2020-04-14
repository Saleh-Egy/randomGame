<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
    
    <title>Document</title>
</head>
<body>
<div class=" container">
<div class="raw mt-4">
    <form method="POST" class="ml-auto">
    <h4> Please Select a Number</h4>
        <button type="submit" name="numPad" value='1' type="button" class="btn btn-primary">1</button>
        <button type="submit" name="numPad" value='2'type="button" class="btn btn-secondary">2</button>
        <button type="submit" name="numPad" value='3'type="button" class="btn btn-success">3</button>
        <button type="submit" name="numPad" value='4'type="button" class="btn btn-danger">4</button>
        <button type="submit" name="numPad" value='5'type="button" class="btn btn-warning">5</button>
        <button type="submit" name="numPad" value='6'type="button" class="btn btn-info">6</button>
        <br>
        <br>

        <button type="submit" class="btn btn-dark ml-5" name="randBtn">Play </button>
    </form>
</div>
</div>

    
    <?php 
        session_start();
        if(isset($_POST["numPad"])){
            $btnVal = $_POST["numPad"];
            $_SESSION['clickedNum'] = $btnVal;
            echo("<div class='col-2  ml-5 '> <h1>".$btnVal."</h1></div>");
        }
         if(isset($_POST["randBtn"])){
            $r = rand(1,6);
            $r2 = rand(1,6);
            $_SESSION['rNum'] = $r ;
            $_SESSION['rNum2'] = $r2 ;
            echo("<div class='col-2  ml-5'> <h1>".$r."   ".$r2."</h1></div>");
         }
            if(($_SESSION['rNum'] == $_SESSION['clickedNum'])&&($_SESSION['rNum2'] == $_SESSION['clickedNum'])){
                switch($_SESSION['rNum2']){
                    case '1':
                        echo("<div class='col-2 bg-success ml-5 text-white'> <h1>HABYAK</h1></div>");
                    break;
                        
                    case '2':
                        echo("<div class='col-2 bg-success ml-5 text-white'> <h1>DOBAR</h1></div>");
                    break;
                        
                    case '3':
                        echo("<div class='col-2 bg-success ml-5 text-white'> <h1>DOSA</h1></div>");
                    break;
                       
                    case '4':
                        echo("<div class='col-2 bg-success  ml-5 text-white'><h1>DORGE</h1></div>");
                    break;

                    case '5':
                         echo("<div class='col-2 bg-success ml-5 text-white'> <h1>DABASH</h1></div>");
                    break;
                    
                    case '6':
                         echo("<div class='col-2 bg-success ml-5 text-white'> <h1>DOSH</h1></div>");
                    break;

                }
            }
        


       
     
    ?>
   
   
           
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>