<div>
    <h2 class="collapsible">Area 1 - Programme Development And Delivery</h3>
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
                <td>1.1</td>
                <td>Statement of Educational Objectives of Academic Programme and Learning Outcomes</td>
                <td></td>
                <td></td>
                <td></td>
                <td><input type="text" id="score_1_1" name="score_1_1" autocomplete="off" onchange="calcOverall1()"
                        required
                        value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[0][1];
                        } else
                            echo "0"; ?>">
                </td>
            </tbody>
            <tbody>
                <td>1.1.1</td>
                <td>The programme must be consistent with, and supportive of, the vision, mission and goals of the HEP.
                </td>
                <td>P</td>
                <td></td>
                <td><input type="text" id="score_1_1_1" name="score_1_1_1" autocomplete="off" onchange="calcOverall1()"
                        required
                        value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[0][2];
                        } else
                            echo "0"; ?>">  </td>
                <td></td>
            </tbody>
            <tbody>
                <td>1.1.2</td>
                <td>The programme must be considered only after a needs assessment has indicated that there is a need
                    for the programme to be offered.</td>
                <td>F/P</td>
                <td>1.2.2, 6.1.6</td>
                <td><input type="text" id="score_1_1_2" name="score_1_1_2" autocomplete="off" onchange="calcOverall1()"
                        required
                        value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[0][3];
                        } else
                            echo "0"; ?>">  </td>
                <td></td>
            </tbody>
            <tbody>
                <td>1.1.3</td>
                <td>The department must state its programme educational objectives, learning outcomes, teaching and
                    learning strategies, and assessment, and ensure constructive alignment between them.</td>
                <td>F/P</td>
                <td>1.2.5</td>
                <td><input type="text" id="score_1_1_3" name="score_1_1_3" autocomplete="off" onchange="calcOverall1()"
                        required
                        value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[0][4];
                        } else
                            echo "0"; ?>">  </td>
                <td></td>
            </tbody>
            <tbody>
                <td>1.1.4</td>
                <td>The programme learning outcomes must correspond to an MQF level descriptors and the MQF learning
                    outcomes domains:</td>
                <td>P</td>
                <td></td>
                <td><input type="text" id="score_1_1_4" name="score_1_1_4" autocomplete="off" onchange="calcOverall1()"
                        required
                        value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[0][5];
                        } else
                            echo "0"; ?>">  </td>
                <td></td>
            </tbody>
            <tbody>
                <td>1.1.5</td>
                <td>Considering the stated learning outcomes, the programme must indicate the career and further studies
                    options available to the students on completion of the programme.</td>
                <td>F/P</td>
                <td></td>
                <td><input type="text" id="score_1_1_5" name="score_1_1_5" autocomplete="off" onchange="calcOverall1()"
                        required
                        value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[0][6];
                        } else
                            echo "0"; ?>">  </td>
                <td></td>
            </tbody>
            <tbody>
                <td>1.2</td>
                <td>Programme Development: Process, Content, Structure and Teaching-Learning Methods</td>
                <td></td>
                <td></td>
                <td></td>
                <td><input type="text" id="score_1_2" name="score_1_2" autocomplete="off" onchange="calcOverall1()"
                        required
                        value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[0][7];
                        } else
                            echo "0"; ?>">  </td>
            </tbody>
            <tbody>
                <td>1.2.1</td>
                <td>The department must have sufficient autonomy to design the curriculum and to utilise the allocated
                    resources necessary for its implementation. (Where applicable, the above provision must also cover
                    collaborative programmes and programmes conducted in collaboration with or from, other HEPs in
                    accordance with national policies.)</td>
                <td>F/P</td>
                <td></td>
                <td><input type="text" id="score_1_2_1" name="score_1_2_1" autocomplete="off" onchange="calcOverall1()"
                        required
                        value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[0][8];
                        } else
                            echo "0"; ?>">  </td>
                <td></td>
            </tbody>
            <tbody>
                <td>1.2.2</td>
                <td>The department must have an appropriate process to develop the curriculum leading to the approval by
                    the highest academic authority in the HEP.</td>
                <td>F/P</td>
                <td>1.1.2, 6.1.6</td>
                <td><input type="text" id="score_1_2_2" name="score_1_2_2" autocomplete="off" onchange="calcOverall1()"
                        required
                        value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[0][9];
                        } else
                            echo "0"; ?>">  </td>
                <td></td>
            </tbody>
            <tbody>
                <td>1.2.3</td>
                <td>The department must consult the stakeholders in the development of the curriculum including
                    educational experts as appropriate.</td>
                <td>F/P</td>
                <td>7.1.4</td>
                <td><input type="text" id="score_1_2_3" name="score_1_2_3" autocomplete="off" onchange="calcOverall1()"
                        required
                        value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[0][10];
                        } else
                            echo "0"; ?>">  </td>
                <td></td>
            </tbody>
            <tbody>
                <td>1.2.4</td>
                <td>The curriculum must fulfil the requirements of the discipline of study, taking into account the
                    appropriate programme standards, professional and industry requirements as well as good practices in
                    the field.</td>
                <td>P</td>
                <td></td>
                <td><input type="text" id="score_1_2_4" name="score_1_2_4" autocomplete="off" onchange="calcOverall1()"
                        required
                        value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[0][11];
                        } else
                            echo "0"; ?>">  </td>
                <td></td>
            </tbody>
            <tbody>
                <td>1.2.5</td>
                <td>There must be an appropriate teaching and learning methods relevant to the programme educational
                    objectives and learning outcomes.</td>
                <td>F/P</td>
                <td>1.1.3</td>
                <td><input type="text" id="score_1_2_5" name="score_1_2_5" autocomplete="off" onchange="calcOverall1()"
                        required
                        value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[0][12];
                        } else
                            echo "0"; ?>">  </td>
                <td></td>
            </tbody>
            <tbody>
                <td>1.2.6</td>
                <td>There must be co-curricular activities to enrich student experience, and to foster personal
                    development and responsibility. (This standard may not be applicable to Open and Distance Learning
                    [ODL] programmes and programmes designed for working adult learners.)</td>
                <td>F/P</td>
                <td></td>
                <td><input type="text" id="score_1_2_6" name="score_1_2_6" autocomplete="off" onchange="calcOverall1()"
                        required
                        value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[0][13];
                        } else
                            echo "0"; ?>">  </td>
                <td></td>
            </tbody>
            <tbody>
                <td>1.3</td>
                <td>Programme Delivery</td>
                <td></td>
                <td></td>
                <td></td>
                <td><input type="text" id="score_1_3" name="score_1_3" autocomplete="off" onchange="calcOverall1()"
                        required
                        value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[0][14];
                        } else
                            echo "0"; ?>">  </td>
            </tbody>
            <tbody>
                <td>1.3.1</td>
                <td>The department must take responsibility to ensure the effective delivery of programme learning
                    outcomes.</td>
                <td>F/P</td>
                <td></td>
                <td><input type="text" id="score_1_3_1" name="score_1_3_1" autocomplete="off" onchange="calcOverall1()"
                        required
                        value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[0][15];
                        } else
                            echo "0"; ?>">  </td>
                <td></td>
            </tbody>
            <tbody>
                <td>1.3.2</td>
                <td>Students must be provided with, and briefed on, current information about (among others) the
                    objectives, structure, outline, schedule, credit value, learning outcomes, and methods of assessment
                    of the programme at the commencement of their studies.</td>
                <td>F/P</td>
                <td></td>
                <td><input type="text" id="score_1_3_2" name="score_1_3_2" autocomplete="off" onchange="calcOverall1()"
                        required
                        value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[0][16];
                        } else
                            echo "0"; ?>">  </td>
                <td></td>
            </tbody>
            <tbody>
                <td>1.3.3</td>
                <td>The programme must have an appropriate full-time coordinator and a team of academic staff (e.g., a
                    programme committee) with adequate authority for the effective delivery of the programme.</td>
                <td>F/P</td>
                <td>6.1.1, 6.2.2, PS/GGP</td>
                <td><input type="text" id="score_1_3_3" name="score_1_3_3" autocomplete="off" onchange="calcOverall1()"
                        required
                        value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[0][17];
                        } else
                            echo "0"; ?>">  </td>
                <td></td>
            </tbody>
            <tbody>
                <td>1.3.4</td>
                <td>The department must provide students with a conducive learning environment.</td>
                <td>F/P</td>
                <td>5.1.1</td>
                <td><input type="text" id="score_1_3_4" name="score_1_3_4" autocomplete="off" onchange="calcOverall1()"
                        required
                        value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[0][18];
                        } else
                            echo "0"; ?>">  </td>
                <td></td>
            </tbody>
            <tbody>
                <td>1.3.5</td>
                <td>The department must encourage innovations in teaching, learning and assessment.</td>
                <td>F/P</td>
                <td></td>
                <td><input type="text" id="score_1_3_5" name="score_1_3_5" autocomplete="off" onchange="calcOverall1()"
                        required
                        value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[0][19];
                        } else
                            echo "0"; ?>">  </td>
                <td></td>
            </tbody>
            <tbody>
                <td>1.3.6</td>
                <td>The department must obtain feedback from stakeholders to improve the delivery of the programme
                    outcomes.</td>
                <td>F/P</td>
                <td></td>
                <td><input type="text" id="score_1_3_6" name="score_1_3_6" autocomplete="off" onchange="calcOverall1()"
                        required
                        value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[0][20];
                        } else
                            echo "0"; ?>">  </td>
                <td></td>
            </tbody><tbody>
            <td colspan="4">
            <h3 style="font-weight: bold;">Overall Score</h3></td>
            <td colspan="2">


            <input type="text" id="score_1" name="score_1" autocomplete="off" onchange="calcOverall1()" required
                value="<?php if (isset($akredasi_penuh_bidang)) {
                    echo $akredasi_penuh_bidang[0][0];
                } else
                    echo "0"; ?>"></td></tbody>
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
        score_1 = (Math.round(score_1 * 100) / 100).toFixed(2);

        document.getElementById("score_1").value =score_1;
        document.getElementById("_score_1").value =score_1;
        document.getElementById("__score_1").value =score_1;
        document.getElementById("_score_1_3").value =score_1_3;
        document.getElementById("_score_1_2").value =score_1_2;
        document.getElementById("_score_1_1").value =score_1_1;
        drawChart();
    }
</script>