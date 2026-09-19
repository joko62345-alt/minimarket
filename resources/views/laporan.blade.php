<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Laporan Penjualan</title>
</head>
<body>

    <h1>Rekap Statistik Penjualan</h1>

    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <th>Statistik</th>
            <th>Jumlah</th>
        </tr>

        <tr>
            <td>Total Transaksi</td>
            <td>{{ $laporan['total_transaksi'] }}</td>
        </tr>

        <tr>
            <td>Total Penjualan</td>
            <td>Rp {{ number_format($laporan['total_penjualan'], 0, ',', '.') }}</td>
        </tr>

        <tr>
            <td>Produk Terjual</td>
            <td>{{ $laporan['produk_terjual'] }}</td>
        </tr>

        <tr>
            <td>Rata-rata Transaksi</td>
            <td>Rp {{ number_format($laporan['rata_rata_transaksi'], 0, ',', '.') }}</td>
        </tr>
    </table>

</body>
</html>