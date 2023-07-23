<div>
    <h2 class="collapsible">Area 4 - Academic Staff</h3>
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
                <td>4.1</td>
                <td>Recruitment and Management</td>
                <td></td>
                <td></td>
                <td></td>
                <td><input type="text" id="score_4_1" name="score_4_1" autocomplete="off" onchange="calcOverall4()"
                        required
                        value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[3][1];
                        } else
                            echo "0"; ?>">  </td>
            </tbody>
            <tbody style="background-color: #ccc;">
                <td>4.1.1</td>
                <td>The department must have a clearly defined plan for its academic manpower needs consistent with
                    institutional policies and programme requirements.</td>
                <td>F</td>
                <td></td>
                <td><input type="text" id="score_4_1_1" name="score_4_1_1" autocomplete="off" onchange="calcOverall4()"
                        required
                        value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[3][2];
                        } else
                            echo "0"; ?>">  </td>
                <td></td>
            </tbody>
            <tbody style="background-color: #ccc;">
                <td>4.1.2</td>
                <td>The department must have a clear and documented academic staff recruitment policy where the criteria
                    for selection are based primarily on academic merit and/or relevant experience.</td>
                <td>F</td>
                <td></td>
                <td><input type="text" id="score_4_1_2" name="score_4_1_2" autocomplete="off" onchange="calcOverall4()"
                        required
                        value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[3][3];
                        } else
                            echo "0"; ?>">  </td>
                <td></td>
            </tbody>
            <tbody style="background-color: #ccc;">
                <td>4.1.3</td>
                <td>The staff–student ratio for the programme must be appropriate to the teaching-learning methods and
                    comply with the programme standards for the discipline.</td>
                <td>F/P</td>
                <td>GL: Academic Staff Workload</td>
                <td><input type="text" id="score_4_1_3" name="score_4_1_3" autocomplete="off" onchange="calcOverall4()"
                        required
                        value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[3][4];
                        } else
                            echo "0"; ?>">  </td>
                <td></td>
            </tbody>
            <tbody style="background-color: #ccc;">
                <td>4.1.4</td>
                <td>The department must have adequate and qualified academic staff responsible for implementing the
                    programme.</td>
                <td>F/P</td>
                <td></td>
                <td><input type="text" id="score_4_1_4" name="score_4_1_4" autocomplete="off" onchange="calcOverall4()"
                        required
                        value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[3][5];
                        } else
                            echo "0"; ?>">  </td>
                <td></td>
            </tbody>
            <tbody style="background-color: #ccc;">
                <td>4.1.5</td>
                <td>The policy of the department must reflect an equitable distribution of responsibilities among the
                    academic staff.</td>
                <td>F/P</td>
                <td></td>
                <td><input type="text" id="score_4_1_5" name="score_4_1_5" autocomplete="off" onchange="calcOverall4()"
                        required
                        value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[3][6];
                        } else
                            echo "0"; ?>">  </td>
                <td></td>
            </tbody>
            <tbody style="background-color: #ccc;">
                <td>4.1.6</td>
                <td>The recruitment policy for a particular programme must seek diversity among the academic staff in
                    terms of experience, approaches and backgrounds.</td>
                <td>F/P</td>
                <td></td>
                <td><input type="text" id="score_4_1_6" name="score_4_1_6" autocomplete="off" onchange="calcOverall4()"
                        required
                        value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[3][7];
                        } else
                            echo "0"; ?>">  </td>
                <td></td>
            </tbody>
            <tbody style="background-color: #ccc;">
                <td>4.1.7</td>
                <td>Policies and procedures for recognition through promotion, salary increment or other remuneration
                    must be clear, transparent and based on merit.</td>
                <td>F</td>
                <td></td>
                <td><input type="text" id="score_4_1_7" name="score_4_1_7" autocomplete="off" onchange="calcOverall4()"
                        required
                        value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[3][8];
                        } else
                            echo "0"; ?>">  </td>
                <td></td>
            </tbody>
            <tbody style="background-color: #ccc;">
                <td>4.1.8</td>
                <td>The department must have national and international linkages to provide for the involvement of
                    experienced academics, professionals and practitioners in order to enhance teaching and learning in
                    the programme.</td>
                <td>F</td>
                <td></td>
                <td><input type="text" id="score_4_1_8" name="score_4_1_8" autocomplete="off" onchange="calcOverall4()"
                        required
                        value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[3][9];
                        } else
                            echo "0"; ?>">  </td>
                <td></td>
            </tbody>
            <tbody style="background-color: #b7b7b7; font-weight: bold;">
                <td>4.2</td>
                <td>Service and Development</td>
                <td></td>
                <td></td>
                <td></td>
                <td><input type="text" id="score_4_2" name="score_4_2" autocomplete="off" onchange="calcOverall4()"
                        required
                        value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[3][10];
                        } else
                            echo "0"; ?>">  </td>
            </tbody>
            <tbody style="background-color: #ccc;">
                <td>4.2.1</td>
                <td>The department must have policies addressing matters related to service, development and appraisal
                    of the academic staff.</td>
                <td>F</td>
                <td></td>
                <td><input type="text" id="score_4_2_1" name="score_4_2_1" autocomplete="off" onchange="calcOverall4()"
                        required
                        value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[3][11];
                        } else
                            echo "0"; ?>">  </td>
                <td></td>
            </tbody>
            <tbody style="background-color: #ccc;">
                <td>4.2.2</td>
                <td>The department must provide opportunities for academic staff to focus on their respective areas of
                    expertise.</td>
                <td>F</td>
                <td></td>
                <td><input type="text" id="score_4_2_2" name="score_4_2_2" autocomplete="off" onchange="calcOverall4()"
                        required
                        value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[3][12];
                        } else
                            echo "0"; ?>">  </td>
                <td></td>
            </tbody>
            <tbody style="background-color: #ccc;">
                <td>4.2.3</td>
                <td>The HEP must have clear policies on conflict of interest and professional conduct, including
                    procedures for handling disciplinary cases among academic staff.</td>
                <td>F</td>
                <td></td>
                <td><input type="text" id="score_4_2_3" name="score_4_2_3" autocomplete="off" onchange="calcOverall4()"
                        required
                        value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[3][13];
                        } else
                            echo "0"; ?>">  </td>
                <td></td>
            </tbody>
            <tbody style="background-color: #ccc;">
                <td>4.2.4</td>
                <td>The HEP must have mechanisms and processes for periodic student evaluation of the academic staff for
                    quality improvement.</td>
                <td>F</td>
                <td></td>
                <td><input type="text" id="score_4_2_4" name="score_4_2_4" autocomplete="off" onchange="calcOverall4()"
                        required
                        value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[3][14];
                        } else
                            echo "0"; ?>">  </td>
                <td></td>
            </tbody>
            <tbody style="background-color: #ccc;">
                <td>4.2.5</td>
                <td>The department must have a development programme for new academic staff and continuous professional
                    enhancement for existing staff.</td>
                <td>F</td>
                <td></td>
                <td><input type="text" id="score_4_2_5" name="score_4_2_5" autocomplete="off" onchange="calcOverall4()"
                        required
                        value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[3][15];
                        } else
                            echo "0"; ?>">  </td>
                <td></td>
            </tbody>
            <tbody style="background-color: #ccc;">
                <td>4.2.6</td>
                <td>The HEP must provide opportunities for academic staff to participate in professional, academic and
                    other relevant activities, at national and international levels to obtain professional
                    qualifications to enhance teaching-learning experience.</td>
                <td>F</td>
                <td></td>
                <td><input type="text" id="score_4_2_6" name="score_4_2_6" autocomplete="off" onchange="calcOverall4()"
                        required
                        value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[3][16];
                        } else
                            echo "0"; ?>">  </td>
                <td></td>
            </tbody>
            <tbody style="background-color: #ccc;">
                <td>4.2.7</td>
                <td>The department must encourage and facilitate its academic staff to play an active role in community
                    and industry engagement activities.</td>
                <td>F</td>
                <td></td>
                <td><input type="text" id="score_4_2_7" name="score_4_2_7" autocomplete="off" onchange="calcOverall4()"
                        required
                        value="<?php if (isset($akredasi_penuh_bidang)) {
                            echo $akredasi_penuh_bidang[3][17];
                        } else
                            echo "0"; ?>">  </td>
                <td></td>
            </tbody>
            <tbody>
            <td colspan="4">
            <h3 style="font-weight: bold;">Overall Score</h3></td>
            <td colspan="2">
            <input type="text" readonly id="score_4" name="score_4" autocomplete="off" onchange="calcOverall4()" required
                value="<?php if (isset($akredasi_penuh_bidang)) {
                    echo $akredasi_penuh_bidang[3][0];
                } else
                    echo "0"; ?>"></td></tbody>
                </thead>
        </table>
    </div>
</div>
<script>
    function calcOverall4() {
        var score_4 = Number(document.getElementById("score_4").value);
        var score_4_1 = Number(document.getElementById("score_4_1").value);
        var score_4_1_1 = Number(document.getElementById("score_4_1_1").value);
        var score_4_1_2 = Number(document.getElementById("score_4_1_2").value);
        var score_4_1_3 = Number(document.getElementById("score_4_1_3").value);
        var score_4_1_4 = Number(document.getElementById("score_4_1_4").value);
        var score_4_1_5 = Number(document.getElementById("score_4_1_5").value);
        var score_4_1_6 = Number(document.getElementById("score_4_1_6").value);
        var score_4_1_7 = Number(document.getElementById("score_4_1_7").value);
        var score_4_1_8 = Number(document.getElementById("score_4_1_8").value);
        var score_4_2 = Number(document.getElementById("score_4_2").value);
        var score_4_2_1 = Number(document.getElementById("score_4_2_1").value);
        var score_4_2_2 = Number(document.getElementById("score_4_2_2").value);
        var score_4_2_3 = Number(document.getElementById("score_4_2_3").value);
        var score_4_2_4 = Number(document.getElementById("score_4_2_4").value);
        var score_4_2_5 = Number(document.getElementById("score_4_2_5").value);
        var score_4_2_6 = Number(document.getElementById("score_4_2_6").value);
        var score_4_2_7 = Number(document.getElementById("score_4_2_7").value);

        score_4_1 = Number(Math.round((score_4_1_1 + score_4_1_2 + score_4_1_3 + score_4_1_4 + score_4_1_5 + score_4_1_6 + score_4_1_7 + score_4_1_8)/8 * 100) / 100).toFixed(2);
        score_4_2 = Number(Math.round((score_4_2_1 + score_4_2_2 + score_4_2_3 + score_4_2_4 + score_4_2_5 + score_4_2_6 + score_4_2_7)/7 * 100) / 100).toFixed(2);

        score_4 = Number(score_4_1) + Number(score_4_2);

        score_4 /= 2;
        score_4 = (Math.round(score_4 * 100) / 100).toFixed(2);
        document.getElementById("score_4").value = score_4;
        document.getElementById("_score_4").value = score_4;
        document.getElementById("__score_4").value = score_4;

        document.getElementById("_score_4_1").value =score_4_1;
        document.getElementById("_score_4_2").value =score_4_2;

        document.getElementById("score_4_1").value =score_4_1;
        document.getElementById("score_4_2").value =score_4_2;


        drawChart();
    }
</script>