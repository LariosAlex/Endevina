<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Endevina</title>
</head>
<body>
    <h1>ENDEVINA EL NUMERO</h1>

    <?php
        $nMax = 100;
        $nMin = 1;
        session_start(); 
        if(!isset($_SESSION['nOcult'])){
            $_SESSION['nOcult'] = rand($nMin, $nMax);
        }
        echo "NUMERO A ENDEVINAR: ".$_SESSION['nOcult']."<br><br>";
        if(!isset($_GET['nEndevina'])){
            ?>
                <form>
                    <label>Escriu un numero (1 - 100): </label>
                    <input type="number" name="nEndevina">
                    <input type="submit">
                </form>
            <?php
        }else{
            if($_SESSION['nOcult'] > $_GET['nEndevina']){
                ?>
                    <form>
                        <label>Escriu un numero (1 - 100): </label>
                        <input type="number" name="nEndevina">
                        <input type="submit">
                    </form>
                <?php
                echo "<p style='color:red'>El numero a endevinar es major</p>";
            }else if($_SESSION['nOcult'] < $_GET['nEndevina']){
                ?>
                    <form>
                        <label>Escriu un numero (1 - 100): </label>
                        <input type="number" name="nEndevina">
                        <input type="submit">
                    </form>
                <?php
                echo "<p style='color:red'>El numero a endevinar es menor</p>";
            }else{
                echo "<p style='color:green'>Enhorabona! Has endivinat el numero</p>";
                echo "<a href='endevina.php'>Tornar a jugar</a>";
                unset($_SESSION['nOcult']);
            }
        }
    ?>
</body>
</html>