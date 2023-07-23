<h1>Maklumat Peribadi</h1>


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
        <label for="emel">Emel: </label>
    </div>
    <div class="column-10">
        <input type="email" class="input-text" name="emel" id="emel" value="<?php if (isset($user[0][1]))
            echo $user[0][1];
        else
            echo ""; ?>">
    </div>
</div>

<div class="row">

    <div class="column-2">
        <label for="password1">Password: </label>
    </div>
    <div class="column-4">
        <input type="text" class="input-text" name="password1" id="password1">
    </div>
    <div class="column-6"></div>
</div>

<div class="row">
    <div class="column-2">
        <label for="kategori">Kategori: </label>
    </div>
    <div class="column-10">

        <input type="checkbox" id="kategori1" name="kategori1" value="ISO">
        <label for="kategori1"> ISO</label><br>
        <input type="checkbox" id="kategori2" name="kategori2" value="ISMS">
        <label for="kategori2"> ISMS</label><br>
        <input type="checkbox" id="kategori3" name="kategori3" value="EKSA">
        <label for="kategori3"> EKSA</label><br>
        <input type="checkbox" id="kategori4" name="kategori4" value="MQA">
        <label for="kategori4"> MQA</label><br>
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

<div class="row" style="display: none;">
    <div class="column-2">
        <label for="alamat-tempat-bekerja">Alamat: </label>
    </div>
    <div class="column-10">
        <input type="text" class="input-text" value="<?php if (isset($user[0][5]))
            echo $user[0][5];
        else
            echo " "; ?>" name="alamat-tempat-bekerja" id="alamat-tempat-bekerja">
    </div>
</div>

<div class="row">
    <div class="column-2">
        <label for="fakulti">Fakulti: </label>
    </div>
    <select name="fakulti" id="fakulti">
            <?php if (isset($user[0][4]))
                echo "<option selected>" . $user[0][4] . "</option>";
            include('../components/bidang_options.php');
            ?>
        </select>

    <div class="column-2">
        <label for="bidang">Bidang: </label>
    </div>
    <select name="bidang" id="bidang">
            <?php if (isset($user[0][4]))
                echo "<option selected>" . $user[0][4] . "</option>";
            include('../components/bidang_options.php');
            ?>
        </select>
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