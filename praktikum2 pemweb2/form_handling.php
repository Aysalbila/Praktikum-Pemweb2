<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum 2 - Form Handling</title>
    <style>
        body{
            background-color: peachpuff;
        }
    </style>
</head>
<body>
    <h1>Belajar Form Handling 1</h1>
    <form action="belajar_post.php" method="POST"> 
        <!-- tipe text -->
        <label for="nama">Nama Mahasiswa</label><br>
        <input type="text" name="nama"><br><br>

        <!-- tipe radio -->
        <label for="jenis_kelamin">Jenis Kelamin</label><br>
        <input type="radio" name="jenis_kelamin" value="laki-laki"><label>Laki-laki</label>
        <input type="radio" name="jenis_kelamin" value="perempuan"><label>Perempuan</label><br><br>
 
        <!-- tipe checkbox -->
        <label for="hobi">Hobi</label><br>
        <input type="checkbox" name="hobi[]" value="Drakoran"><label>Drakoran</label><br>
        <input type="checkbox" name="hobi[]" value="Traveling"><label>Traveling</label><br>
        <input type="checkbox" name="hobi[]" value="Olahraga"><label>Olahraga</label><br><br>

        <!-- tipe number -->
        <label for="umur">Umur</label><br>
        <input type="number" name="umur"><br><br>

        <!-- tipe date/tanggal -->
        <label for="tanggal_lahir">Tanggal lahir</label><br>
        <input type="date" name="tanggal_lahir"><br><br>
        
        <!-- dropdown select -->
        <label for="prodi">Program Studi</label><br>
        <select name="prodi">
            <option value="ti">Teknik Informatika</option>
            <option value="si">Sistem Informasi</option>
            <option value="bd">Bisnis Digital</option>
        </select><br><br>

        <!-- button  -->
        <button type="submit">SIMPAN</button>
        <button type="reset">RESET</button>


    </form>
</body>
</html>