<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator maseeehhh</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
    <center>

    <h1>giblar apa adanya</h1>

    <form action="" method="POST">
   <input type="number" name="nomor2" >
        <input type="number" name="nomor1" >
        <select name="operator">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">x</option>
            <option value="/">/</option>
           
        </select>     
        <br><br>
 <div class="w3-container">
    <input type="submit" name="kirim" value="Hitung"  class="w3-button w3-round-xxlarge"> 
 </div>
</form>
</body>
</html>

<?php
class aritmatika {
    private $nomor2, $nomor1;
    protected $hasil;

    public function _construct($nomor2, $nomor1) {
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