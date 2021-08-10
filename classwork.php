<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>PHP Day 2</title>

    <!-- Bootstrap Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

</head>
<body>
    
    <!-- Exercise 1 -->
        <!-- <form  method ="POST">
        Name: <input type="text"   name="name" />
        Surname: <input type ="text"  name="surname" />
        <input  type="submit"  name="submit" />
     </form>
    

    <?php

        // if( isset($_POST['submit']))
        // {
        //     if (!$_POST["name"] && !$_POST["surname"]) echo "please insert your name and surname.<br />";
        //     elseif (!$_POST["name"]) echo "please insert your name<br />";
        //     elseif (!$_POST["surname"]) echo "please insert your surname.<br />";
             
        //     else echo "Welcome ". $_POST[ 'name']." ".$_POST[ 'surname']. "<br />" ; 
        // }
 
    ?> 
    -->
    <!--END  Exercise 1 -->
    <!-- Exercise 2 -->

    <!-- <div class="container">
        <div class="myStyle">
            
        <?php
    //     function division($par1, $par2){

    //         $result = round((int)$par1 / (int)$par2, 2);
    //         echo "<p>The result is $result</p>";
    //     }

    //  division("47","3");

        ?>

        </div>
    </div> -->

    <!--END Exercise 2 -->

    <!--Exercise 3 -->

    <?php

    // function calculation($par1, $par2, $par3){
    //     $par1 = (int)$par1;
    //     $par2 = (int)$par2;
    //     $par3 = (int)$par3;

    //     $sum = $par1 + $par2 + $par3;
    //     $average = $sum / 3;

    //     echo "Math: $par1 <br> Physics: $par2 <br> English: $par3 <br><br> Sum: $sum <br> Average: $average ";
    // }

    // $math = 3;
    // $phy = 4;
    // $eng = 5;

    // calculation($math, $phy, $eng);

    ?>
    <!--END Exercise 3 -->

    <!--Exercise 3 -->

    <?php

    function calculation($width, $height, $depth){
        $width = (int)$width;
        $height = (int)$height;
        $depth = (int)$depth;

        $area = $width * $height;
        $volume = $width * $height * $depth;

        echo "The area of the box is: $area <br> The volume of the box is: $volume";
    }

    $width = 7;
    $height = 2;
    $depth = 5;

    calculation($width, $height, $depth);

    ?>
    <!--END Exercise 3 -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>