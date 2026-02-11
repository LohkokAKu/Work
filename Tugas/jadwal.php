<?php
    $schedule = [
    "Senin" => [
        ["mapel"=>"POR", "mulai"=>1, "durasi"=>3],
        ["mapel"=>"BNG", "mulai"=>4, "durasi"=>2],
        ["mapel"=>"BJW", "mulai"=>6, "durasi"=>2],
        ["mapel"=>"PABP", "mulai"=>8, "durasi"=>3]
    ],
    "Selasa" => [
        ["mapel"=>"INF", "mulai"=>1, "durasi"=>2],
        ["mapel"=>"KKA", "mulai"=>3, "durasi"=>2],
        ["mapel"=>"PGD", "mulai"=>5, "durasi"=>4],
        ["mapel"=>"IPAS", "mulai"=>9, "durasi"=>2]
    ],
    "Rabu" => [
        ["mapel"=>"PPS", "mulai"=>1, "durasi"=>2],
        ["mapel"=>"BNG", "mulai"=>3, "durasi"=>2],
        ["mapel"=>"BIN", "mulai"=>5, "durasi"=>2],
        ["mapel"=>"MTK", "mulai"=>7, "durasi"=>2],
        ["mapel"=>"SNM", "mulai"=>9, "durasi"=>2]
    ],
    "Kamis" => [
        ["mapel"=>"PGD", "mulai"=>1, "durasi"=>4],
        ["mapel"=>"GIM", "mulai"=>5, "durasi"=>4],
        ["mapel"=>"IPAS", "mulai"=>9, "durasi"=>2]
    ],
    "Jum'at" => [
        ["mapel"=>"BIN", "mulai"=>1, "durasi"=>2],
        ["mapel"=>"SJR", "mulai"=>3, "durasi"=>2],
        ["mapel"=>"MTK", "mulai"=>5, "durasi"=>2],
        ["mapel"=>"IPAS", "mulai"=>7, "durasi"=>2],
        ["mapel"=>"", "mulai"=>9, "durasi"=>2]
    ],
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
<h2>
    <table border="1" cellpadding="8">
    <tr>
        <th>Jadwal Pelajaran</th>
        <?php for ($hour=1; $hour<=10; $hour++): ?>
        <th><?= $hour ?></th>
        <?php endfor; ?>
    </tr>
<?php foreach ($schedule as $day=>$lesson): ?>
    <tr>
        <td><?= $day ?></td>
        <?php
        $currenthouris=1;
        foreach ($lesson as $les) {
        echo "<td colspan='{$les['durasi']}' style='text-align:center'>";
        echo $les['mapel'];
        echo "</td>";
        $currenthouris += $les['durasi'];
    }
    ?>
    </tr>
        <?php endforeach; ?>
    </table>
</h2>
<h3>
<p style="font-size: 20px;"><a href="biodata.php">Halaman Sebelumnya</a>          |          <a href="piket.php">Halaman Berikutnya</a></p>
</h3>
<h3><small>&copy;2026 Muhammad Rafi Zaidan Azzra</small></h3>
</body>
</html>