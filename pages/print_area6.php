<div>
    <h2 class="collapsible">Area 6 - Programme Management</h3>
    <div class="invi-at-first">
        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Area/Standard</th>
                    <th></th>
                    <th>Related Standard</th>
                    <th>Score (1-5)</th>
                    <th>Holistic Evaluation</th>
                </tr>
            <tbody>
                <td>6.1</td>
                <td>Programme Management</td>
                <td></td>
                <td></td>
                <td></td>
                <td><input type="text" id="score_6_1" name="score_6_1" autocomplete="off" onchange="calcOverall6()" required
                        value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[5][1];
                        } else
                            echo "0"; ?>">
                        </td>
            </tbody>
            <tbody>
                <td>6.1.1</td>
                <td>The department must clarify its management structure and function, and the relationships between
                    them, and these must be communicated to all parties involved based on the principles of
                    responsibility, accountability and transparency.</td>
                <td>F</td>
                <td></td>
                <td><input type="text" id="score_6_1_1" name="score_6_1_1" autocomplete="off" onchange="calcOverall6()" required
                        value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[5][2];
                        } else
                            echo "0"; ?>">
                        </td>
                <td></td>
            </tbody>
            <tbody>
                <td>6.1.2</td>
                <td>The department must provide accurate, relevant and timely information about the programme which are
                    easily and publicly accessible, especially to prospective students.</td>
                <td>F/P</td>
                <td></td>
                <td><input type="text" id="score_6_1_2" name="score_6_1_2" autocomplete="off" onchange="calcOverall6()" required
                        value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[5][3];
                        } else
                            echo "0"; ?>">
                        </td>
                <td></td>
            </tbody>
            <tbody>
                <td>6.1.3</td>
                <td>The department must have policies, procedures and mechanisms for regular review and updating of its
                    structures, functions, strategies and core activities to ensure continuous quality improvement.</td>
                <td>F</td>
                <td></td>
                <td><input type="text" id="score_6_1_3" name="score_6_1_3" autocomplete="off" onchange="calcOverall6()" required
                        value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[5][4];
                        } else
                            echo "0"; ?>">
                        </td>
                <td></td>
            </tbody>
            <tbody>
                <td>6.1.4</td>
                <td>The academic board of the department must be an effective decision-making body with an adequate
                    degree of autonomy.</td>
                <td>F</td>
                <td></td>
                <td><input type="text" id="score_6_1_4" name="score_6_1_4" autocomplete="off" onchange="calcOverall6()" required
                        value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[5][5];
                        } else
                            echo "0"; ?>">
                        </td>
                <td></td>
            </tbody>
            <tbody>
                <td>6.1.5</td>
                <td>Mechanisms to ensure functional integration and comparability of educational quality must be
                    established for programmes conducted in different campuses or partner institutions.</td>
                <td>F/P</td>
                <td>7.1.7</td>
                <td><input type="text" id="score_6_1_5" name="score_6_1_5" autocomplete="off" onchange="calcOverall6()" required
                        value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[5][6];
                        } else
                            echo "0"; ?>">
                        </td>
                <td></td>
            </tbody>
            <tbody>
                <td>6.1.6</td>
                <td>The department must conduct internal and external consultations, and market needs and graduate
                    employability analyses.</td>
                <td>F/P</td>
                <td>1.1.2, 1.2.2, 7.1.6</td>
                <td><input type="text" id="score_6_1_6" name="score_6_1_6" autocomplete="off" onchange="calcOverall6()" required
                        value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[5][7];
                        } else
                            echo "0"; ?>">
                        </td>
                <td></td>
            </tbody>
            <tbody>
                <td>6.2</td>
                <td>Programme Leadership</td>
                <td></td>
                <td></td>
                <td></td>
                <td><input type="text" id="score_6_2" name="score_6_2" autocomplete="off" onchange="calcOverall6()" required
                        value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[5][8];
                        } else
                            echo "0"; ?>">
                        </td>
            </tbody>
            <tbody>
                <td>6.2.1</td>
                <td>The criteria for the appointment and the responsibilities of the programme leader must be clearly
                    stated.</td>
                <td>F/P</td>
                <td></td>
                <td><input type="text" id="score_6_2_1" name="score_6_2_1" autocomplete="off" onchange="calcOverall6()" required
                        value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[5][9];
                        } else
                            echo "0"; ?>">
                        </td>
                <td></td>
            </tbody>
            <tbody>
                <td>6.2.2</td>
                <td>The programme leader must have appropriate qualification, knowledge and experiences related to the
                    programme he/she is responsible for.</td>
                <td>F/P</td>
                <td></td>
                <td><input type="text" id="score_6_2_2" name="score_6_2_2" autocomplete="off" onchange="calcOverall6()" required
                        value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[5][10];
                        } else
                            echo "0"; ?>">
                        </td>
                <td></td>
            </tbody>
            <tbody>
                <td>6.2.3</td>
                <td>There must be mechanisms and processes for communication between the programme leader, department
                    and HEP on matters such as staff recruitment and training, student admission, allocation of
                    resources and decision-making processes.</td>
                <td>F/P</td>
                <td></td>
                <td><input type="text" id="score_6_2_3" name="score_6_2_3" autocomplete="off" onchange="calcOverall6()" required
                        value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[5][11];
                        } else
                            echo "0"; ?>">
                        </td>
                <td></td>
            </tbody>
            <tbody>
                <td>6.3</td>
                <td>Administrative Staff</td>
                <td></td>
                <td></td>
                <td></td>
                <td><input type="text" id="score_6_3" name="score_6_3" autocomplete="off" onchange="calcOverall6()" required
                        value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[5][12];
                        } else
                            echo "0"; ?>">
                        </td>
            </tbody>
            <tbody>
                <td>6.3.1</td>
                <td>The department must have sufficient number of qualified administrative staff to support the
                    implementation of the programme and related activities.</td>
                <td>F/P</td>
                <td></td>
                <td><input type="text" id="score_6_3_1" name="score_6_3_1" autocomplete="off" onchange="calcOverall6()" required
                        value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[5][13];
                        } else
                            echo "0"; ?>">
                        </td>
                <td></td>
            </tbody>
            <tbody>
                <td>6.3.2</td>
                <td>The HEP must conduct regular performance review of the administrative staff of the programme.</td>
                <td>F/P</td>
                <td></td>
                <td><input type="text" id="score_6_3_2" name="score_6_3_2" autocomplete="off" onchange="calcOverall6()" required
                        value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[5][14];
                        } else
                            echo "0"; ?>">
                        </td>
                <td></td>
            </tbody>
            <tbody>
                <td>6.3.3</td>
                <td>The department must have an appropriate training scheme for the advancement of the administrative
                    staff as well as to fulfil the specific needs of the programme.</td>
                <td>F/P</td>
                <td></td>
                <td><input type="text" id="score_6_3_3" name="score_6_3_3" autocomplete="off" onchange="calcOverall6()" required
                        value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[5][15];
                        } else
                            echo "0"; ?>">
                        </td>
                <td></td>
            </tbody>
            <tbody>
                <td>6.4</td>
                <td>Academic Records</td>
                <td></td>
                <td></td>
                <td></td>
                <td><input type="text" id="score_6_4" name="score_6_4" autocomplete="off" onchange="calcOverall6()" required
                        value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[5][16];
                        } else
                            echo "0"; ?>">
                        </td>
            </tbody>
            <tbody>
                <td>6.4.1</td>
                <td>The department must have appropriate policies and practices concerning the nature, content and
                    security of student, academic staff and other academic records.</td>
                <td>F</td>
                <td></td>
                <td><input type="text" id="score_6_4_1" name="score_6_4_1" autocomplete="off" onchange="calcOverall6()" required
                        value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[5][17];
                        } else
                            echo "0"; ?>">
                        </td>
                <td></td>
            </tbody>
            <tbody>
                <td>6.4.2</td>
                <td>The department must maintain student records relating to their admission, performance, completion
                    and graduation in such form as is practical and preserve these records for future reference.</td>
                <td>F/P</td>
                <td></td>
                <td><input type="text" id="score_6_4_2" name="score_6_4_2" autocomplete="off" onchange="calcOverall6()" required
                        value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[5][18];
                        } else
                            echo "0"; ?>">
                        </td>
                <td></td>
            </tbody>
            <tbody>
                <td>6.4.3</td>
                <td>The department must implement policies on the rights of individual privacy and the confidentiality
                    of records.</td>
                <td>F</td>
                <td></td>
                <td><input type="text" id="score_6_4_3" name="score_6_4_3" autocomplete="off" onchange="calcOverall6()" required
                        value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[5][19];
                        } else
                            echo "0"; ?>">
                        </td>
                <td></td>
            </tbody>
            <tbody>
                <td>6.4.4</td>
                <td>The department must continually review policies on the security of records, including the increased
                    use of electronic technologies and safety systems.</td>
                <td>F</td>
                <td></td>
                <td><input type="text" id="score_6_4_4" name="score_6_4_4" autocomplete="off" onchange="calcOverall6()" required
                        value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[5][20];
                        } else
                            echo "0"; ?>">
                        </td>
                <td></td>
            </tbody>
            <tbody>
            <td colspan="4">
            <h3 style="font-weight: bold;">Overall Score</h3>
                    </td>
                    <td colspan="2">
            <input type="text" id="score_6" name="score_6" autocomplete="off" onchange="calcOverall6()" required
                value="<?php if (isset($akredasi_penuh_bidang)) {
                    echo $akredasi_penuh_bidang[5][0];
                } else
                    echo "0"; ?>"></td></tbody>
                </thead>
        </table>
    </div>
</div>

<script>
    function calcOverall6() {
        var score_6 = Number(document.getElementById("score_6").value);
        var score_6_1 = Number(document.getElementById("score_6_1").value);
        var score_6_1_1 = Number(document.getElementById("score_6_1_1").value);
        var score_6_1_2 = Number(document.getElementById("score_6_1_2").value);
        var score_6_1_3 = Number(document.getElementById("score_6_1_3").value);
        var score_6_1_4 = Number(document.getElementById("score_6_1_4").value);
        var score_6_1_5 = Number(document.getElementById("score_6_1_5").value);
        var score_6_1_6 = Number(document.getElementById("score_6_1_6").value);
        var score_6_2 = Number(document.getElementById("score_6_2").value);
        var score_6_2_1 = Number(document.getElementById("score_6_2_1").value);
        var score_6_2_2 = Number(document.getElementById("score_6_2_2").value);
        var score_6_2_3 = Number(document.getElementById("score_6_2_3").value);
        var score_6_3 = Number(document.getElementById("score_6_3").value);
        var score_6_3_1 = Number(document.getElementById("score_6_3_1").value);
        var score_6_3_2 = Number(document.getElementById("score_6_3_2").value);
        var score_6_3_3 = Number(document.getElementById("score_6_3_3").value);
        var score_6_4 = Number(document.getElementById("score_6_4").value);
        var score_6_4_1 = Number(document.getElementById("score_6_4_1").value);
        var score_6_4_2 = Number(document.getElementById("score_6_4_2").value);
        var score_6_4_3 = Number(document.getElementById("score_6_4_3").value);
        var score_6_4_4 = Number(document.getElementById("score_6_4_4").value);

        score_6 = score_6_1 + score_6_1_1 + score_6_1_2 + score_6_1_3 + score_6_1_4 + score_6_1_5 + score_6_1_6 + score_6_2 + score_6_2_1 + score_6_2_2 + score_6_2_3 + score_6_3 +  + score_6_3_1 + score_6_3_2 + score_6_3_3 + score_6_4 + score_6_4_1 + score_6_4_2 + score_6_4_3 + score_6_4_4;
        score_6 /= 20;
        score_6 = (Math.round(score_6 * 100) / 100).toFixed(2);

        document.getElementById("score_6").value = score_6;
        document.getElementById("_score_6").value = score_6;
        document.getElementById("__score_6").value = score_6;
        document.getElementById("_score_6_3").value =score_6_3;
        document.getElementById("_score_6_2").value =score_6_2;
        document.getElementById("_score_6_1").value =score_6_1;
        document.getElementById("_score_6_4").value =score_6_4;
        drawChart();
    }
</script>