<html>
     <head>
          <title>
             task5
          </title>
     </head>
     <body>
          <h1>Mysql</h1><br>
          
    <?php
       foreach($mysqlData as $val => $item)
       {
          echo $item['key']."<br>";
       }
     ?>
     </body>
</html>
