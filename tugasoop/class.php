<?php 

class Calculator { //ini penulisan class pada OOP
	private $conn;
	//private $total;
	public function Calculator() {
		$servername = "localhost";
		$username = "root";
		$password = "";
		$db = "jurnal9";
		$this->conn = mysqli_connect($servername, $username, $password, $db);
	}

	public function tambah() {
	$angka1 = $_POST['input1'];
	$angka2 = $_POST['input2'];
	$angka3 = $_POST['input3'];
	$sql = "INSERT INTO mahasiswa(nama,nim, tgl_lahir) VALUES ('$angka1', '$angka2', '$angka3')";
	mysqli_query($this->conn, $sql);

	}
	public function kurang() {
        $angka1 = $_POST['input1'];
        $angka2 = $_POST['input2'];
         $angka3 = $_POST['input3'];
        $sql    = "DELETE FROM mahasiswa WHERE nim=$angka2";        
        mysqli_query($this->conn, $sql);
	}
	public function bagi(){
    $sql    = "SELECT * FROM mahasiswa";        
    return mysqli_query($this->conn, $sql);

    }
    public function tampil_data($nim){
            $sql = "SELECT * FROM mahasiswa where nim = '$nim'";
            return mysqli_query($this->conn,$sql);

    }

}


$operasi = $_POST["operasi"];
$calkulator = new Calculator();
if($operasi == "tambah")
    $calkulator->tambah();
if($operasi == "kurang")
    $calkulator->kurang();
if($operasi == "bagi"){
    $result = $calkulator->bagi();
    require_once("data.php");
}
    


 ?>
 <h2>Data berhasil diinputkan</h2>
 <br>
 <a href="form.php">Kembali kehalaman selanjutnya</a> 
