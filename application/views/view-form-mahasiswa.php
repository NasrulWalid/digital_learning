<html>

<head>
    <title>Form Input Matakuliah</title>
</head>

<body>
    
        <div class="kotakinput" id="abc">
        <form action="<?= base_url('Mahasiswa/cetak'); ?>"
method="post">
            <table>
                <tr>
                    <th colspan="3">
                        <h1>Form Input Data Siswa</h1>
                    </th>
                </tr>
                <tr>
                    <td colspan="3">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <th>Nama</th>
                    <th>:</th>
                    <td>
                        <input type="text" name="nama" class="forminput" id="nama">
                    </td>
                </tr>
                <tr>
                    <th>NIS</th>
                    <td>:</td>
                    <td>
                        <input type="number" name="nis" class="forminput" id="nis">
                    </td>
                </tr>
                <tr>
                <th>Kelas</th>
                    <th>:</th>
                    <td>
                        <input type="text" name="kelas" class="forminput" id="kelas">
                    </td>
                </tr>
                <tr>
                <th>Tanggal Lahir</th>
                    <td>:</th>
                    <td>
                        <input type="date" name="tanggal_lahir" class="forminput" id="tanggal_lahir">
                    </td>
                </tr>
                <tr>
                    <th>Tempat Lahir</th>
                    <td>:</th>
                    <td>
                        <input type="text" name="tempat_lahir" class="forminput" id="tempat_lahir">
                    </td>
                    </tr>
                <tr>
                    <th>Alamat</th>
                    <td>:</th>
                    <td>
                        <input type="text" name="alamat" class="forminput" id="alamat">
                    </td>
                </tr>
                <tr>
                    <th>Jenis Kelamin</th>
                    <td>:</th>
                    <td>
                        <input type="radio" name="gender"  value="laki-laki">Laki-laki
                        <input type="radio" name="gender"  value="perempuan">Perempuan
                    </td>
                </tr>
                <tr>
                    <th>Agama</th>
                    <td>:</td>
                    <td>
                        <select name="agama" class="forminput" id="agama">
                            <option value="">Pilih agama</option>
                            <option value="Islam">Islam</option>
                            <option value="Khatolik">Khatolik</option>
                            <option value="Budha">Budha</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Khonghucu">Khonghucu</option>
                            <option value="Protestan">Protestan</
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" align="center">
                        <input type="submit" class="tombolsubmit" value="Submit"><br><br>
                        <button type="reset" class="tombolreset" value="reset">Hapus</button>
                    </td>
                    


                </tr>
            </table>
        </form>
        </div>
    
</body>

</html>
<style>
body{
	font-family: sans-serif;
	background: #d5f0f3;
}

h1{
	text-align: center;
	/*ketebalan font*/
	font-weight: 300;
    text-transform: uppercase;
}


.kotakinput{
	width: 350px;
	background: white;
	/*meletakkan form ke tengah*/
	margin: 80px auto;
	padding: 30px 20px;
    border-radius: 10px;
}


th{
	font-size: 11pt;
    font-style: italic;
    text-align: left;

}

.forminput{
	/*membuat lebar form penuh*/
	box-sizing : border-box;
	width: 100%;
	padding: 5px;
	font-size: 11pt;
	margin-bottom: 5px;
    border-radius: 10px;
}

.tombolsubmit{
	background: #46de4b;
	color: white;
	font-size: 11pt;
	width: 100%;
	border: none;
	border-radius: 10px;
	padding: 10px 20px;
}

.tombolreset{
	background: crimson;
	color: white;
	font-size: 11pt;
	width: 100%;
	border: none;
	border-radius: 10px;
	padding: 10px 20px;
}

</style>