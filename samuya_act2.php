<!DOCTYPE html>
<html>
<body>
    <center>
    <h3>MULTIPLICATION TABLE OF 3</h3>
    <?php 
        $number = 3;
        for($i = 1; $i <= 10; $i++){
            echo $number ."x". $i ."=". $number * $i."<br>";
        }
    ?>
    </center>
</body>
</html>