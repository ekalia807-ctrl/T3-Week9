<?php
class Mahasiswa {
    public $nama, $nim, $uts, $uas;

    function __construct($nama, $nim, $uts, $uas) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->uts = $uts;
        $this->uas = $uas;
    }

    function nilaiAkhir() {
        return ($this->uts * 0.4) + ($this->uas * 0.6);
    }

    function grade() {
        $na = $this->nilaiAkhir();
        if ($na >= 85) return "A";
        elseif ($na >= 70) return "B";
        elseif ($na >= 60) return "C";
        elseif ($na >= 50) return "D";
        else return "E";
    }
}

$data = [
    new Mahasiswa("Eka Aprilia", "F1D02410021", 85, 90),
    new Mahasiswa("Degha Prayudha", "F1D02410024", 100, 95),
    new Mahasiswa("Musfiqoh Rizkia", "F1D02410083", 90, 85),
    new Mahasiswa("Nico Bayazit", "F1D02410057", 30, 55),
    new Mahasiswa("Elang Akhira", "F1D02410006", 80, 80),
];

$total = 0;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Nilai Mahasiswa</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

<h2 style="text-align:center;">Tabel Nilai Mahasiswa</h2>

<table>
<tr>
    <th>Nama</th>
    <th>NIM</th>
    <th>UTS</th>
    <th>UAS</th>
    <th>Nilai Akhir</th>
    <th>Grade</th>
</tr>

<?php foreach ($data as $m): 
    $na = $m->nilaiAkhir();
    $total += $na;
?>
<tr class="<?= $na < 60 ? 'low' : '' ?>">
    <td><?= $m->nama ?></td>
    <td><?= $m->nim ?></td>
    <td><?= $m->uts ?></td>
    <td><?= $m->uas ?></td>
    <td><?= $na ?></td>
    <td><?= $m->grade() ?></td>
</tr>
<?php endforeach; ?>

</table>

<h3 style="text-align:center;">
Rata-rata: <?= $total / count($data) ?>
</h3>

</body>
</html>