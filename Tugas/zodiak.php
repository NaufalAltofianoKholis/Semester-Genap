<h1>Zodiak</h1>

<form action="" method="get">
<input type="number" name="tanggal" placeholder="Masukkan tanggal lahir">
<input type="number" name="bulan" placeholder="Masukkan bulan lahir">
<input type="submit" value="submit">
</form>
<?php
if (isset($_GET["tanggal"]) && isset($_GET["bulan"])) {
    $tanggal = (int)$_GET["tanggal"];
    $bulan = (int)$_GET["bulan"];
    
    $zodiak = "belum ditentukan";
    if ($bulan <= 0 || $bulan >= 13 || $tanggal <= 0 || $tanggal >= 32) {
        $zodiak = "Tanggal atau bulan tidak valid";
    }

    
    if ($bulan == 1) {
        if ($tanggal >= 20) {
            $zodiak = "Aquarius";
        }else if ($tanggal <= 19) {
            $zodiak = "Capricon";
        }
    }else if ($bulan == 2) {
        if ($tanggal <= 18) {
            $zodiak = "Taurus";
        }else if ($tanggal >= 19 && $tanggal <= 29) {
            $zodiak = "Scorpio";
        }
    }else if ($bulan == 3) {
        if ($tanggal <= 15) {
            $zodiak = "Capricorn";
        }else if ($tanggal >= 16) {
            $zodiak = "Virgo";
        }
    }else if ($bulan == 4) {
        if ($tanggal <= 15) {
            $zodiak = "Cancer";
        }else if ($tanggal >= 16) {
            $zodiak = "Gemini";
        }
    }else if ($bulan == 5) {
        if ($tanggal <= 15) {
            $zodiak = "Leo";
        }else if ($zodiak >= 16) {
            $zodiak = "Sagitarius";
        }
    }else if ($bulan == 6) {
        if ($tanggal <= 15) {
            $zodiak = "Aries";
        }else if ($tanggal >= 16) {
            $zodiak = "Libra";
        }
    }else if ($bulan == 7) {
        if ($tanggal <= 15) {
            $zodiak = "Leo";
        }else if ($tanggal >= 16) {
            $zodiak = "Gemini";
        }
    }else if ($bulan == 8) {
        if ($tanggal <= 15) {
            $zodiak = "Aries";
        }else if ($tanggal >= 16 && $tanggal <= 29) {
            $zodiak = "Pisces";
        }
    }else if ($bulan == 9) {
        if ($tanggal <= 15) {
            $zodiak = "Aquarius";
        }else if ($tanggal >= 16) {
            $zodiak = "Libra";
        }
    }else if ($bulan == 10) {
        if ($tanggal <= 15) {
            $zodiak = "Cancer";
        }else if ($tanggal >= 16) {
            $zodiak = "Scorpio";
        }
    }else if ($bulan == 11) {
        if ($tanggal <= 15) {
            $zodiak = "Taurus";
        }else if ($tanggal >= 16) {
            $zodiak = "Virgo";
        }
    }else if ($bulan == 12) {
        if ($tanggal <= 15) {
            $zodiak = "Capricorn";
        }else if ($tanggal >= 16) {
            $zodiak = "Sagitarius";
        }
    }
    echo $zodiak;
}
?>