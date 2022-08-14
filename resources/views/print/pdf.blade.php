<!DOCTYPE html>
<html>

<head>
    <style>
        table,
        td,
        th {
            border: 1px solid #ddd;
            text-align: left;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            padding: 15px;
        }

        .header img {
            float: left;
            width: 90px;
            height: 90px;
            background: #555;
        }

        .header h1 {
            position: top;
            top: 100px;
            left: 50px;
        }

    </style>
    <title>Print Page</title>
</head>

<body>
    <div class="header">
        <br>
        <h1 align="center">List Hadir<br>Digital Invitaton</h1>
    </div>
    <?php
echo "Tanggal Cetak : " . date("Y/m/d") . "<br>";
?>
    <hr>
    <table border="1" weight="50%" width="50%" align="center">
        <thead>
            <tr>
                <th>Nama Produk</th>
                <th>Jumlah</th>
                <th>Harga</th>
                <th>Total Harga</th>
                <th>Total Harga</th>


            </tr>
        </thead>
        <tbody>

            <?php $no = 1; ?>
            @foreach($data1 as $pesanan_detail)
            <tr>
                <td>{{ $no++ }}</td>
                <td></td>
                <td></td>
                <td align="left"></td>
                <td align="left">Rp. {{ number_format($pesanan_detail->jumlah_harga) }}</td>

            </tr>
            @endforeach
        </tbody>

    </table>

</body>

</html>
