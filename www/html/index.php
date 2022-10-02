<!DOCTYPE html>  
     <head>  
      <title>Welcome to php page</title>
     </head>   

     <body>  
      <h1>Welcome to php page</h1>  
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
          echo "<p>It is looking pretty Goood \"{$database}\".</p>";
        } else {
          echo "<p>Database \"{$database}\" has the following tables:</p>";
          echo "<ul>";
            foreach ($tables as $table) {
              echo "<li>{$table}</li>";
            }
          echo "</ul>";
        }
        ?>
    </body>
</html>





