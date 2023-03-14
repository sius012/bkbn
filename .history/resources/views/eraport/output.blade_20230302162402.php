<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Output</title>
    <style>
        table {
            border-collapse: collapse;
        }

        td {
            border: 1px solid black;

        }

    </style>
</head>
<body>
    <table class="bordered">
        <tr>
            <td colspan="5">Akumulasi nilai karakter dari Asrama dan sekolah</td>
        </tr>
        <tr>
            <td rowspan="3">No</td>
            <td rowspan="3">Faktor Penilaian Karakter</td>
            @foreach($siswa as $i => $siswas)
            <td colspan=4 align="center">{{$siswas->nama_siswa}}</td>
            @endforeach
        </tr>
        <tr>
            @foreach($siswa as $i => $siswas)
            <td align="center" colspan="4">{{$  }}</td>
            @endforeach
        </tr>
        <tr>
            @foreach($siswa as $i => $siswas)
                <td>Asrama(60%)</td>
                <td>Sekolah(40%)</td>
                <td>Nilai Akhir</td>
                <td>Nilai Huruf</td>
            @endforeach

        </tr>

    </table>

</body>
</html>
