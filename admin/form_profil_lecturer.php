<h1>Maklumat Peribadi</h1>
<div class="row">
    <div class="column-5"></div>
    <div class="column-2">
        <img src="<?php  if(isset($user[0][8])) echo $user[0][8]; else echo "../img/profile.png"?>" class="image" alt="" width="200" height="200">
        <input type="file" name="profil-img" id="profil-img">
</div>
    <div class="column-5"></div>
</div>
<div class="row">
<div class="column-2">
        <label for="gelaran">Gelaran: </label>
    </div>
    <div class="column-6" >
        <input type="text" class="input-text" name="gelaran" id="gelaran" value="<?php if(isset($user[0][11])) echo $user[0][11]; else echo"";?>">
    </div>
    <div class="column-2">
        <label for="nama">Nama: </label>
    </div>
    <div class="column-6" >
        <input type="text" class="input-text" name="nama" id="nama" value="<?php if(isset($user[0][2])) echo $user[0][2]; else echo"";?>">
    </div>

    </div>

    <div class="row">

    <div class="column-2">
        <label for="no-kad-pengenalan">Nombor Kad Pengenalan: </label>
    </div>
    <div class="column-4" >
        <input type="text" class="input-text" value="<?php if(isset($user[0][3])) echo $user[0][3]; else echo"";?>" name="no-kad-pengenalan" id="no-kad-pengenalan">
    </div>
    <div class="column-6"></div>
    </div>

    <div class="row">
    <div class="column-2">
        <label for="alamat-tempat-bekerja">Alamat: </label>
    </div>
    <div class="column-10" >
        <input type="text" class="input-text" value="<?php if(isset($user[0][6])) echo $user[0][6]; else echo"";?>" name="alamat-tempat-bekerja" id="alamat-tempat-bekerja">
    </div>
    </div>

    <div class="row">
    <div class="column-2">
        <label for="poskod">Poskod: </label>
    </div>
    <div class="column-4" >
        <input type="text" class="input-text" value="<?php if(isset($user[0][12])) echo $user[0][12]; else echo"";?>" name="poskod" id="poskod">
    </div>
    <div class="column-2">
        <label for="daerah">Daerah: </label>
    </div>
    <div class="column-4" >
        <input type="text" class="input-text" value="<?php if(isset($user[0][13])) echo $user[0][13]; else echo"";?>" name="daerah" id="daerah">
    </div>
    </div>

    <div class="row">
    <div class="column-2">
        <label for="negeri">Negeri: </label>
    </div>
    <div class="column-4" >
        <input type="text" value="<?php if(isset($user[0][14])) echo $user[0][14]; else echo"";?>" class="input-text" name="negeri" id="negeri">
    </div>

    <div class="column-6"></div>
    </div>

    <div class="row">
    <div class="column-2">
        <label for="fakulti">Fakulti: </label>
    </div>
    <div class="column-4" >
        <input type="text" value="<?php if(isset($user[0][4])) echo $user[0][4]; else echo"";?>" class="input-text" name="fakulti" id="fakulti">
    </div>

    <div class="column-2">
        <label for="bidang">Bidang: </label>
    </div>
    <div class="column-4" >
        <input type="text" value="<?php if(isset($user[0][10])) echo $user[0][10]; else echo"";?>" class="input-text" name="bidang" id="bidang">
    </div>
    </div>

    <div class="row">
    <div class="column-2">
        <label for="no-tel-pejabat">No Tel. Pejabat: </label>
    </div>
    <div class="column-4" >
        <input type="text" class="input-text"value="<?php if(isset($user[0][15])) echo $user[0][15]; else echo"";?>" name="no-tel-pejabat" id="no-tel-pejabat">
    </div>
    <div class="column-2">
        <label for="no-tel-bimbit">No Tel. Bimbit: </label>
    </div>
    <div class="column-4" >
        <input type="text" class="input-text" value="<?php if(isset($user[0][7])) echo $user[0][7]; else echo"";?>" name="no-tel-bimbit" id="no-tel-bimbit">
    </div>
    </div>
    <br>
    <hr>
    <br>


