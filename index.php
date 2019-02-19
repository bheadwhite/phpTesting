<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>phpTest</title>
    </head>
    <body>
        
        <?php 
            // echo "Hi There! "; //faster loaded
            // print 10+5;
        ?>
        <!-- <form method="GET" action="">
            <input name="person" type="text" >
            <button>SUBMIT</button>
        </form> -->
<!-- variables -->
        <?php 
            // $name = $_GET['person'];
            // echo $name." is a handsome fellow!";
        ?>
<!-- functions -->
        <?php 
            // echo "String Length of handsome is: ";
            // echo strlen("handsome")

        ?>
<!-- dataTypes -->
        <?php 
//String
//Integer
                // 20;
//Float
                // 20.5;
//Boolean
                // true = 1;
                // false = 0;
//Array
                // $names = array("Daniel", "Dennis", "Michael");
                // echo $names['0'];

            //= equals to == is the same value === is the same datatype as well.

//logical operators

            // $x = 10;
            // $y = 20;

                // if ($x == $y or 1 == 1) { //either can be true
                //     echo "True";
                // }
                // if ($x == $y || 1 == 1) {
                //     echo "True";
                // }
                // if ($x == $y xor 1 == 1) { //only one can be true
                //     echo "True";
                // }
                // if ($x == $y and 1 == 1) { //
                //     echo "True";
                // }
                // if ($x == $y && 1 == 1) { //and
                //     echo "True";
                // }

//if, else, else if

                // if ($x == 10) {
                //     echo "stuff";
                // } else if ($y == 10) {
                //     echo "else stuff";
                // } else {
                //     echo "wrongo";
                // }

//switch

                // switch ($x) {
                //     case 1:
                //         echo "the answer is 1";
                //     break;
                //     case 2:
                //         echo "the answer is 10";
                //     break;
                //     case 3:
                //         echo "the answer is 20";
                //     break;
                //     case 4:
                //         echo "the answer is 100";
                //     break;
                //     default:
                //         echo "There is no answer";
                // }

            

        ?>

<!-- calculator -->

                    <!-- <form>
                        <input type="text" name="num1" placeholder="Number 1">
                        <input type="text" name="num2" placeholder="Number 2">
                        <select name="operator">
                            <option>None</option>
                            <option>Add</option>
                            <option>Subtract</option>
                            <option>Multiply</option>
                            <option>Divide</option>
                        </select>
                        <br>
                        <button name="submit" value="submit" type="submit">Calculate</button>
                    </form>

                    <p>The answer is:</p> -->
        <?php 

//get method you can see the info in the url
//post method you cant see it but its there.

            // if (isset($_GET['submit'])) {
            //     $result1 = $_GET['num1'];
            //     $result2 = $_GET['num2'];
            //     $operator = $_GET['operator'];

            //     switch ($operator) {
            //         case "None":
            //             echo "You need to select a method!";
            //         break;
            //         case "Add":
            //             echo $result1 + $result2;
            //         break;
            //         case "Subtract":
            //             echo $result1 - $result2;
            //         break;
            //         case "Multiply":
            //             echo $result1 * $result2;
            //         break;
            //         case "Divide":
            //             echo $result1 / $result2;
            //         break;

            //     }
            // }


        ?>

        <?php
            // $dayofweek = date("w");

            // switch ($dayofweek) {
            //     case 1:
            //         echo "It is Monday!";
            //     break;
            //     case 2:
            //         echo "<p>It is Tuesday!</p>";
            //     break;
            //     case 3:
            //         echo "It is Wednesday!";
            //     break;
            //     case 4:
            //         echo "It is Thursday!";
            //     break;
            //     case 5:
            //         echo "It is Friday!";
            //     break;
            //     case 6:
            //         echo "It is Saturday!";
            //     break;
            //     case 7:
            //         echo "It is Sunday!";
            //     break;
            // }
//loops
            // $x = 10;
            // while ($x < 5) {
            //     echo "hi there<br>";
            //     $x++;
            // }

            // do {
            //     echo "hi there<br>";
            //     $x++;
            // }
            // while ($x < 5);
            //will execute the do part and then look at the while loop conditional
            
            // for ($x = 0; $x <= 10; $x++) {
            //     echo "hi<br>";
            // }

            //foreach
            // $array = array("Daniel", "Jane", "Jacob", "John", "Maryanne");

            // foreach ($array as $loopdata) {
            //     echo "My name is " .$loopdata."<br>";
            // }
//arrays
            // $array = array("Daniel", "Jane", "Jacob", "John", "Maryanne");

            // echo $array[0];
//userDefined functions
            // $x = 100;
            // function newCalc($x) {
            //     $newnr = $x * 0.75;
            //     echo "Here is 75% of what you wrote: " .$newnr;
            // }
            // newCalc($x);
            // $a = 10;
            // echo "<br>";
            // newCalc($a);


        ?>
    </body>
</html>