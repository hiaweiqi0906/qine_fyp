<div>
    <h2 class="collapsible">Area 3 - Student Selection and Support Services</h3>
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
                <td>3.1</td>
                <td>Student Selection</td>
                <td></td>
                <td></td>
                <td></td>
                <td><input type="text" id="score_3_1" name="score_3_1" autocomplete="off" onchange="calcOverall3()"
                        required value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[2][1];
                        } else
                            echo "0"; ?>">  </td>
            </tbody>
            <tbody>
                <td>3.1.1</td>
                <td>The programme must have clear criteria and processes for student selection (including that of
                    transfer students) and these must be consistent with applicable requirements.</td>
                <td>F/P</td>
                <td></td>
                <td><input type="text" id="score_3_1_1" name="score_3_1_1" autocomplete="off" onchange="calcOverall3()"
                        required value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[2][2];
                        } else
                            echo "0"; ?>">  </td>
                <td></td>
            </tbody>
            <tbody>
                <td>3.1.2</td>
                <td>The criteria and processes of student selection must be transparent and objective.</td>
                <td>F/P</td>
                <td></td>
                <td><input type="text" id="score_3_1_2" name="score_3_1_2" autocomplete="off" onchange="calcOverall3()"
                        required value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[2][3];
                        } else
                            echo "0"; ?>">  </td>
                <td></td>
            </tbody>
            <tbody>
                <td>3.1.3</td>
                <td>Student enrolment must be related to the capacity of the department to effectively deliver the
                    programme.</td>
                <td>F</td>
                <td></td>
                <td><input type="text" id="score_3_1_3" name="score_3_1_3" autocomplete="off" onchange="calcOverall3()"
                        required value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[2][4];
                        } else
                            echo "0"; ?>">  </td>
                <td></td>
            </tbody>
            <tbody>
                <td>3.1.4</td>
                <td>There must be a clear policy, and if applicable, appropriate mechanisms, for appeal on student
                    selection.</td>
                <td>F</td>
                <td></td>
                <td><input type="text" id="score_3_1_4" name="score_3_1_4" autocomplete="off" onchange="calcOverall3()"
                        required value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[2][5];
                        } else
                            echo "0"; ?>">  </td>
                <td></td>
            </tbody>
            <tbody>
                <td>3.1.5</td>
                <td>The department must offer appropriate developmental or remedial support to assist students,
                    including incoming transfer students who are in need.</td>
                <td>F/P</td>
                <td></td>
                <td><input type="text" id="score_3_1_5" name="score_3_1_5" autocomplete="off" onchange="calcOverall3()"
                        required value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[2][6];
                        } else
                            echo "0"; ?>">  </td>
                <td></td>
            </tbody>
            <tbody>
                <td>3.2</td>
                <td>Articulation and Transfer</td>
                <td></td>
                <td></td>
                <td></td>
                <td><input type="text" id="score_3_2" name="score_3_2" autocomplete="off" onchange="calcOverall3()"
                        required value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[2][7];
                        } else
                            echo "0"; ?>">  </td>
            </tbody>
            <tbody>
                <td>3.2.1</td>
                <td>The department must have well- defined policies and mechanisms to facilitate student mobility, which
                    may include student transfer within and between institutions as well as cross-border.</td>
                <td>F</td>
                <td></td>
                <td><input type="text" id="score_3_2_1" name="score_3_2_1" autocomplete="off" onchange="calcOverall3()"
                        required value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[2][8];
                        } else
                            echo "0"; ?>">  </td>
                <td></td>
            </tbody>
            <tbody>
                <td>3.2.2</td>
                <td>The department must ensure that the incoming transfer students have the capacity to successfully
                    follow the programme.</td>
                <td>F/P</td>
                <td></td>
                <td><input type="text" id="score_3_2_2" name="score_3_2_2" autocomplete="off" onchange="calcOverall3()"
                        required value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[2][9];
                        } else
                            echo "0"; ?>">  </td>
                <td></td>
            </tbody>
            <tbody>
                <td>3.3</td>
                <td>Student Support Services</td>
                <td></td>
                <td></td>
                <td></td>
                <td><input type="text" id="score_3_3" name="score_3_3" autocomplete="off" onchange="calcOverall3()"
                        required value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[2][10];
                        } else
                            echo "0"; ?>">  </td>
            </tbody>
            <tbody>
                <td>3.3.1</td>
                <td>Students must have access to appropriate and adequate support services, such as physical, social,
                    financial, recreational and online facilities, academic and non-academic counselling and health
                    services.</td>
                <td>F</td>
                <td></td>
                <td><input type="text" id="score_3_3_1" name="score_3_3_1" autocomplete="off" onchange="calcOverall3()"
                        required value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[2][11];
                        } else
                            echo "0"; ?>">  </td>
                <td></td>
            </tbody>
            <tbody>
                <td>3.3.2</td>
                <td>There must be a designated administrative unit, with a prominent organisational status in the HEP,
                    responsible for planning and implementing student support services staffed by individuals who have
                    appropriate experience.</td>
                <td>F</td>
                <td></td>
                <td><input type="text" id="score_3_3_2" name="score_3_3_2" autocomplete="off" onchange="calcOverall3()"
                        required value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[2][12];
                        } else
                            echo "0"; ?>">  </td>
                <td></td>
            </tbody>
            <tbody>
                <td>3.3.3</td>
                <td>An effective induction to the programme must be available to new students with special attention
                    given to out of state and international students as well as students with special needs.</td>
                <td>F/P</td>
                <td></td>
                <td><input type="text" id="score_3_3_3" name="score_3_3_3" autocomplete="off" onchange="calcOverall3()"
                        required value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[2][13];
                        } else
                            echo "0"; ?>">  </td>
                <td></td>
            </tbody>
            <tbody>
                <td>3.3.4</td>
                <td>Academic, non-academic and career counselling must be provided by adequate and qualified staff.</td>
                <td>F/P</td>
                <td></td>
                <td><input type="text" id="score_3_3_4" name="score_3_3_4" autocomplete="off" onchange="calcOverall3()"
                        required value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[2][14];
                        } else
                            echo "0"; ?>">  </td>
                <td></td>
            </tbody>
            <tbody>
                <td>3.3.5</td>
                <td>There must be mechanisms that actively identify and assist students who are in need of academic,
                    spiritual, psychological and social support.</td>
                <td>F</td>
                <td></td>
                <td><input type="text" id="score_3_3_5" name="score_3_3_5" autocomplete="off" onchange="calcOverall3()"
                        required value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[2][15];
                        } else
                            echo "0"; ?>">  </td>
                <td></td>
            </tbody>
            <tbody>
                <td>3.3.6</td>
                <td>The HEP must have clearly defined and documented processes and procedures in handling student
                    disciplinary cases.</td>
                <td>F</td>
                <td></td>
                <td><input type="text" id="score_3_3_6" name="score_3_3_6" autocomplete="off" onchange="calcOverall3()"
                        required value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[2][16];
                        } else
                            echo "0"; ?>">  </td>
                <td></td>
            </tbody>
            <tbody>
                <td>3.3.7</td>
                <td>There must be an effective mechanism for students to voice their grievances and seek resolution on
                    academic and non- academic matters.</td>
                <td>F</td>
                <td></td>
                <td><input type="text" id="score_3_3_7" name="score_3_3_7" autocomplete="off" onchange="calcOverall3()"
                        required value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[2][17];
                        } else
                            echo "0"; ?>">  </td>
                <td></td>
            </tbody>
            <tbody>
                <td>3.3.8</td>
                <td>Student support services must be evaluated regularly to ensure their adequacy, effectiveness and
                    safety.</td>
                <td>F</td>
                <td></td>
                <td><input type="text" id="score_3_3_8" name="score_3_3_8" autocomplete="off" onchange="calcOverall3()"
                        required value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[2][18];
                        } else
                            echo "0"; ?>">  </td>
                <td></td>
            </tbody>
            <tbody>
                <td>3.4</td>
                <td>Student Representation and Participation</td>
                <td></td>
                <td></td>
                <td></td>
                <td><input type="text" id="score_3_4" name="score_3_4" autocomplete="off" onchange="calcOverall3()"
                        required value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[2][19];
                        } else
                            echo "0"; ?>">  </td>
            </tbody>
            <tbody>
                <td>3.4.1</td>
                <td>There must be well-disseminated policies and processes for active student engagement especially in
                    areas that affect their interest and welfare.</td>
                <td>F</td>
                <td></td>
                <td><input type="text" id="score_3_4_1" name="score_3_4_1" autocomplete="off" onchange="calcOverall3()"
                        required value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[2][20];
                        } else
                            echo "0"; ?>">  </td>
                <td></td>
            </tbody>
            <tbody>
                <td>3.4.2</td>
                <td>There must be adequate student representation and organisation at the institutional and departmental
                    levels.</td>
                <td>F</td>
                <td></td>
                <td><input type="text" id="score_3_4_2" name="score_3_4_2" autocomplete="off" onchange="calcOverall3()"
                        required value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[2][21];
                        } else
                            echo "0"; ?>">  </td>
                <td></td>
            </tbody>
            <tbody>
                <td>3.4.3</td>
                <td>Students must be facilitated to develop linkages with external stakeholders and to participate in
                    activities to gain managerial, entrepreneurial and leadership skills in preparation for the
                    workplace.</td>
                <td>F</td>
                <td></td>
                <td><input type="text" id="score_3_4_3" name="score_3_4_3" autocomplete="off" onchange="calcOverall3()"
                        required value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[2][22];
                        } else
                            echo "0"; ?>">  </td>
                <td></td>
            </tbody>
            <tbody>
                <td>3.4.4</td>
                <td>Student activities and organisations must be facilitated to encourage character building, inculcate
                    a sense of belonging and responsibility, and promote active citizenship.</td>
                <td>F</td>
                <td></td>
                <td><input type="text" id="score_3_4_4" name="score_3_4_4" autocomplete="off" onchange="calcOverall3()"
                        required value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[2][23];
                        } else
                            echo "0"; ?>">  </td>
                <td></td>
            </tbody>
            <tbody>
                <td>3.5</td>
                <td>Alumni</td>
                <td></td>
                <td></td>
                <td></td>
                <td><input type="text" id="score_3_5" name="score_3_5" autocomplete="off" onchange="calcOverall3()"
                        required value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[2][24];
                        } else
                            echo "0"; ?>">  </td>
            </tbody>
            <tbody>
                <td>3.5.1</td>
                <td>The department must foster active linkages with alumni to develop, review and continuously improve
                    the programme.</td>
                <td>F</td>
                <td></td>
                <td><input type="text" id="score_3_5_1" name="score_3_5_1" autocomplete="off" onchange="calcOverall3()"
                        required value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[2][25];
                        } else
                            echo "0"; ?>">  </td>
                <td></td>
            </tbody><tbody>
            <td colspan="4">
            <h3 style="font-weight: bold;">Overall Score</h3></td>
            <td colspan="2">
            <input type="text" id="score_3" name="score_3" autocomplete="off" onchange="calcOverall3()" required value="<?php if (isset($akredasi_penuh_bidang)) {
                echo $akredasi_penuh_bidang[2][0];
            } else
                echo "0"; ?>"> </td></tbody></thead>
        </table>
    </div>
</div>

<script>
    function calcOverall3() {
        var score_3 = Number(document.getElementById("score_3").value);
        var score_3_1 = Number(document.getElementById("score_3_1").value);
        var score_3_1_1 = Number(document.getElementById("score_3_1_1").value);
        var score_3_1_2 = Number(document.getElementById("score_3_1_2").value);
        var score_3_1_3 = Number(document.getElementById("score_3_1_3").value);
        var score_3_1_4 = Number(document.getElementById("score_3_1_4").value);
        var score_3_1_5 = Number(document.getElementById("score_3_1_5").value);
        var score_3_2 = Number(document.getElementById("score_3_2").value);
        var score_3_2_1 = Number(document.getElementById("score_3_2_1").value);
        var score_3_2_2 = Number(document.getElementById("score_3_2_2").value);
        var score_3_3 = Number(document.getElementById("score_3_3").value);
        var score_3_3_1 = Number(document.getElementById("score_3_3_1").value);
        var score_3_3_2 = Number(document.getElementById("score_3_3_2").value);
        var score_3_3_3 = Number(document.getElementById("score_3_3_3").value);
        var score_3_3_4 = Number(document.getElementById("score_3_3_4").value);
        var score_3_3_5 = Number(document.getElementById("score_3_3_5").value);
        var score_3_3_6 = Number(document.getElementById("score_3_3_6").value);
        var score_3_3_7 = Number(document.getElementById("score_3_3_7").value);
        var score_3_3_8 = Number(document.getElementById("score_3_3_8").value);
        var score_3_4 = Number(document.getElementById("score_3_4").value);
        var score_3_4_1 = Number(document.getElementById("score_3_4_1").value);
        var score_3_4_2 = Number(document.getElementById("score_3_4_2").value);
        var score_3_4_3 = Number(document.getElementById("score_3_4_3").value);
        var score_3_4_4 = Number(document.getElementById("score_3_4_4").value);
        var score_3_5 = Number(document.getElementById("score_3_5").value);
        var score_3_5_1 = Number(document.getElementById("score_3_5_1").value);

        score_3 = score_3_1 + score_3_1_1 + score_3_1_2 + score_3_1_3 + score_3_1_4 + score_3_1_5 + score_3_2 + score_3_2_1 + score_3_2_2 + score_3_3 + score_3_3_1 + score_3_3_2 + score_3_3_3 + score_3_3_4 + score_3_3_5 + score_3_3_6 + score_3_3_7 + score_3_3_8 + score_3_4 + score_3_4_1 + score_3_4_2 + score_3_4_3 + score_3_4_4 + score_3_5 + score_3_5_1;
        score_3 /= 25;
        score_3 = (Math.round(score_3 * 100) / 100).toFixed(2);

        document.getElementById("score_3").value =score_3;
        document.getElementById("_score_3").value =score_3;
        document.getElementById("__score_3").value =score_3;
        document.getElementById("_score_3_3").value =score_3_3;
        document.getElementById("_score_3_2").value =score_3_2;
        document.getElementById("_score_3_1").value =score_3_1;
        document.getElementById("_score_3_5").value =score_3_5;
        document.getElementById("_score_3_4").value =score_3_4;
        drawChart();
    }
</script>