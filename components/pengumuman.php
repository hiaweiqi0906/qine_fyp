<?php
require_once "../php/db.php";

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
<div class="side-bar-right" style="right: 0; !important">

<?php
for($i=0; $i<count($pengumuman); $i++){
    echo "<span>Tarikh: ",$pengumuman[$i][1],"</span>

       <p>",$pengumuman[$i][2],"</p>

    <hr>";
 }
?>
</div>
