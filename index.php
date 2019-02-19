<?php


include 'header.php';

?>

<body>

<form action="includes/signup.inc.php" method="POST">
    <input type="text" name="first" placeholder="FirstName">
    <br>
    <input type="text" name="last" placeholder="LastName">
    <br>
    <input type="text" name="email" placeholder="E-mail">
    <br>    
    <input type="text" name="uid" placeholder="Username">
    <br>
    <input type="password" name="pwd" placeholder="Password">
    <br>
    <button type="submit" name="submit">Sign up</button>
</form>

<?php 

    // $sql = "SELECT * FROM users;";
    // $result = mysqli_query($conn, $sql);
    // $resultCheck = mysqli_num_rows($result);

    // if ($resultCheck > 0) {
    //     while ($row = mysqli_fetch_assoc($result)) {
    //         echo $row['user_uid'] . "<br>";
    //     }
    // }

?>
</body>
</html>