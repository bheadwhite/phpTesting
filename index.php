<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>phpTest</title>
    </head>
    <body>
        
        <?php 
            echo "Hi There! "; //faster loaded
            print 10+5;
        ?>
        <form method="GET" action="">
            <input name="person" type="text" >
            <button>SUBMIT</button>
        </form>
        <!-- variables -->
        <?php 
            $name = $_GET['person'];
            echo $name." is a handsome fellow!";
        ?>
        <!-- functions -->
        <?php 
            echo "String Length of handsome is: ";
            echo strlen("handsome")

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
            $names = array("Daniel", "Dennis", "Michael");
            echo $names['0'];

            //= equals to == is the same value === is the same datatype as well.

        ?>

        
    </body>
</html>