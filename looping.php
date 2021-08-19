<html>
<html lang="en">
<head>
    <title>Looping</title>
</head>
<body>
    <form action="looping.php" method="post">
        <p>Angka</p>
        <input type="number" name="number">
        <input type="submit">
    </form>
</body>
</html>
<?php
    if(isset($_POST['number'])){
        $num = $_POST['number'];
        for ($i=0; $i < $num; $i++) { 
            for ($j=0; $j < $i; $j++) { 
                echo "*";
            }
            echo "<br>";
        }

    }
?>