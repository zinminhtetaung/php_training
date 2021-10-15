<!DOCTYPE html>
     <html> 
     <head> 
  <title></title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <style>
      table {
          border: 1px solid black;
      }
  </style>
  </head>
  <body> 
   <table width="270px" cellspacing="0px" style="margin:0 auto;" cellpadding="0px">
      <?php
      for($row=1;$row<=8;$row++)
	  {
          echo "<tr>";
          for($col=1;$col<=8;$col++)
		  {
          $total=$row+$col;
          if($total%2==0)
		  {
          echo "<td height=30px width=30px bgcolor=#FFFFFF></td>";
          }
		  else
		  {
          echo "<td height=30px width=30px bgcolor=#000000></td>";
          }
          }
          echo "</tr>";
    }
          ?>
  </table>
  </body>
  </html>