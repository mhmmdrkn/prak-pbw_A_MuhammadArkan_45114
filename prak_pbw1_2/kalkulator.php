<?php
// kalkulator.php (Setelah Modifikasi)
$hasil = null;
$pesan = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $a = (float) ($_POST['a'] ?? 0);
    $b = (float) ($_POST['b'] ?? 0);
    $operator = $_POST['operator'] ?? '+';

    switch ($operator) {
        case '+': $hasil = $a + $b; break;
        case '-': $hasil = $a - $b; break;
        case '*': $hasil = $a * $b; break;
        case '/': 
            if ($b == 0) {
                $pesan = 'Pembagian dengan nol tidak diperbolehkan.';
            } else {
                $hasil = $a / $b;
            }
            break;
        case '%': // MODIFIKASI: Tambah operasi Modulo (Sisa Bagi)
            if ($b == 0) {
                $pesan = 'Sisa bagi dengan nol tidak diperbolehkan.';
            } else {
                $hasil = fmod($a, $b);
            }
            break;
        case '^': // MODIFIKASI: Tambah operasi Pangkat
            $hasil = pow($a, $b);
            break;
        default: $pesan = 'Operator tidak valid.';
    }
}
?>

<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title>Kalkulator Sederhana</title>
    <!-- MODIFIKASI: Styling tampilan sederhana -->
    <style>
        body { font-family: sans-serif; margin: 30px; }
        .hasil { color: green; font-weight: bold; }
        .error { color: red; font-weight: bold; }
    </style>
</head>
<body>
    <h1>Kalkulator Sederhana (Modifikasi)</h1>
    <form method="post">
        <input type="number" step="any" name="a" required>
        <select name="operator">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
            <option value="%">% (Modulo)</option> <!-- MODIFIKASI -->
            <option value="^">^ (Pangkat)</option> <!-- MODIFIKASI -->
        </select>
        <input type="number" step="any" name="b" required>
        <button type="submit">Hitung</button>
    </form>

    <?php if ($pesan): ?>
        <p class="error"><?= htmlspecialchars($pesan) ?></p>
    <?php elseif ($hasil !== null): ?>
        <p class="hasil">Hasil Perhitungan: <?= htmlspecialchars((string)$hasil) ?></p>
    <?php endif; ?>
</body>
</html>