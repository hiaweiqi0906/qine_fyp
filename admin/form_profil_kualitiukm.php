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
        <label for="no-kad-pengenalan">Nombor Kad Pengenalan: </label>
    </div>
    <div class="column-10">
        <input type="text" class="input-text" value="<?php if (isset($user[0][4]))
            echo $user[0][4];
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