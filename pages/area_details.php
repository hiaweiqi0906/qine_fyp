<div class="main-body">
    <div class="">
        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>

            <tbody style="background-color: paleturquoise; font-weight: bold;">
                <td>Area 1</td>
                <td>Programme Development And Delivery</td>
                <td></td>
                <td></td>
                <td><input type="text" id="__score_1" name="score_1" autocomplete="off" onchange="calcOverall1()" required
                        value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[0][0];
                        } else
                            echo "0"; ?>">
                </td>
            </tbody>
            <tbody style="background-color: pink; font-weight: bold;">
                <td>1.1</td>
                <td>Statement of Educational Objectives of Academic Programme and Learning Outcomes</td>
                <td></td>
                <td></td>
                <td><input type="text" id="_score_1_1" name="score_1_1" autocomplete="off" onchange="calcOverall1()"
                        required
                        value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[0][1];
                        } else
                            echo "0"; ?>">
                </td>
            </tbody>
            <tbody style="background-color: pink; font-weight: bold;">
                <td>1.2</td>
                <td>Programme Development: Process, Content, Structure and Teaching-Learning Methods</td>
                <td></td>
                <td></td>
                <td><input type="text" id="_score_1_2" name="score_1_2" autocomplete="off" onchange="calcOverall1()"
                        required
                        value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[0][7];
                        } else
                            echo "0"; ?>">  </td>
            </tbody>
            <tbody style="background-color: pink; font-weight: bold;">
                <td>1.3</td>
                <td>Programme Delivery</td>
                <td></td>
                <td></td>
                <td><input type="text" id="_score_1_3" name="score_1_3" autocomplete="off" onchange="calcOverall1()"
                        required
                        value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[0][14];
                        } else
                            echo "0"; ?>">  </td>
            </tbody>
            <tbody style="background-color: paleturquoise; font-weight: bold;">
                <td>Area 2</td>
                <td>Programme Development And Delivery</td>
                <td></td>
                <td></td>
                <td>
                    <input type="text" id="__score_2" name="score_2" autocomplete="off" onchange="calcOverall2()" required
                        value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[1][0];
                        } else
                            echo "0"; ?>">
                </td>
            </tbody>
            <tbody style="background-color: pink; font-weight: bold;">
                <td>2.1</td>
                <td>Relationship Between Assessment and Learning Outcomes</td>
                <td></td>
                <td></td>
                <td><input type="text" id="_score_2_1" name="score_2_1" autocomplete="off" onchange="calcOverall2()"
                        required
                        value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[1][1];
                        } else
                            echo "0"; ?>">  </td>
            </tbody>
            <tbody style="background-color: pink; font-weight: bold;">
                <td>2.2</td>
                <td>Assessment Methods</td>
                <td></td>
                <td></td>
                <td><input type="text" id="_score_2_2" name="score_2_2" autocomplete="off" onchange="calcOverall2()"
                        required
                        value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[1][4];
                        } else
                            echo "0"; ?>">  </td>
            </tbody>
            <tbody style="background-color: pink; font-weight: bold;">
                <td>2.3</td>
                <td>Management of Student Assessment</td>
                <td></td>
                <td></td>
                <td><input type="text" id="_score_2_3" name="score_2_3" autocomplete="off" onchange="calcOverall2()"
                        required
                        value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[1][9];
                        } else
                            echo "0"; ?>">  </td>
            </tbody>
            <tbody style="background-color: paleturquoise; font-weight: bold;">
                <td>Area 3</td>
                <td>Student Selection and Support Services</td>
                <td></td>
                <td></td>
                <td>
                    <input type="text" id="__score_3" name="score_3" autocomplete="off" onchange="calcOverall3()" required
                        value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[2][0];
                        } else
                            echo "0"; ?>">
                </td>
            </tbody>
            <tbody style="background-color: pink; font-weight: bold;">
                <td>3.1</td>
                <td>Student Selection</td>
                <td></td>
                <td></td>
                <td><input type="text" id="_score_3_1" name="score_3_1" autocomplete="off" onchange="calcOverall3()"
                        required value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[2][1];
                        } else
                            echo "0"; ?>">  </td>
            </tbody>
            <tbody style="background-color: pink; font-weight: bold;">
                <td>3.2</td>
                <td>Articulation and Transfer</td>
                <td></td>
                <td></td>
                <td><input type="text" id="_score_3_2" name="score_3_2" autocomplete="off" onchange="calcOverall3()"
                        required value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[2][7];
                        } else
                            echo "0"; ?>">  </td>
            </tbody>
            <tbody style="background-color: pink; font-weight: bold;">
                <td>3.3</td>
                <td>Student Support Services</td>
                <td></td>
                <td></td>
                <td><input type="text" id="_score_3_3" name="score_3_3" autocomplete="off" onchange="calcOverall3()"
                        required value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[2][10];
                        } else
                            echo "0"; ?>">  </td>
            </tbody>
            <tbody style="background-color: pink; font-weight: bold;">
                <td>3.4</td>
                <td>Student Representation and Participation</td>
                <td></td>
                <td></td>
                <td><input type="text" id="_score_3_4" name="score_3_4" autocomplete="off" onchange="calcOverall3()"
                        required value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[2][19];
                        } else
                            echo "0"; ?>">  </td>
            </tbody>
            <tbody style="background-color: pink; font-weight: bold;">
                <td>3.5</td>
                <td>Alumni</td>
                <td></td>
                <td></td>
                <td><input type="text" id="_score_3_5" name="score_3_5" autocomplete="off" onchange="calcOverall3()"
                        required value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[2][24];
                        } else
                            echo "0"; ?>">  </td>
            </tbody>
            <tbody style="background-color: paleturquoise; font-weight: bold;">
                <td>Area 4</td>
                <td>Academic Staff</td>
                <td></td>
                <td></td>
                <td>
                    <input type="text" id="__score_4" name="score_4" autocomplete="off" onchange="calcOverall4()" required
                        value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[3][0];
                        } else
                            echo "0"; ?>">
                </td>
            </tbody>
            <tbody style="background-color: pink; font-weight: bold;">
                <td>4.1</td>
                <td>Recruitment and Management</td>
                <td></td>
                <td></td>
                <td><input type="text" id="_score_4_1" name="score_4_1" autocomplete="off" onchange="calcOverall4()"
                        required
                        value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[3][1];
                        } else
                            echo "0"; ?>">  </td>
            </tbody>
            <tbody style="background-color: pink; font-weight: bold;">
                <td>4.2</td>
                <td>Service and Development</td>
                <td></td>
                <td></td>
                <td><input type="text" id="_score_4_2" name="score_4_2" autocomplete="off" onchange="calcOverall4()"
                        required
                        value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[3][10];
                        } else
                            echo "0"; ?>">  </td>
            </tbody>
            <tbody style="background-color: paleturquoise; font-weight: bold;">
                <td>Area 5</td>
                <td>Educational Resources</td>
                <td></td>
                <td></td>
                <td>
                    <input type="text" id="__score_5" name="score_5" autocomplete="off" onchange="calcOverall5()" required
                        value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[4][0];
                        } else
                            echo "0"; ?>">
                </td>
            </tbody>
            <tbody style="background-color: pink; font-weight: bold;">
                <td>5.1</td>
                <td>Physical Facilities</td>
                <td></td>
                <td></td>
                <td><input type="text" id="_score_5_1" name="score_5_1" autocomplete="off" onchange="calcOverall5()"
                        required value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[4][1];
                        } else
                            echo "0"; ?>">  </td>
            </tbody>
            <tbody style="background-color: pink; font-weight: bold;">
                <td>5.2</td>
                <td>Research and Development</td>
                <td></td>
                <td></td>
                <td><input type="text" id="_score_5_2" name="score_5_2" autocomplete="off" onchange="calcOverall5()"
                        required value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[4][6];
                        } else
                            echo "0"; ?>">  </td>
            </tbody>
            <tbody style="background-color: pink; font-weight: bold;">
                <td>5.3</td>
                <td>Financial Resources</td>
                <td></td>
                <td></td>
                <td><input type="text" id="_score_5_3" name="score_5_3" autocomplete="off" onchange="calcOverall5()"
                        required value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[4][10];
                        } else
                            echo "0"; ?>">  </td>
            </tbody>
            <tbody style="background-color: paleturquoise; font-weight: bold;">
                <td>Area 6</td>
                <td>Programme Management</td>
                <td></td>
                <td></td>
                <td>
                    <input type="text" id="__score_6" name="score_6" autocomplete="off" onchange="calcOverall6()" required
                        value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[5][0];
                        } else
                            echo "0"; ?>">
                </td>
            </tbody>
            <tbody style="background-color: pink; font-weight: bold;">
                <td>6.1</td>
                <td>Programme Management</td>
                <td></td>
                <td></td>
                <td><input type="text" id="_score_6_1" name="score_6_1" autocomplete="off" onchange="calcOverall6()" required
                        value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[5][1];
                        } else
                            echo "0"; ?>">
                        </td>
            </tbody>
            <tbody style="background-color: pink; font-weight: bold;">
                <td>6.2</td>
                <td>Programme Leadership</td>
                <td></td>
                <td></td>
                <td><input type="text" id="_score_6_2" name="score_6_2" autocomplete="off" onchange="calcOverall6()" required
                        value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[5][8];
                        } else
                            echo "0"; ?>">
                        </td>
            </tbody>
            <tbody style="background-color: pink; font-weight: bold;">
                <td>6.3</td>
                <td>Administrative Staff</td>
                <td></td>
                <td></td>
                <td><input type="text" id="_score_6_3" name="score_6_3" autocomplete="off" onchange="calcOverall6()" required
                        value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[5][12];
                        } else
                            echo "0"; ?>">
                        </td>
            </tbody>
            <tbody style="background-color: pink; font-weight: bold;">
                <td>6.4</td>
                <td>Academic Records</td>
                <td></td>
                <td></td>
                <td><input type="text" id="_score_6_4" name="score_6_4" autocomplete="off" onchange="calcOverall6()" required
                        value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[5][16];
                        } else
                            echo "0"; ?>">
                        </td>
            </tbody>
            <tbody style="background-color: paleturquoise; font-weight: bold;">
                <td>Area 7</td>
                <td>Programme Monitoring, Review and Continual Quality Improvement</td>
                <td></td>
                <td></td>
                <td>
                    <input type="text" id="__score_7" name="score_7" autocomplete="off" onchange="calcOverall7()" required
                        value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[6][0];
                        } else
                            echo "0"; ?>">
                </td>
            </tbody>
            <tbody style="background-color: pink; font-weight: bold;">
                <td>7.1</td>
                <td>Mechanism for Programme Monitoring, Review and Continual Quality Improve</td>
                <td></td>
                <td></td>
                <td><input type="text" id="_score_7_1" name="score_7_1" autocomplete="off" required onchange="calcOverall7()"
                        value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[6][1];
                        } else
                            echo "0"; ?>">
                        </td>
            </tbody>
            </thead>
        </table>
    </div>
</div>

<script>
    function calcOverall1() {
        var score_1 = Number(document.getElementById("score_1").value);
        var score_1_1 = Number(document.getElementById("score_1_1").value);
        var score_1_1_1 = Number(document.getElementById("score_1_1_1").value);
        var score_1_1_2 = Number(document.getElementById("score_1_1_2").value);
        var score_1_1_3 = Number(document.getElementById("score_1_1_3").value);
        var score_1_1_4 = Number(document.getElementById("score_1_1_4").value);
        var score_1_1_5 = Number(document.getElementById("score_1_1_5").value);
        var score_1_2 = Number(document.getElementById("score_1_2").value);
        var score_1_2_1 = Number(document.getElementById("score_1_2_1").value);
        var score_1_2_2 = Number(document.getElementById("score_1_2_2").value);
        var score_1_2_3 = Number(document.getElementById("score_1_2_3").value);
        var score_1_2_4 = Number(document.getElementById("score_1_2_4").value);
        var score_1_2_5 = Number(document.getElementById("score_1_2_5").value);
        var score_1_2_6 = Number(document.getElementById("score_1_2_6").value);
        var score_1_3 = Number(document.getElementById("score_1_3").value);
        var score_1_3_1 = Number(document.getElementById("score_1_3_1").value);
        var score_1_3_2 = Number(document.getElementById("score_1_3_2").value);
        var score_1_3_3 = Number(document.getElementById("score_1_3_3").value);
        var score_1_3_4 = Number(document.getElementById("score_1_3_4").value);
        var score_1_3_5 = Number(document.getElementById("score_1_3_5").value);
        var score_1_3_6 = Number(document.getElementById("score_1_3_6").value);


        score_1 = score_1_1 + score_1_1_1 + score_1_1_2 + score_1_1_3 + score_1_1_4 + score_1_1_5 + score_1_2 + score_1_2_1 + score_1_2_2 + score_1_2_3 + score_1_2_4 + score_1_2_5 + score_1_2_6 + score_1_3 + score_1_3_1 + score_1_3_2 + score_1_3_3 + score_1_3_4 + score_1_3_5 + score_1_3_6;
        score_1 /= 20;
        document.getElementById("score_1").value = score_1;
    }
</script>