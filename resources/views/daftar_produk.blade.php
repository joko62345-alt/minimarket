<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Daftar Produk Toko</title>

    <style>

        body {
            font-family: Arial, sans-serif;
            margin: 40px;
        }

        h2 {
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
        }

        .gambar-produk {
            width: 100px;
            height: 100px;
            object-fit: cover;
        }

    </style>

</head>

<body>

    <h2>Daftar Produk Toko Kelontong</h2>

    <table>

        <thead>

            <tr>
                <th>No</th>
                <th>Nama Produk</th>
                <th>SKU</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Gambar</th>
            </tr>

        </thead>

        <tbody>

            @foreach ($produk as $item)
            <tr>
                <td>
                    {{ $loop->iteration }}
                </td>

                <td>
                    {{ $item['nama'] }}
                </td>

                <td>
                    {{ $item['sku'] }}
                </td>

                <td>
                    Rp{{ number_format($item['harga'], 0, ',', '.') }}
                </td>

                <td>
                    {{ $item['stok'] }}
                </td>

                <td>
                    <img
                        src="{{ route('gambar.produk', ['nama' => $item['gambar']]) }}"
                        alt="{{ $item['nama'] }}"
                        class="gambar-produk">
                </td>
            </tr>
            @endforeach

        </tbody>

    </table>

</body>

</html>