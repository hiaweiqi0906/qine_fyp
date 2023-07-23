<div>
    <script>

    </script>
    <h2 class="collapsible">Area 7 - Programme Monitoring, Review and Continual Quality Improvement</h3>
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
                <td>7.1</td>
                <td>Mechanism for Programme Monitoring, Review and Continual Quality Improve</td>
                <td></td>
                <td></td>
                <td></td>
                <td><input type="text" id="score_7_1" name="score_7_1" autocomplete="off" required onchange="calcOverall7()"
                        value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[6][1];
                        } else
                            echo "0"; ?>">
                        </td>
            </tbody>
            <tbody style="background-color: #ccc;">
                <td>7.1.1</td>
                <td>The department must have clear policies and appropriate mechanisms for regular monitoring and review
                    of the programme.</td>
                <td>F</td>
                <td></td>
                <td><input type="text" id="score_7_1_1" name="score_7_1_1" autocomplete="off" required onchange="calcOverall7()"
                        value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[6][2];
                        } else
                            echo "0"; ?>">
                        </td>
                <td></td>
            </tbody>
            <tbody style="background-color: #ccc;">
                <td>7.1.2</td>
                <td>The department must have a Quality Assurance (QA) unit for internal quality assurance of the
                    department to work hand-in-hand with the QA unit of the HEP.</td>
                <td>F</td>
                <td></td>
                <td><input type="text" id="score_7_1_2" name="score_7_1_2" autocomplete="off" required onchange="calcOverall7()"
                        value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[6][3];
                        } else
                            echo "0"; ?>">
                        </td>
                <td></td>
            </tbody>
            <tbody style="background-color: #ccc;">
                <td>7.1.3</td>
                <td>The department must have an internal programme monitoring and review committee with a designated
                    head responsible for continual review of the programme to ensure its currency and relevancy.</td>
                <td>F/P</td>
                <td></td>
                <td><input type="text" id="score_7_1_3" name="score_7_1_3" autocomplete="off" required onchange="calcOverall7()"
                        value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[6][4];
                        } else
                            echo "0"; ?>">
                        </td>
                <td></td>
            </tbody>
            <tbody style="background-color: #ccc;">
                <td>7.1.4</td>
                <td>The department’s review system must constructively engage stakeholders, including the alumni and
                    employers as well as the external experts, whose views are taken into consideration.</td>
                <td>F/P</td>
                <td>1.2.3</td>
                <td><input type="text" id="score_7_1_4" name="score_7_1_4" autocomplete="off" required onchange="calcOverall7()"
                        value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[6][5];
                        } else
                            echo "0"; ?>">
                        </td>
                <td></td>
            </tbody>
            <tbody style="background-color: #ccc;">
                <td>7.1.5</td>
                <td>The department must make the programme review report accessible to stakeholders.</td>
                <td>F/P</td>
                <td></td>
                <td><input type="text" id="score_7_1_5" name="score_7_1_5" autocomplete="off" required onchange="calcOverall7()"
                        value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[6][6];
                        } else
                            echo "0"; ?>">
                        </td>
                <td></td>
            </tbody>
            <tbody style="background-color: #ccc;">
                <td>7.1.6</td>
                <td>Various aspects of student performance, progression, attrition, graduation and employment must be
                    analysed for the purpose of continual quality improvement.</td>
                <td>P</td>
                <td>1.1.2, 1.2.2, 6.1.6</td>
                <td><input type="text" id="score_7_1_6" name="score_7_1_6" autocomplete="off" required onchange="calcOverall7()"
                        value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[6][7];
                        } else
                            echo "0"; ?>">
                        </td>
                <td></td>
            </tbody>
            <tbody style="background-color: #ccc;">
                <td>7.1.7</td>
                <td>In collaborative arrangements, the partners involved must share the responsibilities of programme
                    monitoring and review.</td>
                <td>F/P</td>
                <td>6.1.5</td>
                <td><input type="text" id="score_7_1_7" name="score_7_1_7" autocomplete="off" required onchange="calcOverall7()"
                        value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[6][8];
                        } else
                            echo "0"; ?>">
                        </td>
                <td></td>
            </tbody>
            <tbody style="background-color: #ccc;">
                <td>7.1.8</td>
                <td>The findings of a programme review must be presented to the HEP for its attention and further
                    action.</td>
                <td>F</td>
                <td></td>
                <td><input type="text" id="score_7_1_8" name="score_7_1_8" autocomplete="off" required onchange="calcOverall7()"
                        value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[6][9];
                        } else
                            echo "0"; ?>">
                        </td>
                <td></td>
            </tbody>
            <tbody style="background-color: #ccc;">
                <td>7.1.9</td>
                <td>There must be an integral link between the departmental quality assurance processes and the
                    achievement of the institutional purpose.</td>
                <td>F</td>
                <td></td>
                <td><input type="text" id="score_7_1_9" name="score_7_1_9" autocomplete="off" required onchange="calcOverall7()"
                        value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[6][10];
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
<input type="text" id="score_7" name="score_7" readonly autocomplete="off" required
                value="<?php if (isset($akredasi_penuh_bidang)) {
                    echo $akredasi_penuh_bidang[6][0];
                } else
                echo "0"; ?>" >
                </td>
                </tbody>
                </thead>
        </table>
    </div>
</div>

<script>
    function calcOverall7() {
        var overall_score = Number(document.getElementById("score_7").value);
        var score_7_1 = Number(document.getElementById("score_7_1").value);
        var score_7_1_1 = Number(document.getElementById("score_7_1_1").value);
        var score_7_1_2 = Number(document.getElementById("score_7_1_2").value);
        var score_7_1_3 = Number(document.getElementById("score_7_1_3").value);
        var score_7_1_4 = Number(document.getElementById("score_7_1_4").value);
        var score_7_1_5 = Number(document.getElementById("score_7_1_5").value);
        var score_7_1_6 = Number(document.getElementById("score_7_1_6").value);
        var score_7_1_7 = Number(document.getElementById("score_7_1_7").value);
        var score_7_1_8 = Number(document.getElementById("score_7_1_8").value);
        var score_7_1_9 = Number(document.getElementById("score_7_1_9").value);

        score_7_1 = Number(Math.round((score_7_1_1 + score_7_1_2 + score_7_1_3 + score_7_1_4 + score_7_1_5 + score_7_1_6 + score_7_1_7 + score_7_1_8 + score_7_1_9)/9 * 100) / 100).toFixed(2);

        overall_score = Number(score_7_1);
        overall_score = (Math.round(overall_score * 100) / 100).toFixed(2);

        document.getElementById("score_7").value =overall_score;
        document.getElementById("_score_7").value =overall_score;
        document.getElementById("__score_7").value =overall_score;
        document.getElementById("_score_7_1").value =score_7_1;
        document.getElementById("score_7_1").value =score_7_1;
        drawChart();
    }
</script>