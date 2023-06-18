<h1>Maklumat Peribadi</h1>
<div class="row">
    <div class="column-5"></div>
    <div class="column-2">
        <img src="<?php if (isset($user[0][7]))
            echo $user[0][7];
        else
            echo "../img/lehqine.jpg" ?>" class="image" alt="" width="200" height="200" />
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
        <input type="date" class="input-text" value="<?php if (isset($user[0][4]))
            echo $user[0][4];
        else
            echo ""; ?>" name="tarikh" id="tarikh">
    </div>
</div>

<div class="row">
    <div class="column-2">
        <label for="bidang">bidang: </label>
    </div>
    <div class="column-10">
        <input type="text" class="input-text" value="<?php if (isset($user[0][5]))
            echo $user[0][5];
        else
            echo ""; ?>" name="bidang" id="bidang">
    </div>
</div>


<div class="row">

    <div class="column-2">
        <label for="description">description: </label>
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
        <label for="masa">masa: </label>
    </div>
    <div class="column-10">
        <input type="text" class="input-text" value="<?php if (isset($user[0][6]))
            echo $user[0][6];
        else
            echo ""; ?>" name="masa" id="masa">
    </div>
</div>
<br>
<hr>
<br>