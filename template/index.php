<html>
     <head>
          <title>
             task5
          </title>
     </head>
     <body>
          <h1>Mysql</h1><br>
          
    <?php
          foreach($mysqlData as $key => $val)
          {
                 foreach($val as $key => $item)
                  {
                    echo $key." ".$item."<br>";
                   }
               
          }
   ?>
     </body>
</html>
