<!DOCTYPE html>

<html>

<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title></title>

</head>

<body>

    <div class="container">

    <h3>pelanggan</h3>

    <form action="proses_tambah_pelanggan.php" method="post">

        Nama :

        <input type="text" name="nama_pelanggan" value="" class="form-control">

        Alamat : 

        <input type="text" name="alamat_pelanggan" value="" class="form-control">

        No Telp : 

        <input type="text" name="telp_pelanggan" value="" class="form-control">

        <input type="submit" name="simpan" value="Tambah pelanggan" class="btn btn-primary">

    </form>

</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</body>

</html>