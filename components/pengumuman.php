<?php

$pengumuman = array();

if ($stmt = $con->prepare("SELECT * FROM `pengumuman` WHERE 1")) {

    $stmt->execute();
    mysqli_stmt_bind_result($stmt, $app_program_id, $tarikh_terima, $app_id_pengerusi, $program_id, $kualitiukm_id, $app_id_panel_1, $app_id_panel_2, $tarikh_masa_kemaskini);
    
    while (mysqli_stmt_fetch($stmt)) {
       array_push($pengumuman, array($app_program_id, $tarikh_terima, $app_id_pengerusi, $program_id, $kualitiukm_id, $app_id_panel_1, $app_id_panel_2, $tarikh_masa_kemaskini));
    }
 } else {
    // Something is wrong with the SQL statement, so you must check to make sure your accounts table exists with all 3 fields.
    echo 'Could not prepare statement!';
 }

?>

<?php
for($i=0; $i<count($list_of_program_panel_1); $i++, $j++){
    $current_application_id = $list_of_program_panel_1[$i][0];      
    echo "<div class=\"box\">
       <div class=\"tutor\">
          <img src=\"../img/program.jpg\" alt=\"\">
          <div>
             <h3>",$pengumuman[$i][1],"</h3>
             <span>Tarikh: ",$pengumuman[$j][7],"</span>
          </div>
       </div>
       <p>",$pengumuman[$i][2],"</p>

    </div>";
 }
?>