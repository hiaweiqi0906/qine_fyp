<div>
    <h2 class="collapsible">Area 2 - Assessment Of Student Learning</h3>
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
            <tbody style="background-color: #b7b7b7; font-weight: bold;">
                <td>2.1</td>
                <td>Relationship Between Assessment and Learning Outcomes</td>
                <td></td>
                <td></td>
                <td></td>
                <td><input type="text" id="score_2_1" name="score_2_1" autocomplete="off" onchange="calcOverall2()"
                        required
                        value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[1][1];
                        } else
                            echo "0"; ?>">  </td>
            </tbody>
            <tbody style="background-color: #ccc;">
                <td>2.1.1</td>
                <td>Assessment principles, methods and practices must be aligned to the learning outcomes of the
                    programme, consistent with the levels defined in the MQF</td>
                <td>P</td>
                <td></td>
                <td><input type="text" id="score_2_1_1" name="score_2_1_1" autocomplete="off" onchange="calcOverall2()"
                        required
                        value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[1][2];
                        } else
                            echo "0"; ?>">  </td>
                <td></td>
            </tbody>
            <tbody style="background-color: #ccc;">
                <td>2.1.2</td>
                <td>The alignment between assessment and the learning outcomes in the programme must be systematically
                    and regularly reviewed to ensure its effectiveness.</td>
                <td>P</td>
                <td></td>
                <td><input type="text" id="score_2_1_2" name="score_2_1_2" autocomplete="off" onchange="calcOverall2()"
                        required
                        value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[1][3];
                        } else
                            echo "0"; ?>">  </td>
                <td></td>
            </tbody>
            <tbody style="background-color: #b7b7b7; font-weight: bold;">
                <td>2.2</td>
                <td>Assessment Methods</td>
                <td></td>
                <td></td>
                <td></td>
                <td><input type="text" id="score_2_2" name="score_2_2" autocomplete="off" onchange="calcOverall2()"
                        required
                        value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[1][4];
                        } else
                            echo "0"; ?>">  </td>
            </tbody>
            <tbody style="background-color: #ccc;">
                <td>2.2.1</td>
                <td>There must be a variety of methods and tools that are appropriate for the assessment of learning
                    outcomes and competencies.</td>
                <td>P</td>
                <td></td>
                <td><input type="text" id="score_2_2_1" name="score_2_2_1" autocomplete="off" onchange="calcOverall2()"
                        required
                        value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[1][5];
                        } else
                            echo "0"; ?>">  </td>
                <td></td>
            </tbody>
            <tbody style="background-color: #ccc;">
                <td>2.2.2</td>
                <td>There must be mechanisms to ensure, and to periodically review, the validity, reliability,
                    integrity, currency and fairness of the assessment methods.</td>
                <td>F/P</td>
                <td></td>
                <td><input type="text" id="score_2_2_2" name="score_2_2_2" autocomplete="off" onchange="calcOverall2()"
                        required
                        value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[1][6];
                        } else
                            echo "0"; ?>">  </td>
                <td></td>
            </tbody>
            <tbody style="background-color: #ccc;">
                <td>2.2.3</td>
                <td>The frequency, methods, and criteria of student assessment — including the grading system and appeal
                    policies — must be documented and communicated to students on the commencement of the programme.
                </td>
                <td>F/P</td>
                <td></td>
                <td><input type="text" id="score_2_2_3" name="score_2_2_3" autocomplete="off" onchange="calcOverall2()"
                        required
                        value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[1][7];
                        } else
                            echo "0"; ?>">  </td>
                <td></td>
            </tbody>
            <tbody style="background-color: #ccc;">
                <td>2.2.4</td>
                <td>Changes to student assessment methods must follow established procedures and regulations and be
                    communicated to students prior to their implementation.</td>
                <td>F/P</td>
                <td></td>
                <td><input type="text" id="score_2_2_4" name="score_2_2_4" autocomplete="off" onchange="calcOverall2()"
                        required
                        value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[1][8];
                        } else
                            echo "0"; ?>">  </td>
                <td></td>
            </tbody>
            <tbody style="background-color: #b7b7b7; font-weight: bold;">
                <td>2.3</td>
                <td>Management of Student Assessment</td>
                <td></td>
                <td></td>
                <td></td>
                <td><input type="text" id="score_2_3" name="score_2_3" autocomplete="off" onchange="calcOverall2()"
                        required
                        value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[1][9];
                        } else
                            echo "0"; ?>">  </td>
            </tbody>
            <tbody style="background-color: #ccc;">
                <td>2.3.1</td>
                <td>The department and its academic staff must have adequate level of autonomy in the management of
                    student assessment. (This standard may not be applicable to certain programme arrangements.)</td>
                <td>F/P</td>
                <td></td>
                <td><input type="text" id="score_2_3_1" name="score_2_3_1" autocomplete="off" onchange="calcOverall2()"
                        required
                        value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[1][10];
                        } else
                            echo "0"; ?>">  </td>
                <td></td>
            </tbody>
            <tbody style="background-color: #ccc;">
                <td>2.3.2</td>
                <td>There must be mechanisms to ensure the security of assessment documents and records.</td>
                <td>F</td>
                <td></td>
                <td><input type="text" id="score_2_3_2" name="score_2_3_2" autocomplete="off" onchange="calcOverall2()"
                        required
                        value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[1][11];
                        } else
                            echo "0"; ?>">  </td>
                <td></td>
            </tbody>
            <tbody style="background-color: #ccc;">
                <td>2.3.3</td>
                <td>The assessment results must be communicated to students before the commencement of a new semester to
                    facilitate progression decision.</td>
                <td>F</td>
                <td></td>
                <td><input type="text" id="score_2_3_3" name="score_2_3_3" autocomplete="off" onchange="calcOverall2()"
                        required
                        value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[1][12];
                        } else
                            echo "0"; ?>">  </td>
                <td></td>
            </tbody>
            <tbody style="background-color: #ccc;">
                <td>2.3.4</td>
                <td>The department must have appropriate guidelines and mechanisms for students to appeal their course
                    results.</td>
                <td>F</td>
                <td></td>
                <td><input type="text" id="score_2_3_4" name="score_2_3_4" autocomplete="off" onchange="calcOverall2()"
                        required
                        value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[1][13];
                        } else
                            echo "0"; ?>">  </td>
                <td></td>
            </tbody>
            <tbody style="background-color: #ccc;">
                <td>2.3.5</td>
                <td>The department must periodically review the management of student assessment and act on the findings
                    of the review. (For MQF level 6 and above, the review must involve external examiners.)</td>
                <td>F/P</td>
                <td></td>
                <td><input type="text" id="score_2_3_5" name="score_2_3_5" autocomplete="off" onchange="calcOverall2()"
                        required
                        value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[1][14];
                        } else
                            echo "0"; ?>">  </td>
                <td></td>
            </tbody>
            <tbody>
            <td colspan="4">
            <h3 style="font-weight: bold;">Overall Score</h3></td>
            <td colspan="2">
            <input type="text" readonly id="score_2" name="score_2" autocomplete="off" onchange="calcOverall2()" required
                value="<?php if (isset($akredasi_penuh_bidang)) {
                    echo $akredasi_penuh_bidang[1][0];
                } else
                    echo "0"; ?>"></td></tbody>
                </thead>
        </table>
    </div>
</div>

<script>
    function calcOverall2() {
        var score_2 = Number(document.getElementById("score_2").value);
        var score_2_1 = Number(document.getElementById("score_2_1").value);
        var score_2_1_1 = Number(document.getElementById("score_2_1_1").value);
        var score_2_1_2 = Number(document.getElementById("score_2_1_2").value);
        var score_2_2 = Number(document.getElementById("score_2_2").value);
        var score_2_2_1 = Number(document.getElementById("score_2_2_1").value);
        var score_2_2_2 = Number(document.getElementById("score_2_2_2").value);
        var score_2_2_3 = Number(document.getElementById("score_2_2_3").value);
        var score_2_2_4 = Number(document.getElementById("score_2_2_4").value);
        var score_2_3 = Number(document.getElementById("score_2_3").value);
        var score_2_3_1 = Number(document.getElementById("score_2_3_1").value);
        var score_2_3_2 = Number(document.getElementById("score_2_3_2").value);
        var score_2_3_3 = Number(document.getElementById("score_2_3_3").value);
        var score_2_3_4 = Number(document.getElementById("score_2_3_4").value);
        var score_2_3_5 = Number(document.getElementById("score_2_3_5").value);

        score_2_1 = Number(Math.round((score_2_1_1 + score_2_1_2)/2 * 100) / 100).toFixed(2);
        score_2_2 = Number(Math.round((score_2_2_1 + score_2_2_2 + score_2_2_3 + score_2_2_4)/4 * 100) / 100).toFixed(2);
        score_2_3 = Number(Math.round((score_2_3_1 + score_2_3_2 + score_2_3_3 + score_2_3_4 + score_2_3_5)/5 * 100) / 100).toFixed(2);

        score_2 = Number(score_2_1) + Number(score_2_2) + Number(score_2_3);
        // score_2 += score_2_1_1 + score_2_1_2 + score_2_2_1 + score_2_2_2 + score_2_2_3 + score_2_2_4 + score_2_3_1 + score_2_3_2 + score_2_3_3 + score_2_3_4 + score_2_3_5;
        score_2 /= 3;
        score_2 = (Math.round(score_2 * 100) / 100).toFixed(2);

        document.getElementById("score_2").value = score_2;
        document.getElementById("_score_2").value = score_2;
        document.getElementById("__score_2").value = score_2;
        document.getElementById("_score_2_3").value =score_2_3;
        document.getElementById("_score_2_2").value =score_2_2;
        document.getElementById("_score_2_1").value =score_2_1;
        document.getElementById("score_2_3").value =score_2_3;
        document.getElementById("score_2_2").value =score_2_2;
        document.getElementById("score_2_1").value =score_2_1;
        drawChart();
    }
</script>