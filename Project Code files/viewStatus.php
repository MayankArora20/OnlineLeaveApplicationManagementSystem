<?php
$con=mysqli_connect("localhost","root","");
 mysqli_select_db($con,'web_proj');

?>
<!DOCTYPE html>
<html lang="en-US">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Responsive Website with Sticky footer</title>
      <link rel="stylesheet" href="css/components.css">
      <link rel="stylesheet" href="css/icons.css">
      <link rel="stylesheet" href="css/responsee.css">
      <!-- CUSTOM STYLE -->
      <link rel="stylesheet" href="css/viewStatus.css"/>
      <link rel="stylesheet" href="css/template-style.css">
      <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
      <script type="text/javascript" src="js/jquery-ui.min.js"></script>    
   </head>
   <body class="size-1140">
      <div id="all-content" class="with-sticky-footer">
         <!-- TOP NAV WITH LOGO -->
         <header>
            <nav>
               <div class="line" >
                  <div class="s-12 l-2" >
                     <img class="s-5 l-12 center" src="img/logonew41.png" >
                    
                  </div>
                  <div class="top-nav s-12 l-10 right">
                     <p class="nav-text">Menu</p>
                     <ul class="right">
                        <li><a href="http://www.mnnit.ac.in/">Home</a></li>
                        <li>
                           <a>Department</a>
                           <ul>
                              <li><a href="http://www.mnnit.ac.in/index.php/department/engineering/csed">CSED</a></li>
                           </ul>
                        </li>
                        <li><a href="index.html">Write Leave Application</a></li>
                        <li><a href="login.html">Login</a></li>
                        </ul>
                  </div>
               </div>
            </nav>
         </header>
         <section>
            <!--our code-->

<center><h1>View Application Status<h1></center>
            <div >
  <center>
  <form  method="post" autocomplete="off">
    <input type="text" name="valueToSearch" id="search" placeholder="Application Id">
    <input type="submit" name="search" value="Search" class="button" >
  </form>     
  </center>  
</div>
   <?php

    $tnam=[];
    $stat=[];
    $i=-1;
    if(isset($_POST['search']))
   {
    $appId = $_POST['valueToSearch'];
    $queryc="select tid,status from link where appId ='".$appId."'";
    $res=mysqli_query($con,$queryc);
    while($row=mysqli_fetch_array($res))
    {
      $i=$i+1;
      $queryr="select name from admin where id='".$row['tid']."'";
      $ans=mysqli_query($con,$queryr);
      $r=mysqli_fetch_array($ans);
      $stat[$i]=$row['status'];
      $tnam[$i]=$r['name'];
      
    }
    echo "<center><div id='tabl'>";
    echo "<table>";
   if($i>=0)
    {
      echo "<tr>";
      for($j=0;$j<=$i;$j++)
       echo "<th>".$tnam[$j]."</th>";
     echo"</tr>";
      for($j=0;$j<=$i;$j++)
       echo "<td>".$stat[$j]."</td>";
      echo "</tr>";
   }
    echo "</table>";
    echo "</div></center>";
    $appId="";
    $tnam=null;
    $stat=null;
  }
   ?>
   









            <!--our code-->
    </section>
         <!-- FOOTER -->
         <div id="footer-content" class="sticky-footer">
            <footer>
               <div class="line">
                  <div class="s-12 l-6">
                     <b><p>Online Leave Management System</p></b> 
                  </div>
                  <div class="s-12 l-6" align="right">
                    <b>Project Team</b><br>
                          Mayank Arora:2017ca45<br>
                          Mohd Azam:2017ca64<br>
                         Mubashshir Ahmad:2017ca25<br>
                         Bittu Choudhary:2017ca52<br>
                         Deepak Dubey:2017ca58<br>
                    </div>
                  
               </div>
            </footer>
         </div>
      </div>
      <script type="text/javascript" src="js/responsee.js"></script>
   </body>
</html>