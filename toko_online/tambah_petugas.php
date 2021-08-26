<!DOCTYPE html>

<html>

<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title></title>

</head>

<body>

    <div class="container">

    <h3>Petugas</h3>

    <form action="proses_tambah_petugas.php" method="post">

        Nama :

        <input type="text" name="nama_petugas" value="" class="form-control">

        Username :

        <input type="text" name="username_petugas" value="" class="form-control">

        Password :

        <input type="password" name="password_petugas" value="" class="form-control">

        Level Petugas :

    <select name="level_petugas" class="form-control">
            
        <option></option>

        <option value="1">Petugas</option>
        <option value="2">Karyawan</option>
        <option value="3">Manager</option>
        
    </select>

        <input type="submit" name="simpan" value="Tambah Petugas" class="btn btn-primary">

    </form>

</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</body>

</html>