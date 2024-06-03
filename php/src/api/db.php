<?php 

            require("config.php");

            try {
                $pdo = new PDO("mysql:host=$servername;dbname$dbname", $username, $password);
                // set the PDO error mode to exception
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 

                $use_db = "USE $dbname";
                $pdo->exec($use_db);

                echo "connect to database successful"; 

            } catch(PDOException $e){
                echo "Faild to connect to database ".$e->getMessage();
            }

            $sql = "select * from users order by id";
            $users = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);

                // echo "<pre>";
                // print_r($users);
                // echo "</pre>";

            echo "<ul>";
            foreach($users as $user ){
                echo "<li>";
                echo $user["id"]." ". $user["name"]." ".$user["email"];
                echo "</li>";
            }
            echo "</ul>";

?>