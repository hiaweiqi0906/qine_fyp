<div>
    <h2 class="collapsible">Area 5 - Educational Resources</h3>
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
                <td>5.1</td>
                <td>Physical Facilities</td>
                <td></td>
                <td></td>
                <td></td>
                <td><input type="text" id="score_5_1" name="score_5_1" autocomplete="off" onchange="calcOverall5()"
                        required value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[4][1];
                        } else
                            echo "0"; ?>">  </td>
            </tbody>
            <tbody>
                <td>5.1.1</td>
                <td>The programme must have sufficient and appropriate physical facilities and educational resources to
                    ensure its effective delivery, including facilities for practical-based programmes and for those
                    with special needs.</td>
                <td>F/P</td>
                <td></td>
                <td><input type="text" id="score_5_1_1" name="score_5_1_1" autocomplete="off" onchange="calcOverall5()"
                        required value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[4][2];
                        } else
                            echo "0"; ?>">  </td>
                <td></td>
            </tbody>
            <tbody>
                <td>5.1.2</td>
                <td>The physical facilities must comply with the relevant laws and regulations.</td>
                <td>F</td>
                <td></td>
                <td><input type="text" id="score_5_1_2" name="score_5_1_2" autocomplete="off" onchange="calcOverall5()"
                        required value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[4][3];
                        } else
                            echo "0"; ?>">  </td>
                <td></td>
            </tbody>
            <tbody>
                <td>5.1.3</td>
                <td>The library or resource centre must have adequate and up-to-date reference materials and qualified
                    staff that meet the needs of the programme and research amongst academic staff and students.</td>
                <td>F</td>
                <td></td>
                <td><input type="text" id="score_5_1_3" name="score_5_1_3" autocomplete="off" onchange="calcOverall5()"
                        required value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[4][4];
                        } else
                            echo "0"; ?>">  </td>
                <td></td>
            </tbody>
            <tbody>
                <td>5.1.4</td>
                <td>The educational resources, services and facilities must be maintained and periodically reviewed to
                    improve the quality and appropriateness.</td>
                <td>F/P</td>
                <td></td>
                <td><input type="text" id="score_5_1_4" name="score_5_1_4" autocomplete="off" onchange="calcOverall5()"
                        required value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[4][5];
                        } else
                            echo "0"; ?>">  </td>
                <td></td>
            </tbody>
            <tbody>
                <td>5.2</td>
                <td>Research and Development</td>
                <td></td>
                <td></td>
                <td></td>
                <td><input type="text" id="score_5_2" name="score_5_2" autocomplete="off" onchange="calcOverall5()"
                        required value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[4][6];
                        } else
                            echo "0"; ?>">  </td>
            </tbody>
            <tbody>
                <td>5.2.1</td>
                <td>The department must have a research policy with adequate facilities and resources to sustain them.
                </td>
                <td>F</td>
                <td></td>
                <td><input type="text" id="score_5_2_1" name="score_5_2_1" autocomplete="off" onchange="calcOverall5()"
                        required value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[4][7];
                        } else
                            echo "0"; ?>">  </td>
                <td></td>
            </tbody>
            <tbody>
                <td>5.2.2</td>
                <td>The interaction between research and learning must be reflected in the curriculum, influence current
                    teaching, and encourage and prepare students for engagement in research, scholarship and
                    development.</td>
                <td>F/P</td>
                <td></td>
                <td><input type="text" id="score_5_2_2" name="score_5_2_2" autocomplete="off" onchange="calcOverall5()"
                        required value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[4][8];
                        } else
                            echo "0"; ?>">  </td>
                <td></td>
            </tbody>
            <tbody>
                <td>5.2.3</td>
                <td>The department must periodically review its research resources and facilities and take appropriate
                    action to enhance its research capabilities and to promote a conducive research environment.</td>
                <td>F</td>
                <td></td>
                <td><input type="text" id="score_5_2_3" name="score_5_2_3" autocomplete="off" onchange="calcOverall5()"
                        required value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[4][9];
                        } else
                            echo "0"; ?>">  </td>
                <td></td>
            </tbody>
            <tbody>
                <td>5.3</td>
                <td>Financial Resources</td>
                <td></td>
                <td></td>
                <td></td>
                <td><input type="text" id="score_5_3" name="score_5_3" autocomplete="off" onchange="calcOverall5()"
                        required value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[4][10];
                        } else
                            echo "0"; ?>">  </td>
            </tbody>
            <tbody>
                <td>5.3.1</td>
                <td>The HEP must demonstrate financial viability and sustainability for the programme.</td>
                <td>F</td>
                <td></td>
                <td><input type="text" id="score_5_3_1" name="score_5_3_1" autocomplete="off" onchange="calcOverall5()"
                        required value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[4][11];
                        } else
                            echo "0"; ?>">  </td>
                <td></td>
            </tbody>
            <tbody>
                <td>5.3.2</td>
                <td>The department must have clear procedures to ensure that its financial resources are sufficient and
                    managed efficiently.</td>
                <td>F</td>
                <td></td>
                <td><input type="text" id="score_5_3_2" name="score_5_3_2" autocomplete="off" onchange="calcOverall5()"
                        required value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[4][12];
                        } else
                            echo "0"; ?>">  </td>
                <td></td>
            </tbody>
            <tbody>
                <td>5.3.3</td>
                <td>The HEP must have a clear line of responsibility and authority for budgeting and resource allocation
                    that takes into account the specific needs of the department.</td>
                <td>F</td>
                <td></td>
                <td><input type="text" id="score_5_3_3" name="score_5_3_3" autocomplete="off" onchange="calcOverall5()"
                        required value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[4][13];
                        } else
                            echo "0"; ?>">  </td>
                <td></td>
            </tbody><tbody>
            <td colspan="4">
            <h3 style="font-weight: bold;">Overall Score</h3></td>
            <td colspan="2">

                <input type="text" id="score_5" name="score_5" autocomplete="off" onchange="calcOverall5()" required value="<?php if (isset($akredasi_penuh_bidang)) {
                    echo $akredasi_penuh_bidang[4][0];
                } else
                echo "0"; ?>"> </thead>
                </td>
            </tbody>
        </table>
    </div>
</div>

<script>
    function calcOverall5() {
        var score_5 = Number(document.getElementById("score_5").value);
        var score_5_1 = Number(document.getElementById("score_5_1").value);
        var score_5_1_1 = Number(document.getElementById("score_5_1_1").value);
        var score_5_1_2 = Number(document.getElementById("score_5_1_2").value);
        var score_5_1_3 = Number(document.getElementById("score_5_1_3").value);
        var score_5_1_4 = Number(document.getElementById("score_5_1_4").value);
        var score_5_2 = Number(document.getElementById("score_5_2").value);
        var score_5_2_1 = Number(document.getElementById("score_5_2_1").value);
        var score_5_2_2 = Number(document.getElementById("score_5_2_2").value);
        var score_5_2_3 = Number(document.getElementById("score_5_2_3").value);
        var score_5_3 = Number(document.getElementById("score_5_3").value);
        var score_5_3_1 = Number(document.getElementById("score_5_3_1").value);
        var score_5_3_2 = Number(document.getElementById("score_5_3_2").value);
        var score_5_3_3 = Number(document.getElementById("score_5_3_3").value);

        score_5 = score_5_1 + score_5_1_1 + score_5_1_2 + score_5_1_3 + score_5_1_4 + score_5_2 + score_5_2_1 + score_5_2_2 + score_5_2_3 + score_5_3 + + score_5_3_1 + score_5_3_2 + score_5_3_3;
        score_5 /= 13;
        score_5 = (Math.round(score_5 * 100) / 100).toFixed(2);

        document.getElementById("score_5").value = score_5;
        document.getElementById("_score_5").value = score_5;
        document.getElementById("__score_5").value = score_5;
        document.getElementById("_score_5_3").value =score_5_3;
        document.getElementById("_score_5_2").value =score_5_2;
        document.getElementById("_score_5_1").value =score_5_1;
        drawChart();
    }
</script>