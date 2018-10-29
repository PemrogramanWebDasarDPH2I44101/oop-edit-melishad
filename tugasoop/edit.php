<?php
    require("data.php");
    $nim = $_GET['nim'];
    $result = $calkulator->tampil_data($nim);
    $row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>6701174009</title>
</head>
<body>
    <input type="hidden" value="<?php echo $row['nim'];?>" name="nim">
    <form action="class.php" method="post">
        Masukan angka 1<input type="text" name="input1" value="<?php echo $row['nama'];?>"><br>
        Masukan angka 2<input type="text" name="input2" value="<?php echo $row['nim'];?>"><br>
        Masukan angka 3<input type="date" name="input3" value="<?php echo $row['tgal_lahir'];?>"><br>
        Pilih Operasi
        <select name="operasi">
            <option value="tambah">+</option>
            <option value="kurang">-</option>
            <option value="kali">*</option>
            <option value="bagi">/</option>
        </select>
        <br>
        <input type="submit" name= "submit" value="submit">
    </form>
</body>
</html>