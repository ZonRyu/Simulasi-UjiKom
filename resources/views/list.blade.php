<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List</title>
</head>
<body>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">Jurusan</th>
            <th scope="col">Asal SMP</th>
          </tr>
        </thead>
        <tbody>
            @php
                $no = 1;
            @endphp
            @foreach ($siswa as $list)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $list['username'] }}</td>
                    <td>{{ $list['jenis-kelamin'] }}</td>
                    <td>{{ $list['jurusan'] }}</td>
                    <td>{{ $list['asal-smp'] }}</td>
                </tr>
            @endforeach        
        </tbody>
      </table>
</body>
</html>