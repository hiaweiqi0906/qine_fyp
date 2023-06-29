<h1 style="font-size: 2.5rem;">Maklumat Peribadi</h1>
<div class="row">
    <div class="column-2">
        <label for="gelaran">Gelaran: </label>
    </div>
    <div class="column-2">
        <select class="input-text" name="gelaran" id="gelaran">
            <?php if (isset($list_of_application[0][11])) {
                echo "<option>" . $list_of_application[0][11] . "</option>";
            } ?>
        </select>
    </div>
    <div class="column-2">
        <label for="nama">Nama: </label>
    </div>
    <div class="column-6">
        <input type="text" class="input-text" readonly
            value="<?php if (isset($list_of_application[0][6])) {
                echo $list_of_application[0][6];
            } ?>" name="nama"
            id="nama">
    </div>
</div>

<div class="row">
    <div class="column-2">
        <label for="kategori">Kategori: </label>
    </div>
    <div class="column-10">
        <?php
        if (isset($list_of_application[0][5])) {
            $kat_arr = explode(";", $list_of_application[0][5]);
        }
        ?>
        <input type="checkbox" id="kategori1" name="kategori1" value="ISO" disabled <?php if($kat_arr[0] != ''){echo "checked";}?>>
        <label for="kategori1"> ISO</label><br>
        <input type="checkbox" id="kategori2" name="kategori2" value="ISMS" disabled <?php if($kat_arr[1] != ''){echo "checked";}?>>
        <label for="kategori2"> ISMS</label><br>
        <input type="checkbox" id="kategori3" name="kategori3" value="EKSA" disabled <?php if($kat_arr[2] != ''){echo "checked";}?>>
        <label for="kategori3"> EKSA</label><br>
        <input type="checkbox" id="kategori4" name="kategori4" value="MQA" disabled <?php if($kat_arr[3] != ''){echo "checked";}?>>
        <label for="kategori4"> MQA</label><br>
    </div>

</div>

<div class="row">

    <div class="column-2">
        <label for="no-kad-pengenalan">Nombor Kad Pengenalan: </label>
    </div>
    <div class="column-4">
        <input type="text" class="input-text" name="no-kad-pengenalan" id="no-kad-pengenalan"
            placeholder="XXXXXX-XX-XXXX" pattern="[0-9]{6}-[0-9]{2}-[0-9]{4}" required readonly
            value="<?php if (isset($list_of_application[0][12])) {
                echo $list_of_application[0][12];
            } ?>" >
    </div>
    <div class="column-6"></div>
</div>

<div class="row">
    <div class="column-2">
        <label for="universiti">Universiti: </label>
    </div>
    <div class="column-10">
        <input type="text" class="input-text" name="universiti" id="universiti"  readonly
            value="<?php if (isset($list_of_application[0][7])) {
                echo $list_of_application[0][7];
            } ?>" >
    </div>
</div>

<div class="row">
    <div class="column-2">
        <label for="alamat-tempat-bekerja">Alamat: </label>
    </div>
    <div class="column-10">
        <input type="text" class="input-text" name="alamat-tempat-bekerja" id="alamat-tempat-bekerja"  readonly
            value="<?php if (isset($list_of_application[0][13])) {
                echo $list_of_application[0][13];
            } ?>" >
    </div>
</div>

<div class="row">
    <div class="column-2">
        <label for="poskod">Poskod: </label>
    </div>
    <div class="column-4">
        <input type="text" class="input-text" name="poskod" id="poskod"  readonly
            value="<?php if (isset($list_of_application[0][14])) {
                echo $list_of_application[0][14];
            } ?>" >
    </div>
    <div class="column-2">
        <label for="daerah">Daerah: </label>
    </div>
    <div class="column-4">
        <input type="text" class="input-text" name="daerah" id="daerah" readonly
            value="<?php if (isset($list_of_application[0][16])) {
                echo $list_of_application[0][16];
            } ?>" >
    </div>
</div>

<div class="row">
    <div class="column-2">
        <label for="negeri">Negeri: </label>
    </div>
    <div class="column-4">
        <select type="input-text" class="input-text" name="negeri" id="negeri">
        <?php if (isset($list_of_application[0][15])) {
                echo "<option>" . $list_of_application[0][15] . "</option>";
            } ?>
        </select>
    </div>

    <div class="column-6"></div>
</div>

<div class="row">
    <div class="column-2">
        <label for="fakulti">Fakulti: </label>
    </div>
    <div class="column-4">
        <input type="text" class="input-text" name="fakulti" id="fakulti" readonly
            value="<?php if (isset($list_of_application[0][17])) {
                echo $list_of_application[0][17];
            } ?>" >
    </div>

    <div class="column-2">
        <label for="bidang">Bidang: </label>
    </div>
    <div class="column-4">
        <input type="text" readonly
            value="<?php if (isset($list_of_application[0][18])) {
                echo $list_of_application[0][18];
            } ?>" class="input-text" name="fakulti" id="fakulti">
    </div>
</div>

<div class="row">
    <div class="column-2">
        <label for="no-tel-pejabat">No Tel. Pejabat: </label>
    </div>
    <div class="column-4">
        <input type="tel" class="input-text" name="no-tel-pejabat" id="no-tel-pejabat" placeholder="02-345 6789"
            pattern="0[0-9]{1}-[0-9]{3} [0-9]{4}" required readonly
            value="<?php if (isset($list_of_application[0][20])) {
                echo $list_of_application[0][20];
            } ?>" >
    </div>
    <div class="column-2">
        <label for="no-tel-bimbit">No Tel. Bimbit: </label>
    </div>
    <div class="column-4">
        <input type="tel" class="input-text" name="no-tel-bimbit" id="no-tel-bimbit" placeholder="012-345 6789"
            pattern="0[0-9]{2}-[0-9]{3} [0-9]{4}" required readonly
            value="<?php if (isset($list_of_application[0][19])) {
                echo $list_of_application[0][19];
            } ?>" >
    </div>
</div>
<br>
<hr>
<br>
<hr>
<h1>Kelayakan Akademik</h1>
<div class="row">
    <div class="column-2">
        <label for="kelayakan-akademik">Kelayakan Akademik: </label>
    </div>
    <div class="column-10">
        <input type="text" style="display: none;" class="input-text" name="kelayakan-akademik" id="kelayakan-akademik">
    </div>
</div>
<div class="row">
    <table id="table-kelayakan-akademik" class="table table-striped table-bordered" style="width:100%">
        <tr>
            <td>Tahap</td>
            <td>Nama Kelayakan</td>
            <td>Institusi Penanugerah</td>
            <td>Tahun Penganugerah</td>
        </tr>

    </table>
</div>
<div class="row">
    <div class="column-2">
        <label for="pengalaman">Pengalaman: </label>
    </div>
    <div class="column-10">
        <input type="text" style="display: none;" class="input-text" name="pengalaman" id="pengalaman">
    </div>

</div>
<div class="row">
    <table id="table-pengalaman" class="table table-striped table-bordered" style="width:100%">
        <tr>
            <td>Jawatan & Pengalaman</td>
            <td>Tahun Berkhidmat</td>
            <td>Hingga</td>
            <td>Nama Fakulti /Institusi /Organisasi</td>
        </tr>

    </table>
</div>
<div class="row">
    <div class="column-2">
        <label for="penganugerahan">Penganugerahan: </label>
    </div>
    <div class="column-10">
        <input type="text" style="display: none;" class="input-text" name="penganugerahan" id="penganugerahan">
    </div>
</div>
<table id="table-penganugerahan" class="table table-striped table-bordered" style="width:100%">
    <tr>
        <td>Penganugerahan</td>
    </tr>

</table>