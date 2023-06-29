<h1 style="font-size: 2.5rem;">Maklumat Peribadi</h1>
<div class="row">
    <div class="column-2">
        <label for="gelaran">Gelaran: </label>
    </div>
    <div class="column-2">
        <select class="input-text" name="gelaran" id="gelaran">
            <option value="" disabled selected>Pilih</option>
            <option value="Encik">Encik</option>
            <option value="Puan">Puan</option>
            <option value="Cik">Cik</option>
        </select>
    </div>
    <div class="column-2">
        <label for="nama">Nama: </label>
    </div>
    <div class="column-6">
        <input type="text" class="input-text" name="nama" id="nama">
    </div>
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
    <div class="column-4">
        <input type="text" class="input-text" name="no-kad-pengenalan" id="no-kad-pengenalan"
            placeholder="XXXXXX-XX-XXXX" pattern="[0-9]{6}-[0-9]{2}-[0-9]{4}" required>
    </div>
    <div class="column-6"></div>
</div>

<div class="row">
    <div class="column-2">
        <label for="universiti">Universiti: </label>
    </div>
    <div class="column-10">
        <input type="text" class="input-text" name="universiti" id="universiti">
    </div>
</div>

<div class="row">
    <div class="column-2">
        <label for="alamat-tempat-bekerja">Alamat: </label>
    </div>
    <div class="column-10">
        <input type="text" class="input-text" name="alamat-tempat-bekerja" id="alamat-tempat-bekerja">
    </div>
</div>

<div class="row">
    <div class="column-2">
        <label for="poskod">Poskod: </label>
    </div>
    <div class="column-4">
        <input type="text" class="input-text" name="poskod" id="poskod">
    </div>
    <div class="column-2">
        <label for="daerah">Daerah: </label>
    </div>
    <div class="column-4">
        <input type="text" class="input-text" name="daerah" id="daerah">
    </div>
</div>

<div class="row">
    <div class="column-2">
        <label for="negeri">Negeri: </label>
    </div>
    <div class="column-4">
        <select type="input-text" class="input-text" name="negeri" id="negeri">
        <option value="" disabled selected>Pilih</option>

            <?php
include('../components/negeri_options.php');
            ?>
        </select>
    </div>

    <div class="column-6"></div>
</div>

<div class="row">
    <div class="column-2">
        <label for="fakulti">Fakulti: </label>
    </div>
    <div class="column-4">
        <input type="text" class="input-text" name="fakulti" id="fakulti">
    </div>

    <div class="column-2">
        <label for="bidang">Bidang: </label>
    </div>
    <div class="column-4">
        <input type="text" value="<?php if (isset($user[0][10]))
            echo $user[0][10];
        else
            echo ""; ?>" class="input-text" name="bidang" id="bidang">
    </div>
</div>

<div class="row">
    <div class="column-2">
        <label for="no-tel-pejabat">No Tel. Pejabat: </label>
    </div>
    <div class="column-4">
        <input type="tel" class="input-text" name="no-tel-pejabat" id="no-tel-pejabat" placeholder="02-345 6789"
            pattern="0[0-9]{1}-[0-9]{3} [0-9]{4}" required>
    </div>
    <div class="column-2">
        <label for="no-tel-bimbit">No Tel. Bimbit: </label>
    </div>
    <div class="column-4">
        <input type="tel" class="input-text" name="no-tel-bimbit" id="no-tel-bimbit" placeholder="012-345 6789"
            pattern="0[0-9]{2}-[0-9]{3} [0-9]{4}" required>
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
        <button id="myBtn" type="button" style="background-color: #5d7851; width: 30%; height: 3rem; color: white; border-radius: 5px; margin-left: auto;display: block; font-size: 1.5rem;">Tambah Kelayakan</button>
    </div>
</div>
<div class="row">
    <table id="table-kelayakan-akademik" class="table table-striped table-bordered" style="width:100%">
        <tr>
            <td>Tahap</td>
            <td>Nama Kelayakan</td>
            <td>Institusi Penanugerah</td>
            <td>Tahun Penganugerah</td>
            <td>Tindakan</td>
        </tr>

    </table>
</div>
<div class="row">
    <div class="column-2">
        <label for="pengalaman">Pengalaman: </label>
    </div>
    <div class="column-10">
        <input type="text" style="display: none;"  class="input-text" name="pengalaman" id="pengalaman">
        <button id="myBtn2" type="button" style="background-color: #5d7851; width: 30%; height: 3rem; color: white; border-radius: 5px; margin-left: auto;display: block; font-size: 1.5rem;">Tambah Pengalaman</button>
    </div>

</div>
<div class="row">
    <table id="table-pengalaman" class="table table-striped table-bordered" style="width:100%">
        <tr>
            <td>Jawatan & Pengalaman</td>
            <td>Tahun Berkhidmat</td>
            <td>Hingga</td>
            <td>Nama Fakulti /Institusi /Organisasi</td>
            <td>Tindakan</td>
        </tr>

    </table>
</div>
<div class="row">
    <div class="column-2">
        <label for="penganugerahan">Penganugerahan: </label>
    </div>
    <div class="column-10">
        <input type="text" style="display: none;"  class="input-text" name="penganugerahan" id="penganugerahan">
        <button id="myBtn3" type="button" style="background-color: #5d7851; width: 30%; height: 3rem; color: white; border-radius: 5px; margin-left: auto;display: block; font-size: 1.5rem;">Tambah Penganugerahan</button>
    </div>
</div>
<table id="table-penganugerahan" class="table table-striped table-bordered" style="width:100%">
        <tr>
            <td>Penganugerahan</td>
            <td>Tindakan</td>
        </tr>

    </table>

<!-- The Modal -->
<div id="myModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
        <span class="close">&times;</span>
        <p>Isikan Maklumat tersebut</p>
        <div class="row">
            <div class="column-4">
                <label for="tahap">Tahap: </label>
            </div>
            <div class="column-8">
                <input type="text" class="input-text" name="tahap" id="tahap">
            </div>
        </div>
        <div class="row">
            <div class="column-4">
                <label for="nama-kelayakan">Nama Kelayakan: </label>
            </div>
            <div class="column-8">
                <input type="text" class="input-text" name="nama-kelayakan" id="nama-kelayakan">
            </div>
        </div>

        <div class="row">
            <div class="column-4">
                <label for="institusi-penanugerah">Institusi Penanugerah: </label>
            </div>
            <div class="column-8">
                <input type="text" class="input-text" name="institusi-penanugerah" id="institusi-penanugerah">
            </div>
        </div>

        <div class="row">
            <div class="column-4">
                <label for="tahun-penganugerah">Tahun Penganugerah: </label>
            </div>
            <div class="column-8">
                <input type="text" class="input-text" name="tahun-penganugerah" id="tahun-penganugerah">
            </div>
        </div>

        <div class="row">
            <button type="button" id="btn-tambah" onclick="myFunction()" style="background-color: #5d7851; width: 30%; height: 40px; color: white; border-radius: 5px; margin-left: auto; margin-right: auto; display: block; font-size: 1.8rem;">Tambah</button>
        </div>
    </div>

</div>

<div id="myModal2" class="modal">


    <!-- Modal content -->
    <div class="modal-content">
        <span class="close">&times;</span>
        <p>Isikan Maklumat tersebut</p>
        <div class="row">
            <div class="column-4">
                <label for="jawatan">Jawatan & Pengalaman: </label>
            </div>
            <div class="column-8">
                <input type="text" class="input-text" name="jawatan" id="jawatan">
            </div>
        </div>
        <div class="row">
            <div class="column-2">
                <label for="tahun-berkhidmat">Tahun Berkhidmat: </label>
            </div>
            <div class="column-4">
                <input type="text" class="input-text" name="tahun-berkhidmat" id="tahun-berkhidmat">
            </div>

            <div class="column-2">
                <label for="tahun-berkhidmat-hingga">Hingga: </label>
            </div>
            <div class="column-4">
                <input type="text" class="input-text" name="tahun-berkhidmat-hingga" id="tahun-berkhidmat-hingga">
            </div>
        </div>

        <div class="row">
            <div class="column-4">
                <label for="nama-fakulti">Nama Fakulti /Institusi /Organisasi: </label>
            </div>
            <div class="column-8">
                <input type="text" class="input-text" name="nama-fakulti" id="nama-fakulti">
            </div>
        </div>

        <div class="row">
            <button type="button" id="btn-tambah" onclick="myFunction2()"  style="background-color: #5d7851; width: 30%; height: 40px; color: white; border-radius: 5px; margin-left: auto; margin-right: auto; display: block; font-size: 1.8rem;">Tambah</button>
        </div>
    </div>

</div>

<div id="myModal3" class="modal">


    <!-- Modal content -->
    <div class="modal-content">
        <span class="close">&times;</span>
        <p>Isikan Maklumat tersebut</p>
        <div class="row">
            <div class="column-4">
                <label for="penganugerahan-1">Penganugerahan: </label>
            </div>
            <div class="column-8">
                <input type="text" class="input-text" name="penganugerahan-1" id="penganugerahan-1">
            </div>
        </div>

        <div class="row">
            <button type="button" id="btn-tambah" onclick="myFunction3()"  style="background-color: #5d7851; width: 30%; height: 40px; color: white; border-radius: 5px; margin-left: auto; margin-right: auto; display: block; font-size: 1.8rem;">Tambah</button>
        </div>
    </div>

</div>
