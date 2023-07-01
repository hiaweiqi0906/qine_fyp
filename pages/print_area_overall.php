<div class="main-body">
    <div class="">
        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <td colspan="2">
                    <h3>ACHIEVEMENT BASED ON AREAS OF EVALUATION FOR COPPA (SECOND EDITION, 2017)</h3>
                    </td>
                <td><h3>SCORE</h3></td>
                </tr>
                <tr>
                    <td>Area 1</td>
                    <td>Programme Development And Delivery</td>

                    <td><input readonly type="text" id="_score_1" name="score_1" autocomplete="off" onchange="calcOverall1()"
                            required value="<?php if (isset($akredasi_penuh_bidang)) {
                                echo $akredasi_penuh_bidang[0][0];
                            } else
                                echo "0"; ?>">
                    </td>
                </tr>
                <tr>
                    <td>Area 2</td>
                    <td>Programme Development And Delivery</td>

                    <td>
                        <input readonly type="text" id="_score_2" name="score_2" autocomplete="off" onchange="calcOverall2()"
                            required value="<?php if (isset($akredasi_penuh_bidang)) {
                                echo $akredasi_penuh_bidang[1][0];
                            } else
                                echo "0"; ?>">
                    </td>
                </tr>

                <tr>
                    <td>Area 3</td>
                    <td>Student Selection and Support Services</td>

                    <td>
                        <input readonly type="text" id="_score_3" name="score_3" autocomplete="off" onchange="calcOverall3()"
                            required value="<?php if (isset($akredasi_penuh_bidang)) {
                                echo $akredasi_penuh_bidang[2][0];
                            } else
                                echo "0"; ?>">
                    </td>
                </tr>

                <tr>
                    <td>Area 4</td>
                    <td>Academic Staff</td>

                    <td>
                        <input readonly type="text" id="_score_4" name="score_4" autocomplete="off" onchange="calcOverall4()"
                            required value="<?php if (isset($akredasi_penuh_bidang)) {
                                echo $akredasi_penuh_bidang[3][0];
                            } else
                                echo "0"; ?>">
                    </td>
                </tr>

                <tr>
                    <td>Area 5</td>
                    <td>Educational Resources</td>

                    <td>
                        <input readonly type="text" id="_score_5" name="score_5" autocomplete="off" onchange="calcOverall5()"
                            required value="<?php if (isset($akredasi_penuh_bidang)) {
                                echo $akredasi_penuh_bidang[4][0];
                            } else
                                echo "0"; ?>">
                    </td>
                </tr>

                <tr>
                    <td>Area 6</td>
                    <td>Programme Management</td>

                    <td>
                        <input readonly type="text" id="_score_6" name="score_6" autocomplete="off" onchange="calcOverall6()"
                            required value="<?php if (isset($akredasi_penuh_bidang)) {
                                echo $akredasi_penuh_bidang[5][0];
                            } else
                                echo "0"; ?>">
                    </td>
                </tr>

                <tr>
                    <td>Area 7</td>
                    <td>Programme Monitoring, Review and Continual Quality Improvement</td>

                    <td>
                        <input readonly type="text" id="_score_7" name="score_7" autocomplete="off" onchange="calcOverall7()"
                            required value="<?php if (isset($akredasi_penuh_bidang)) {
                                echo $akredasi_penuh_bidang[6][0];
                            } else
                                echo "0"; ?>">
                    </td>
                </tr>
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

        document.getElementById("score_1").value = score_1;
    }
</script>