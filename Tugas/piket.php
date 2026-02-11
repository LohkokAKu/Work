<?php
    $aku = "Azzra";
    $jadwal =   [
    ["Senin","Ahmad","Ulhaq","Azzra","Alif","Kynan","Dova","Chayu","Vania"],
    ["Selasa","Finza","Erel","Tegar","Rania","Vanessa","Anandira","Chessa",""],
    ["Rabu","Dimas","Athala","Furoon","Silvia","Tiara","Maharani","Anggita",""],
    ["Kamis","Zidan","Darius","Naufal","Aurelia","Aisyah","Galuh","Aini",""],
    ["Jum'at","Zahran","Nnyko","Keisha","Archuleta","Khayra","Azzahro","Destia",""]
    ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<script src="watch.js"></script>
<body>
<div style="text-align: left";>
  <img src="fotoproject/chudcomputer.jpeg" alt="literally me" width="50px" id="photo" style="border-radius:5px;">
</div>
<small><div id="day-date-time"></div></small>
<table border="1" cellpadding="15">
<h2>
    <tr>
        <th colspan="9">JADWAL PIKET</th>
    </tr>
    <tr>
        <th>Hari</th>
        <th colspan="9" style="text-align:center">Petugas Piket</th>
    </tr>

    <?php foreach ($jadwal as $piket) { ?>
    <tr>
        <?php foreach ($piket as $ygpiket) { ?>
            <td
                style="text-align:center;
                <?php if ($ygpiket == $aku) { echo 'background:lightpink;font-weight:bold;'; } ?>"
            >
                <?= $ygpiket ?>
            </td>
        <?php } ?>
    </tr>
    <?php } ?>
</h2>
</table>    
<h3>
<p style="font-size: 15px;"><a href="jadwal.php">Halaman Sebelumnya</a></p>
<h3><small>&copy;2026 Muhammad Rafi Zaidan Azzra</small></h3>
</h3>
</body>
</html>