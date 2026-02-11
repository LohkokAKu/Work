<?php
date_default_timezone_set("Asia/Jakarta");
    $name = "Muhammad Rafi Zaidan Azzra";
    $nickname = "Azzra";
    $religion = "Islam";
    $birthplace = "Semarang";
    $birthday = "16";
    $birthmonth = "Maret";
    $birthyear = "2009";
    $livein = "Jl. Durian V No. 28";
    $somethingin10years = "";
    $hobby = ['Bermain HP','Menggambar','Daydreaming'];
    $gender = "Laki-laki";
    $nationality = "Indonesia";
    $studyhistory = [
    ["SD", "SD Negeri Sambiroto 01", "2016", "2022"],
    ["SMP", "SMP Negeri 39 Semarang", "2022", "2025"],
    ["SMK", "SMK Negeri 08 Semarang", "2025", "-"]
                                   ];
    $wanumber = "0857 1383 2777";
    $email = "azzrazaidan@gmail.com";
    $favfood = ['Mie Ayam','Soto'];
    $favdrink =  ['Susu','Kopi','Susu Kedelai'];
    $photo = "fotos/ahahazra";
    $motto = "something tuff asl";
    $tsyear = (int) date("Y");
    $age = $tsyear-$birthyear;
    $age10 = $age+10;
    $year10 = $tsyear+10;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas</title>
    <link rel="stylesheet" href="alah.css">
</head>
<script src="watch.js"></script>
<body>
<div style="text-align: left";>
  <img src="fotoproject/chudcomputer.jpeg" alt="literally me" width="50px" id="photo" style="border-radius:5px;">
</div>
<div id="card">
  <p></p>
    <div class="moving-text">
      <span style="padding:20px;font-size: 20px;">Notes</span>
    </div>
  <p style="font-size: 15px;color: #ffffff;padding:20px;">Selamat datang di Biodata Saya!!!</p>
</div>
<div style="padding:20px;border:3px solid #000000;border-radius:15px;width:1470px;">
<img src="fotoproject/ahahazra.jpeg" alt="Foto saya" width="200" id="photo" style="border-radius:15px;">
<p style="text-align: left;font-size: 35px;" id="text"><b>About Me</b></p>
<small><div id="day-date-time"></div></small>
<p id="text"><b>Nama Lengkap:</b> <?= $name ?></p>
<p id="text"><b>Nama Panggilan:</b> <?= $nickname ?></p>
<p id="text"><b>Agama:</b> <?= $religion ?></p>
<p id="text"><b>Jenis Kelamin:</b> <?= $gender ?></p>
<p id="text"><b>Umur:</b><?= $age ?></p>
<p id="text"><b>Kewarganegaraan:</b> <?= $nationality ?></p>
<p id="text"><b>Tempat Lahir:</b> <?= $birthplace ?></p>
<p id="text"><b>Tanggal Lahir:</b> <?= $birthday ?></p>
<p id="text"><b>Bulan Lahir:</b> <?= $birthmonth ?></p>
<p id="text"><b>Tahun Lahir:</b> <?= $birthyear ?></p>
<p id="text"><b>Alamat:</b> <?= $livein ?></p>
<h4>Hobiku</h4>
<ol type = "number">
  <?php foreach ($hobby as $hobby): ?>
    <li><?= $hobby ?></li>
  <?php endforeach; ?>
</ol>
<p style="text-align: left;font-size: 35px;" id="text"><b>Skills</b></p>
<h3>Keahlian saya di bidang PPLG</h3>
<h4>HTML</h4>
  <input type="range" min="10" max="100" value="30" oninput="nilai.value = this.value" disabled style="width: 545px;">
  <output id="milai">30</output> 
<h4>CSS</h4>
  <input type="range" min="10" max="100" value="15" oninput="nilai.value = this.value" disabled style="width: 545px;">
  <output id="nilai">15</output> 
<h4>PHP</h4>
  <input type="range" min="10" max="100" value="15" oninput="nilai.value = this.value" disabled style="width: 545px;">
  <output id="nilai">15</output>
<h3>Di bidang lain</h3>
<h4>Menggambar</h4>
  <input type="range" min="10" max="100" value="30" oninput="nilai.value = this.value" disabled style="width: 545px;">
  <output id="milai">30</output> 
<p style="text-align: left;font-size: 35px;" id="text"><b>Riwayat Pendidikan</b></p>
<table border="1" cellpadding="8">
    <tr>
        <th>Tingkat Pendidikan</th>
        <th>Nama Sekolah</th>
        <th>Tahun Mulai</th>
        <th>Tahun Lulus</th>
    </tr>
    <?php foreach ($studyhistory as $study) 
      { ?>
    <tr>
        <td><?= $study[0] ?></td>
        <td><?= $study[1] ?></td>
        <td><?= $study[2] ?></td>
        <td><?= $study[3] ?></td>
    </tr>
    <?php 
      } ?>
</table>
<p style="text-align: left;font-size: 35px;" id="text"><b>Contacts</b></p>
<p id="text"><b>Nomor WA:</b> <?= $wanumber ?></p>
<p id="text"><b>Email:</b> <?= $email ?></p>
<p style="text-align: left;font-size: 35px;" id="text"><b>Favorites</b></p>
<h4>Makanan Kesukaanku</h4>
<ul type = "square">
  <?php foreach ($favfood as $favfood): ?>
    <li><?= $favfood ?></li>
  <?php endforeach; ?>
</ul>
<h4>Minuman Kesukaanku</h4>
<ol type = "A">
  <?php foreach ($favdrink as $favdrink): ?>
    <li><?= $favdrink ?></li>
  <?php endforeach; ?>
</ol>
<p style="text-align: center;font-size: 35px;" id="text"><b>Motto</b></p><br>
<div class="opaque-box">
      <div class="moving-text">
        <span>Kehidupanmu seharusnya disaksikan oleh setidaknya 4 mata.</span>
      </div>
</div><br>
<p style="text-align: left;font-size: 35px;" id="text"><b>Notice</b></p>
<p>Saya siswa kelas X PPLG 3, mari kesini untuk melihat jadwal dan piketku!<br><br><a href="jadwal.php">Jadwal Pelajaran</a></p>
<h3><small>&copy;2026 Muhammad Rafi Zaidan Azzra</small></h3>
</div>
</body>
<script src="jees.js"></script>
</html>