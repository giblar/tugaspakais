<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator maseeehhh</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
    <center>

</body>
    <h1 >giblar apa adanya</h1>
<div >
    <form action="" method="POST">
   <input type="number" name="nomor2" >
        <select name="operator">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">x</option>
            <option value="/">/</option>
        </select> 
    <input type="number" name="nomor1">      
        
    
        <br><br>
    </div>
 <div class="w3-container">
    <input type="submit" name="kirim" value="Hitung" class="w3-spin" > 
 </div>
</form>
<br><br>
<br><br>
<br><br>
<h2>inih untuk nilai</h2>
  <form method="post" action="">
    <label for="nilai">Masukkan Nilai:</label><br>
    nilai 1<input type="number" name="nilai1" id="nilai1" required><br><br>
     nilai 2<input type="number" name="nilai2" id="nilai2" required><br><br>
   nilai 3 <input type="number" name="nilai3" id="nilai3" required><br><br>
    <input type="submit" value="Tentukan" name="Tentukan" class="w3-button w3-white w3-border w3-border-red w3-round-large">
  </form>
 
</html>

<?php

if(isset($_POST['Tentukan']) ) {
    $nilai1 = $_POST["nilai1"];
    $nilai2 = $_POST["nilai2"];
    $nilai3 = $_POST["nilai3"];

    $jumlah_nilai = $nilai1 + $nilai2 + $nilai3;
    $rata_rata = $jumlah_nilai / 3;

    $grade = '';

    if ($rata_rata >= 80) {
      $grade = 'A';
    } elseif ($rata_rata >= 70) {
      $grade = 'B';
    } elseif ($rata_rata >= 60) {
      $grade = 'C';
    } elseif ($rata_rata >= 50) {
      $grade = 'D';
    } else {
      $grade = 'E';
    }
// giblar zahran maula ganteng eh giblar mantap
    echo "<br>Nilai 1: $nilai1";
    echo "<br>Nilai 2: $nilai2";
    echo "<br>Nilai 3: $nilai3";
    echo "<br>Jumlah Nilai: $jumlah_nilai";
    echo "<br>Rata-rata Nilai: ". number_format($rata_rata, );
    echo "<br>Grade: $grade";
  }
  


//sdass
class aritmatika {
    private $nomor2, $nomor1;
    protected $hasil;

    public function __construct($nomor2, $nomor1) {
        $this->nomor2 = $nomor2;
        $this->nomor1 = $nomor1;
        $this->hasil = null;
    }

    private function kalkul($operator) {
    switch ($operator) {
     case '+':
    $this->hasil = $this->nomor2 + $this->nomor1;
                break;
         case '-':
            $this->hasil = $this->nomor2 - $this->nomor1;
                break;       
            case '*':
             $this->hasil = $this->nomor2 * $this->nomor1;
                break;   
     case '/':
         $this->hasil = $this->nomor2 / $this->nomor1;
                break;

                     
                default:
                echo "gabisa";
                
        }
    }

    public function setNomor($nomor2, $nomor1) {
        $this->nomor2 = $nomor2;
        $this->nomor1 = $nomor1;
    }
    public function gethasil() {
        return $this->hasil;
    }
    public function tambah() {
        $this->kalkul('+');
    }
    public function pengurangan() {
        $this->kalkul('-');
    }
    public function kali() {
        $this->kalkul('*');
    }
    public function bagi() {
        $this->kalkul('/');
    }
     
}


if (isset($_POST['kirim']) ) {
    
    $nomor2 = $_POST['nomor2'];
    $nomor1 = $_POST['nomor1'];
    $operator = $_POST['operator'];


    $kalku = new aritmatika($nomor2, $nomor1);
    switch ($operator) {
        case '+':
    $kalku->tambah();
            break;
        case '-':
    $kalku->pengurangan();
            break;
        case '*':
     $kalku->kali();
            break;
        case '/':
    $kalku->bagi();
            break;
            case '%':
     $kalku->modulus();
                    break;
    }
    $hasil = $kalku->gethasil();
    echo "<h1>Hasilnya adalah</h1>  <h1> $hasil</h1>";
}
?>

</center>