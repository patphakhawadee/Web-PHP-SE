<?php

    $id = $_SESSION["userID"];
    $r = $pdo->query("SELECT * FROM user WHERE userID = '$id'");
        $row = $r->fetch();

    if($_SESSION["stdType"] == "STD")
    {
        echo "<header id='header' class='hoc clear'> 
      <!-- ################################################################################################ -->
      <div  class='fl_left'>
      <!--  <h1><a href='index.html'>Student</a></h1> -->
         
         <nav id='mainav'>
        <ul class='clear'>
         
            <li><a class='drop' href='#'>Student</a>
            <ul>
                <li><a href='taindex.php'><h1>TA</h1></a></li>
             
            </ul>
          </li>
          
        </ul>
      </nav>
          
      </div>
      <nav id='mainav' class='fl_right'>
        <ul class='clear'>
          <li class='active'><a href='index.php'>Home</a></li>
        <li><a class='drop' href='#'>".$row["userName"]."</a>
            <ul>
              <li><a href='logout.php'>Logout</a></li>
 <!--               <li><a href='pages/full-width.html'>Full Width</a></li>
              <li><a href='pages/sidebar-left.html'>Sidebar Left</a></li>
              <li><a href='pages/sidebar-right.html'>Sidebar Right</a></li>
              <li><a href='pages/basic-grid.html'>Basic Grid</a></li> -->
            </ul>
          </li>
<!--          <li><a href='tacreateclass.php'>Create Class</a></li> -->
        </ul>
      </nav>
      <!-- ################################################################################################ -->
    </header>
        ";
    }

   else if($_SESSION["stdType"] == "TA")
    {
        echo "<header id='header' class='hoc clear'> 
      <!-- ################################################################################################ -->
      <div  class='fl_left'>
      <!--  <h1><a href='index.html'>Student</a></h1> -->
         
         <nav id='mainav'>
        <ul class='clear'>
         
            <li><a class='drop' href='#'>TA</a>
            <ul>
                <li><a href='index.php'><h1>Student</h1></a></li>
             
            </ul>
          </li>
          
        </ul>
      </nav>
          
      </div>
      <nav id='mainav' class='fl_right'>
        <ul class='clear'>
          <li class='active'><a href='taindex.php'>Home</a></li>
           <li><a href='tacreateclass.php'>Create Class</a></li> 
        <li><a class='drop' href='#'>".$row["userName"]."</a>
            <ul>
              <li><a href='logout.php'>Logout</a></li>
 <!--               <li><a href='pages/full-width.html'>Full Width</a></li>
              <li><a href='pages/sidebar-left.html'>Sidebar Left</a></li>
              <li><a href='pages/sidebar-right.html'>Sidebar Right</a></li>
              <li><a href='pages/basic-grid.html'>Basic Grid</a></li> -->
            </ul>
          </li>
         
        </ul>
      </nav>
      <!-- ################################################################################################ -->
    </header>
        ";
    }
    
?>
