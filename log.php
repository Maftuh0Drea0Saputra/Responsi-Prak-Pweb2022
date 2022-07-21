
<link rel="stylesheet" href="style.css"> 
<div class="background">
    <div class="box">
        <label>TRANSAKSI BERHASIL</label>
    <?php
        if(isset($_POST['submit'])){
            $bahan   = $_POST['nama'];  
            $biaya   = $_POST['biaya'];
            $tanggal = date('d-m-Y');
            $fp      = fopen("Fillexe.txt", "a");
        }

        $fp= fopen("Fillexe.txt", "a+");
        fputs($fp, "$bahan|$biaya|$tanggal\n");
        fclose($fp);
    ?>
    </div>

    <div class="box">
        <label class="tombol"><ion-icon name="trending-up-outline"></ion-icon><a href="pog.php"> Log Transaksi</a></label>
        <label class="tombol"><ion-icon name="receipt-outline"></ion-icon><a href="index.html"> Lakukan Transaksi </a></label>
    </div>
</div>