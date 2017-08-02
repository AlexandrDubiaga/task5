<html>
     <head>
          <title>
             task5
          </title>
     </head>
     <body>
          <h1>Mysql</h1><br>
          
    <?php
          echo $postgreAdd;
          echo $deletePostge;
          exho $mysqlAdd;
          echo $mysqlDel;
          echo $sessionSave;
          echo $sessionNotSave;
          echo $sessionDelete;
          echo $addCookie;
          echo $notAddCookie;
          echo $delCookie;
          echo $notDelCookie;
          foreach($mysqlData as $val)
          {
               echo $val['key'] ." ".$val['data']."<br>";
          }
     ?>
           <h1>Postgre</h1><br>
           <?php
          foreach($arr as $val)
          {
               echo $val['key'] ." ".$val['data']."<br>";
          }
     ?>
     </body>
</html>
