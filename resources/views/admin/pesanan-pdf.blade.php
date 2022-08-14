<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bukti</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>

<body>


    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <p align="right">Tanggal pesan : {{ $pesanans->tanggal }}</p>
                <table class="table table-dark">
                    <style>
                        table,
                        th,
                        td {
                            border: 1px solid black;
                        }
                    </style>
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Produk</th>
                            <th>Jumlah Produk</th>
                            <th>Harga Produk</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        @foreach ($pesanan_details as $pesanan_detail)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $pesanan_detail->barang->nama_barang }}</td>
                                <td>{{ $pesanan_detail->jumlah }} barang</td>
                                <td align="left">Rp.
                                    {{ number_format($pesanan_detail->barang->harga_barang) }}
                                </td>
                                <td align="left">Rp. {{ number_format($pesanan_detail->jumlah_harga) }}
                                </td>

                            </tr>
                        @endforeach
                        <tr>
                            <td colspan="4" align="right"><strong>Total : </strong></td>
                            <td><strong>Rp. {{ number_format($pesanans->jumlah_harga) }}</strong>
                            </td>
                           
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


</body>

</html>
