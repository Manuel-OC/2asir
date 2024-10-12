<?php
  Visualizar ();
  function Visualizar (){
?>

  <html>
  <body>
    <table border=1>
<?php
      $num=10;
      $conta=0;
      
      for ($i=1; $i<=$num; $i++){
        if ($i % 2==0) {
?>      
          <tr bgcolor="#aaaaaa"> 
<?php
        } else {
?>  
          <tr>  
<?php
        }
?>
<?php
        for ($k=1; $k<=$num; $k++){
          $conta++;
?>
          <td>
<?php         
          echo $conta;
?>
          </td>
<?php
        }
?>
        </td>
<?php
      }  
?> 
    </table>
  </body>
  </html>
<?php
  }
?>