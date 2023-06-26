<h1>Maklumat Peribadi</h1>
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
            <option value="Johor">Johor</option>
            <option value="Kedah">Kedah</option>
            <option value="Kelantan">Kelantan</option>
            <option value="Melaka">Melaka</option>
            <option value="Negeri Sembilan">Negeri Sembilan</option>
            <option value="Pahang">Pahang</option>
            <option value="Perak">Perak</option>
            <option value="Perlis">Perlis</option>
            <option value="Pulau Pinang">Pulau Pinang</option>
            <option value="Selangor">Selangor</option>
            <option value="Terengganu">Terengganu</option>
            <option value="Sabah">Sabah</option>
            <option value="Sarawak">Sarawak</option>
            <option value="WP Kuala Lumpur">Wilayah Persekutuan Kuala Lumpur</option>
            <option value="WP Labuan">Wilayah Persekutuan Labuan</option>
            <option value="WP Putrajaya">Wilayah Persekutuan Putrajaya</option>
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
            echo ""; ?>" class="input-text"
            name="fakulti" id="fakulti">
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
        <input type="text" class="input-text" name="kelayakan-akademik" id="kelayakan-akademik">
    </div>
</div>
<div class="row">
    <div class="column-2">
        <label for="pengalaman">Pengalaman: </label>
    </div>
    <div class="column-10">
        <input type="text" class="input-text" name="pengalaman" id="pengalaman">
    </div>
</div>
<div class="row">
    <div class="column-2">
        <label for="penganugerahan">Penganugerahan: </label>
    </div>
    <div class="column-10">
        <input type="text" class="input-text" name="penganugerahan" id="penganugerahan">
    </div>
</div>