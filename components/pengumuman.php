<?php
require "../php/db.php";

$pengumuman = array();

if ($stmt = $con->prepare("SELECT `PENGUMUMAN_ID`, `TARIKH`, `PENGUMUMAN`, `KUALITIUKM_ID` FROM `pengumuman` WHERE 1")) {

    $stmt->execute();
    mysqli_stmt_bind_result($stmt, $pengumuman_id, $tarikh, $pengumuman_, $kualitiukm_id);

    while (mysqli_stmt_fetch($stmt)) {
       array_push($pengumuman, array($pengumuman_id, $tarikh, $pengumuman_, $kualitiukm_id));
    }
 } else {
    // Something is wrong with the SQL statement, so you must check to make sure your accounts table exists with all 3 fields.
    echo 'Could not prepare statement!';
 }

?>

<div class="sticky" style=""  onclick="showOrHidePengumuman()">
<i class="fa-solid fa-circle-chevron-left"></i>
</div>
<div class="side-bar-right" id="side-bar-right" style="right: 0; !important">
<a href="javascript:void(0)" class="closebtn" onclick="showOrHidePengumuman()">&times;</a>
<div style="padding-top: 20px;">
<h1>Pengumuman</h1>
   <?php
for($i=0; $i<count($pengumuman); $i++){
    echo "<div class=\"pengumuman\"> <p class=\"pengumuman-text\">Tarikh: ",$pengumuman[$i][1],"</p>

    <p class=\"pengumuman-content\">",$pengumuman[$i][2],"</p>
    
    </div><hr>";
   }
   ?>
</div>
</div>

<script>
function showOrHidePengumuman() {
   // console.log("he");
   if(document.getElementById("side-bar-right").style.display == "none"){
      document.getElementById("side-bar-right").style.display = "block"
   }else {
      document.getElementById("side-bar-right").style.display = "none";
   }
}
</script>
