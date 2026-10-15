<?php

function statusKelulusan(float $ipk): string
{
    // Modifikasi: Penambahan kategori Cumlaude
    if ($ipk >= 3.75) return 'Dengan Pujian (Cumlaude)';
    if ($ipk >= 3.50) return 'Sangat Memuaskan';
    if ($ipk >= 3.00) return 'Memuaskan';
    return 'Perlu Peningkatan';
}

// Modifikasi: Penambahan field baru (email, angkatan, status)
$mahasiswa = [
    'npm'      => '4524210114',
    'nama'     => 'Muhammad Arkan',
    'email'    => 'arkan@univ.ac.id',
    'prodi'    => 'Teknik Informatika',
    'angkatan' => 2024,
    'semester' => 5,
    'ipk'      => 3.21,
    'status'   => 'Aktif'
];
?>

<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cyber Terminal | Biodata Mahasiswa</title>
    
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            background-color: #0d1117; 
            color: #c9d1d9;
            font-family: 'Fira Code', 'Courier New', Consolas, monospace;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }

        /* Container Kartu Terminal */
        .cyber-card {
            background-color: #161b22;
            border: 1px solid #30363d;
            border-left: 4px solid #00a896;
            border-radius: 8px;
            width: 100%;
            max-width: 500px;
            padding: 25px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.5);
        }

        /* Header Terminal */
        .cyber-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #21262d;
            padding-bottom: 12px;
            margin-bottom: 20px;
        }

        .cyber-title {
            font-size: 1.2rem;
            color: #58a6ff;
            font-weight: bold;
            letter-spacing: 1px;
        }

        .status-badge {
            font-size: 0.75rem;
            background-color: #1f3a3a;
            color: #00e6c3;
            padding: 4px 10px;
            border-radius: 12px;
            border: 1px solid #00a896;
        }

        /* List Data Mahasiswa */
        ul.cyber-list {
            list-style: none;
            margin-bottom: 20px;
        }

        ul.cyber-list li {
            display: flex;
            justify-content: space-between;
            padding: 8px 0;
            border-bottom: 1px dashed #21262d;
            font-size: 0.95rem;
        }

        .key-label {
            color: #8b949e;
            text-transform: uppercase;
        }

        .value-data {
            color: #e6edf3;
            font-weight: 600;
        }

        /* Predikat / Output Bottom */
        .predikat-box {
            background-color: #0d1117;
            border: 1px solid #30363d;
            padding: 12px 15px;
            border-radius: 6px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .predikat-label {
            font-size: 0.85rem;
            color: #8b949e;
        }

        .predikat-value {
            color: #00e6c3;
            font-weight: bold;
            font-size: 0.95rem;
        }
    </style>
</head>
<body>

    <div class="cyber-card">
        <!-- Header Terminal -->
        <div class="cyber-header">
            <span class="cyber-title">&gt; SYSTEM_ID_CARD</span>
            <span class="status-badge">ONLINE</span>
        </div>

        <h1>Biodata Mahasiswa</h1>
        <br>

        <!-- List Data -->
        <ul class="cyber-list">
            <?php foreach ($mahasiswa as $kunci => $nilai): ?>
                <li>
                    <span class="key-label">[<?= strtoupper($kunci) ?>]</span>
                    <span class="value-data"><?= htmlspecialchars((string)$nilai) ?></span>
                </li>
            <?php endforeach; ?>
        </ul>

        <!-- Status Predikat -->
        <div class="predikat-box">
            <span class="predikat-label">Status Academic Progress:</span>
            <span class="predikat-value"><?= statusKelulusan($mahasiswa['ipk']) ?></span>
        </div>
    </div>

</body>
</html>