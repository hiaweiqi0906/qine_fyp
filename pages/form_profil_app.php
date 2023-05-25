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
        <label for="no-kad-pengenalan">Nombor Kad Pengenalan: </label>
    </div>
    <div class="column-10">
        <input type="text" class="input-text" value="<?php if (isset($user[0][2]))
            echo $user[0][2];
        else
            echo ""; ?>" name="no-kad-pengenalan" id="no-kad-pengenalan">
    </div>
</div>

<div class="row">
    <div class="column-2">
        <label for="alamat-tempat-bekerja">Alamat: </label>
    </div>
    <div class="column-10">
        <input type="text" class="input-text" value="<?php if (isset($user[0][5]))
            echo $user[0][5];
        else
            echo ""; ?>" name="alamat-tempat-bekerja" id="alamat-tempat-bekerja">
    </div>
</div>



<div class="row">
    <div class="column-2">
        <label for="fakulti">Fakulti: </label>
    </div>
    <div class="column-4">
        <input type="text" value="<?php if (isset($user[0][3]))
            echo $user[0][3];
        else
            echo ""; ?>" class="input-text" name="fakulti" id="fakulti">
    </div>

    <div class="column-2">
        <label for="bidang">Bidang: </label>
    </div>
    <div class="column-4">
        <input type="text" value="<?php if (isset($user[0][9]))
            echo $user[0][9];
        else
            echo ""; ?>" class="input-text" name="bidang" id="bidang">
    </div>
</div>

<div class="row">

    <div class="column-2">
        <label for="no-tel-bimbit">No Tel. Bimbit: </label>
    </div>
    <div class="column-10">
        <input type="text" class="input-text" value="<?php if (isset($user[0][6]))
            echo $user[0][6];
        else
            echo ""; ?>" name="no-tel-bimbit" id="no-tel-bimbit">
    </div>
</div>
<br>
<hr>
<br>