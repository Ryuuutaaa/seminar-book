<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Transaksi Seminar</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <h2 style="text-align: center;">Laporan Transaksi Seminar</h2>
    <table>
        <thead>
            <tr>
                <th>Nama Seminar</th>
                <th>Kategori</th>
                <th>Narasumber</th>
                <th>Total Kursi Dipesan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($transactions as $transaction)
                <tr>
                    <td>{{ $transaction->nama_seminar }}</td>
                    <td>{{ $transaction->kategori }}</td>
                    <td>{{ $transaction->narasumber }}</td>
                    <td>{{ $transaction->total_kursi }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
