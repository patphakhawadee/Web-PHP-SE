

<!DOCTYPE html>
<!--
Template Name: Overerts
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->

<?php include "TopSession.php"; ?>

<html>
     <?php include "headhtml.php"; ?>

<body id="top">

    <!-- ################################################################################################ -->

        <?php 
                 if(empty($_SESSION["userID"]))
                    {
                        header("location: logout.php");
                    }   
                 else
                 {
                     $_SESSION["stdType"] = "TA";
                 }
        ?>
          <!-- ################################################################################################ -->

    
    <div class="wrapper row4 bgded overlay">
    
  <div class="wrapper row1">
      <?php include "header.php"; ?> 
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  
<!-- ################################################################################################ -->

  <section class="hoc container clear"> 
    <!-- ################################################################################################ -->
    <div class="center btmspace-80">
      <h2 class="heading nospace">Your Class</h2>
      <p class="nospace">รายชื่อวิชาที่คุณเป็นผู้ช่วยสอน</p>
    </div>
    <ul class="nospace group services">
        <!-- ################################################################################################ 
        
        
      <li class='one_half first'>
        <article><a href='#'><i class='fa fa-500px'></i></a>
          <h6 class='heading'>Hendrerit quis lorem</h6>
          <p>Iaculis sagittis sapien at porta justo rhoncus sed etiam et metus justo quisque&hellip;</p>
          <footer><a href='#'>Read More &raquo;</a></footer>
        </article>
      </li>
      <li class='one_half'>
        <article><a href='#'><i class='fa fa-adjust'></i></a>
          <h6 class='heading'>Consectetur adipiscing</h6>
          <p>Vulputate lorem eu laoreet orci blandit at nullam sed venenatis magna phasellus ac&hellip;</p>
          <footer><a href='#'>Read More &raquo;</a></footer>
        </article>
      </li>


<i class="fas fa-journal-whills"></i>
         <!-- ################################################################################################ -->
        
        <?php
        
       
        
         $id = $_SESSION["userID"];
            $t = "SELECT * FROM ta WHERE userID = '$id'";
                $rest = $pdo->query($t);
        $i=1;
        while ( $tow = $rest->fetch () ) 
        {
             $sjid = $tow["subjID"];    
            
            
            $r = "SELECT * FROM subject WHERE subjID = '$sjid'";
                $result = $pdo->query($r);
                
                    
                    
                        
//                    while (  ) 
//                    {
                        $row = $result->fetch ();
//                        if($i%2==1)
//                            echo "<li class='one_half first'>";
//                        else
//                            echo "<li class='one_half'>";
                        
                        echo "<li><article><a href='#'><i class='fa fa-book'></i>" . $row["subjID"] . "</a>
                        <h6 class='heading'>" . $row["subjNameEN"] . "</h6>
                        <p>" . $row["subjNameTH"] . "<br><br>" . $row["subjDes"] . "&hellip;</p>
                        <footer><a href='taeditclass.php?subjID=" . $row["subjID"] . "'>แก้ไขรายวิชา &raquo;</a><br><br>";
                        
                        
                        ?>
                        
                        
<!--                        <div class="w3-container">-->
<!--  <h2>W3.CSS Modal</h2>-->
<!--  <p>Use w3-container classes to create different sections in the modal (e.g. header & footer).</p>-->
            <button onclick="document.getElementById('id0<?php echo $i; ?>').style.display='block'" class="w3-button" style="color: #FF5723;padding-left: 0px;">Edit Student List &raquo</button>

            <div id="id0<?php echo $i; ?>" class="w3-modal w3-modal-content w3-animate-top">
                <div class="w3-modal-content">
                        <header class="w3-container w3-teal" style="background-color: #295158!important;"> 
                            <span onclick="document.getElementById('id0<?php echo $i; ?>').style.display='none'" class="w3-button w3-display-topright">&times;</span><br>
                            <h6>Please Choose Section</h6>
                        </header>
                        <div class="w3-container">
                            <p>Section</p>
        
          <?php 
          
                $r = "SELECT * FROM sectiondetail WHERE subjID = '$sjid'";
                $result = $pdo->query($r);
                $ii=1;
                    
                    
                        
                    while ( $row = $result->fetch () ) 
                    {
                        echo "<button class='w3-button w3-pale-blue'>" . $ii . "</button> ";
                        $ii++;
                    }
          ?>
        
                                <p></p>
                        </div>
<!--
      <footer class="w3-container w3-teal">
        <p>322321</p>
      </footer>
-->
                </div>
            </div>
<!--</div>-->
        
        
        
        
        
                        </footer>
                        </article>
                        </li>
                         
                         
                <?php
                        $i++;
                   // }
        }
        
         echo "<a href='tacreateclass.php'><img src='images/plus.png' style='width:70px;height:70px;'></a>";
        
        
                
                ?>
        
        
        <!-- ################################################################################################ 
         <li class="one_half first">
        <article><a href="#"><i class="fa fa-500px"></i></a>
          <h6 class="heading">Hendrerit quis lorem</h6>
          <p>Iaculis sagittis sapien at porta justo rhoncus sed etiam et metus justo quisque&hellip;</p>
          <footer><a href="#">Read More &raquo;</a></footer>
        </article>
      </li>
      <li class="one_half">
        <article><a href="#"><i class="fa fa-adjust"></i></a>
          <h6 class="heading">Consectetur adipiscing</h6>
          <p>Vulputate lorem eu laoreet orci blandit at nullam sed venenatis magna phasellus ac&hellip;</p>
          <footer><a href="#">Read More &raquo;</a></footer>
        </article>
      </li>
      <li class="one_half first">
        <article><a href="#"><i class="fa fa-empire"></i></a>
          <h6 class="heading">Maecenas scelerisque</h6>
          <p>Molestie odio a convallis purus donec lobortis eget ligula nec tincidunt vivamus ut&hellip;</p>
          <footer><a href="#">Read More &raquo;</a></footer>
        </article>
      </li>
      <li class="one_half">
        <article><a href="#"><i class="fa fa-medium"></i></a>
          <h6 class="heading">Lectus ligula interdum</h6>
          <p>Dolor in hac habitasse platea dictumst suspendisse porttitor justo nec mauris semper&hellip;</p>
          <footer><a href="#">Read More &raquo;</a></footer>
        </article>
      </li>
      <li class="one_half first">
        <article><a href="#"><i class="fa fa-scissors"></i></a>
          <h6 class="heading">Varius nullam iaculis</h6>
          <p>Libero luctus pellentesque vel pretium erat praesent id ante sed diam condimentum&hellip;</p>
          <footer><a href="#">Read More &raquo;</a></footer>
        </article>
      </li>
      <li class="one_half">
        <article><a href="#"><i class="fa fa-share-alt"></i></a>
          <h6 class="heading">Cursus ultrices integer</h6>
          <p>A eros laoreet convallis fusce sollicitudin elit non velit eleifend consequat phasellus&hellip;</p>
          <footer><a href="#">Read More &raquo;</a></footer>
        </article>
      </li>
        <!-- ################################################################################################ -->
    </ul>
    <!-- ################################################################################################ -->
    <div class="clear"></div>
  </section>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row4">
  <footer id="footer2" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div class="one_third first">
      
<!-- ################################################################################################ -->
    </div>
    <!-- ################################################################################################ -->
 </footer>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <!-- ################################################################################################ -->
      
    <p class="fl_left">จับฉ่าย by <a target="_blank" href="https://www.facebook.com/groups/2785298918177438/" title="FBgroup">RoomScrum</a></p>  
    <p class="fl_right">Copyright &copy; 2019 - All Rights Reserved</p>
    
    <!--  - <a href="#">Domain Name</a>################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
<script src="layout/scripts/jquery.flexslider-min.js"></script>
       
</body>
</html>