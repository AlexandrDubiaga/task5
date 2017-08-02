<html>
     <head>
          <title>
             task5
          </title>
     </head>
     <body>
          <h1>Mysql</h1><br>
          
    <?php
          foreach($mysqlData as $val)
          {
               foreach($val as $key => $value)
               {
                    echo $key." ".$value."<br>"
               }
          }
     ?>
     </body>
</html>
