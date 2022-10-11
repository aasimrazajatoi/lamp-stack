<!DOCTYPE html>  
     <head>  
      <title>Home Page Welcome to you</title>
     </head>   

     <body>  
      <h1>Welcome to php home page</h1>  
      <p><?php echo 'We are running PHP, version: ' . phpversion(); ?></p>  
      <?  
       $database ="mydb";  
       $user = "myuser";  
       $password = "";  
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
        $t = date("H");
        if ($t < "10") {
          echo "Have a good morning!";
        } elseif ($t < "20") {
          echo "Have a good afternoon!";
        } else {
          echo "Have a good night!";
        }
        ?>
          <h1>Thanks for visiting us</h1> 
    </body>
</html>





