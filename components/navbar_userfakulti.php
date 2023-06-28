<header class="header">

   <section class="flex">
   <?php
   include("../php/db.php");
$id = $_SESSION["id"];

       $query = "select * from userfakulti_noti where USERFAKULTI_ID = '$id'  AND READ_NOTI='F'";
       $result = mysqli_query($con, $query);
       $number_of_result = mysqli_num_rows($result);
   ?>
   <div class="logo" style="display: flex;align-items: center;cursor: pointer;">
              <img src="../img/logo.png" alt="Logo" style="width: 450px;margin-right: 0.6rem;margin-top: -0.6rem;"/>
            </div>

            <?php

            ?>

            <div class="icons">
            <a href="../pages/noti_userfakulti.php"><div id="noti-btn" class="fas fa-bell"><?php echo $number_of_result;?></div></a>
               <div id="menu-btn" class="fas fa-bars" onclick="showOrHidePengumuman()"></div>
               <a href="../components/logout.php"><div id="user-btn" class="fa fa-sign-out"></div></a>
            </div>

   </section>

</header>
