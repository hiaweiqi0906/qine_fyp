<h1 style="font-size:2.5rem;">Maklumat Program</h1>
<div class="row">
    <div class="column-5"></div>
    <div class="column-2">
        <img src="<?php if (isset($user[0][3]))
            echo $user[0][3];
        else
            echo "../img/program.jpg" ?>" class="image" alt="" width="200" height="200" />
            <input type="file" name="profil-img" id="profil-img">
        </div>
        <div class="column-5"></div>
    </div>

    <div class="row">
        <div class="column-2">
            <label for="nama">Nama: </label>
        </div>
        <div class="column-10">
            <input type="text" class="input-text" name="nama" id="nama" value="<?php if (isset($user[0][1]))
            echo $user[0][1];
        else
            echo ""; ?>">
    </div>

</div>

<div class="row">

    <div class="column-2">
        <label for="tarikh">Tarikh: </label>
    </div>
    <div class="column-10">
        <input type="date" class="input-text" value="<?php if (isset($user[0][2]))
            echo $user[0][2];
        else
            echo ""; ?>" name="tarikh" id="tarikh">
    </div>
</div>

<div class="row">
    <div class="column-2">
        <label for="bidang">Bidang: </label>
    </div>
    <div class="column-10">
    <select name="bidang" id="bidang">
            <?php if (isset($user[0][4]))
                echo "<option selected>" . $user[0][4] . "</option>";
            include('../components/bidang_options.php');
            ?>
        </select>
    </div>
</div>


<div class="row">

    <div class="column-2">
        <label for="description">Description: </label>
    </div>
    <div class="column-10">
        <input type="text" class="input-text" value="<?php if (isset($user[0][6]))
            echo $user[0][6];
        else
            echo ""; ?>" name="description" id="description">
    </div>
</div>

<div class="row">

    <div class="column-2">
        <label for="masa">URL File Drive Link: </label>
    </div>
    <div class="column-10">
        <input type="text" class="input-text" value="<?php if (isset($user[0][7]))
            echo $user[0][7];
        else
            echo ""; ?>" name="masa" id="masa">
    </div>
</div>
<br>
<hr>
<br>