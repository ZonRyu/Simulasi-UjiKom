<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Register</title>
</head>
<body>
    @include('sweetalert::alert')
    <form action="/register" method="post">
        @csrf
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input name="username" type="string" class="form-control" placeholder="Username">
        </div>
        <div class="mb-3">
            <label for="jenis-kelamin" class="form-label">Jenis Kelamin</label>
            <select name="jenis-kelamin" class="form-select">
                <option value="" disabled selected hidden>Pilih jenis kelamin</option>
                <option value="laki-laki">Laki-Laki</option>
                <option value="perempuan">Perempuan</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="jurusan" class="form-label">Jenis Kelamin</label>
            <select name="jurusan" class="form-select">
                <option value="" disabled selected hidden>Pilih jurusan</option>
                <option value="dkv">Desain Komunikasi Visual</option>
                <option value="pplg">Pengembangan Perangkat Lunak dan Gim</option>
                <option value="tjkt">Teknik Jaringan Komputer dan Telekomunikasi</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="asal-smp" class="form-label">Asal SMP</label>
            <input name="asal-smp" type="string" class="form-control" placeholder="Asal SMP">
        </div>
        <button type="submit" class="btn">Submit</button>
    </form>
</body>
</html>