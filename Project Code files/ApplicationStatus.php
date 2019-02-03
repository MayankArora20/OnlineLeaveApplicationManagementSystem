<?php
session_start();
$_SESSION['tid'];
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
      <link rel="stylesheet" href="css/login.css"/>
      <link rel="stylesheet" href="eg.css"/>
      <link rel="stylesheet" href="css/template-style.css">
      <link rel="stylesheet" type="text/css" href="css/ApplicationStatus.css">
<script type="text/javascript">
   function loada()
   {
      document.getElementById("loads").innerHTML='<object type="text/html" data="ApplicationApproved.php" style="width:100%; height:100%"></object>';
      document.getElementById("a").style.backgroundColor="silver";
      document.getElementById("b").style.backgroundColor="blue";
      document.getElementById("c").style.backgroundColor="blue";
   }
   function loadk()
   {
      document.getElementById("loads").innerHTML='<object type="text/html" data="ApplicationPending.php" style="width:100%; height:100%"></object>';
   	  document.getElementById("a").style.backgroundColor="blue";
      document.getElementById("b").style.backgroundColor="silver";
      document.getElementById("c").style.backgroundColor="blue";
   }

   function load()
   {
      document.getElementById("loads").innerHTML='<object type="text/html" data="ApplicationDecline.php" style="width:100%; height:100%"></object>';
      document.getElementById("a").style.backgroundColor="blue";
      document.getElementById("b").style.backgroundColor="blue";
      document.getElementById("c").style.backgroundColor="silver";
   }
</script>
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
                        <li><a href="login.html">Logout</a></li>
                        </ul>
                  </div>
               </div>
            </nav>
         </header>
         <section>
            <!--our code-->


        
<div class="tabContainer">
  <div class="buttonContainer">
    <button onclick="loada()" id="a"> Approved</button>
    <button onclick="loadk()" id="b"> Pending</button>
    <button onclick="load()" id="c"> Decline</button>
  </div>

 <div id="loads" >
   <div class="tabPanel">Approved: Content</div>
   <div class="tabPanel">Pending: Content</div>
   <div class="tabPanel">Decline: Content</div> 
 </div>
</div>
</center>








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