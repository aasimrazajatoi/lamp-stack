<!DOCTYPE html>  
     <head>  
      <title>Hello World!</title>
     </head>   

     <body>  
      <h1>Hello World!</h1>  
      <p><?php echo 'We are running PHP, version: ' . phpversion(); ?></p>  
      <?  
       $database ="mydb";  
       $user = "myuser";  
       $password = "Academy!2345";  
       $host = "172.18.0.2";
       $port = "3306";  

       $connection = new PDO("mysql:host={$host};", $user, $password);  
       $query = $connection->query("SELECT TABLE_NAME FROM information_schema.TABLES WHERE TABLE_TYPE='BASE TABLE'");  
       $tables = $query->fetchAll(PDO::FETCH_COLUMN);  

        if (empty($tables)) {
          echo "<p>There are no tables in database \"{$database}\".</p>";
        } else {
          echo "<p>Database \"{$database}\" has the following tables:</p>";
          echo "<ul>";
            foreach ($tables as $table) {
              echo "<li>{$table}</li>";
            }
          echo "</ul>";
        }
        $t = date("H");
        if ($t < "10") {
          echo "Have a good morning!";
        } elseif ($t < "20") {
          echo "Have a good day!";
        } else {
          echo "Have a good night!";
        }
        ?>
    </body>
</html>





