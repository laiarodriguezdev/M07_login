<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LogUser php</title>
</head>
<body>
    <?php
        
        include "dbConf.php";

        // VALORS PER EL FORMULARI LOGIN
        $password = $_POST["password"];
        $email = $_POST["email"];

        $connect =  mysqli_connect(DB_HOST,DB_USER,DB_PSW,DB_NAME);

            //try catch i finally
            try {
                $query = "SELECT * FROM userlaia WHERE email = '$email' AND password = '$password'";
                $result = mysqli_query($connect, $query);
            
                //SI HI HA UN USUARI COM A MINIM REGISTRAT, ENTRA.
                if ($result && mysqli_num_rows($result) > 0) {
                    $row = mysqli_fetch_assoc($result);

                    var_dump($row);
                    $rol = $row['rol'];
                    $username = $row['username'];
                    $surname = $row['surname'];

                    //VARIABLES DE SESSIO    
                    $_SESSION["LoggedIn"] = true;
                    $_SESSION["user_id"] = $row["user_id"]; 
                    $_SESSION["username"] = $username;
                    $_SESSION["rol"] = $rol;

                    //ANEM A INDEX.PHP
                    header('Location: index.php');
                } else {
                    include "logUser.html";
                    echo "Les dades d'inici de sessió són incorrectes.";
                }
            } 
            catch (Exception $e) {
                include "logUser.html";
                echo "No m'he pogut conectar a la base de dades. " . $e->getMessage();
            } 
            finally {
                mysqli_close($connect);
            }    
    ?>
</body>
</html>