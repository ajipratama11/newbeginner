<?php

/* Variabel initialize */
$jenis = $_POST['jk'];
$umur =  $_POST['umur'];
$berat = $_POST['berat'];


/* Variabel Category */
$ca0 = "kurus";
$cb1 = "normal";
$cc2 = "gemuk";

/* Logic here */

/* If 1 : Filter Jenis Kelamin */
if ($jenis == "l")
    /* if nested 2 : Filter Umur */

    if ($umur == 0)
        /* if nested 3 : Filter Berat */
        if ($berat < 2.5)
        {
            $kategori = $ca0;
        }
        elseif ($berat < 4.4)
        {
            $kategori = $cb1;
        }
        else
        {
            $kategori = $cc2;
        }
    elseif ($umur == 1)
        if ($berat < 3.4)
        {
            $kategori = $ca0;   
        }
        elseif ($berat < 5.8)
        {
            $kategori = $cb1;
        }
        else
        {
            $kategori = $cc2;
        }
    elseif ($umur == 2)
        if ($berat < 4.3)
        {
            $kategori = $ca0;
        }
        elseif ($berat < 7.1)
        {
            $kategori = $cb1;
        }
        else 
        {
            $kategori = $cc2;
        }
    elseif ($umur == 3)
        if ($berat < 5.0)
        {
            $kategori = $ca0;
        }
        elseif ($berat < 8.0)
        {
            $kategori = $cb1;
        }
        else
        {
            $kategori = $cc2;
        }
    elseif ($umur == 4)
        if ($berat < 5.6)
        {
            $kategori = $ca0;
        }
        elseif ($berat < 8.7)
        {
            $kategori = $cb1;
        }
        else
        {
            $kategori = $cc2;
        }
    elseif ($umur == 5)
        if ($berat < 6.0)
        {
            $kategori = $ca0;
        }
        elseif ($berat < 9.3)
        {
            $kategori = $cb1;
        }
        else 
        {
            $kategori = $cc2;
        }
    elseif ($umur == 6)
        if ($berat < 6.4)
        {
            $kategori = $ca0;
        }
        elseif ($berat < 9.8)
        {
            $kategori = $cb1;
        }
        else 
        {
            $kategori = $cc2;
        }
    elseif ($umur == 7)
        if ($berat < 6.7)
        {
            $kategori = $ca0;
        }
        elseif ($berat < 10.3)
        {
            $kategori = $cb1;
        }
        else 
        {
            $kategori = $cc2;
        }
    elseif ($umur == 8)
        if ($berat < 6.9)
        {
            $kategori = $ca0;
        }
        elseif ($berat < 10.7)
        {
            $kategori = $cb1;
        }
        else {
            $kategori = $cc2;
        }
    elseif ($umur == 9)
        if ($berat < 7.1)
        {
            $kategori = $ca0;
        }
        elseif ($berat < 11.0)
        {
            $kategori = $cb1;
        }
        else 
        {
            $kategori = $cc2;
        }
    elseif ($umur == 10)
        if ($berat < 7.4) 
        {
            $kategori = $ca0;
        }
        elseif ($berat < 11.4) 
        {
            $kategori = $cb1;
        } 
        else 
        {
            $kategori = $cc2;
        }
    elseif ($umur == 11)
        if ($berat < 7.6)
        {
            $kategori = $ca0;
        }
        elseif ($berat < 11.7)
        {
            $kategori = $cb1;
        }
        else
        {
            $kategori = $cc2;
        }
    elseif ($umur == 12)
        if ($berat < 7.7)
        {
            $kategori = $ca0;
        }
        elseif ($berat < 12.0)
        {
            $kategori = $cb1;
        }
        else 
        {
            $kategori = $cc2;
        }
    elseif ($umur == 13)
        if ($berat < 7.9)
        {
            $kategori = $ca0;
        }
        elseif ($berat < 12.3)
        {
            $kategori = $cb1;
        }
        else
        {
            $kategori = $cc2;
        }
    elseif ($umur == 14)
        if ($berat < 8.1)
        {
            $kategori = $ca0;
        }
        elseif ($berat < 12.6)
        {
            $kategori = $cb1;
        }
        else
        {
            $kategori = $cc2;
        }
    elseif ($umur == 15)
        if ($berat < 8.3)
        {
            $kategori = $ca0;
        }
        elseif ($berat < 12.8)
        {
            $kategori = $cb1;
        }
        else
        {
            $kategori = $cc2;
        }
    elseif ($umur == 16)
        if ($berat < 8.4)
        {
            $kategori = $ca0;
        }
        elseif ($berat < 13.1)
        {
            $kategori = $cb1;
        }
        else
        {
            $kategori = $cc2;
        }
    elseif ($umur == 17)
        if ($berat < 8.6)
        {
            $kategori = $ca0;
        }
        elseif ($berat < 13.4)
        {
            $kategori = $cb1;
        }
        else
        {
            $kategori = $cc2;
        }
    elseif ($umur == 18)
        if ($berat < 8.8)
        {
            $kategori = $ca0;
        }
        elseif ($berat < 13.7)
        {
            $kategori = $cb1;
        }
        else
        {
            $kategori = $cc2;
        }
    elseif ($umur == 19)
        if ($berat < 8.9)
        {
            $kategori = $ca0;
        }
        elseif ($berat < 13.9)
        {
            $kategori = $cb1;
        }
        else
        {
            $kategori = $cc2;
        }
    elseif ($umur == 20)
        if ($berat < 9.1)
        {
            $kategori = $ca0;
        }
        elseif ($berat < 14.2)
        {
            $kategori = $cb1;
        }
        else
        {
            $kategori = $cc2;
        }
    elseif ($umur == 21)
        if ($berat < 9.2)
        {
            $kategori = $ca0;
        }
        elseif ($berat < 14.5)
        {
            $kategori = $cb1;
        }
        else
        {
            $kategori = $cc2;
        }
    elseif ($umur == 22)
        if ($berat < 9.4)
        {
            $kategori = $ca0;
        }
        elseif ($berat < 14.7)
        {
            $kategori = $cb1;
        }
        else
        {
            $kategori = $cc2;
        }
    elseif ($umur == 23)
        if ($berat < 9.5)
        {
            $kategori = $ca0;
        }
        elseif ($berat < 15.0)
        {
            $kategori = $cb1;
        }
        else
        {
            $kategori = $cc2;
        }
    elseif ($umur == 24)
        if ($berat < 9.7)
        {
            $kategori = $ca0;
        }
        elseif ($berat < 15.3)
        {
            $kategori = $cb1;
        }
        else
        {
            $kategori = $cc2;
        }
    else 
    {
        $LuarBatas = "z";
    }
elseif ($jenis == "p")   
    if ($umur == 0)
        if ($berat < 2.4)
        {
        $kategori = $ca0;
        }
        elseif ($berat < 4.2)
        {
        $kategori = $cb1;
        }
        else
        {
        $kategori = $cc2;
        }
    elseif ($umur == 1)
        if ($berat < 3.2)
        {
            $kategori = $ca0;
        }
        elseif ($berat < 5.5)
        {
            $kategori = $cb1;
        }
        else
        {
            $kategori = $cc2;
        }
    elseif ($umur == 2)
        if ($berat < 3.9)
        {
            $kategori = $ca0;
        }
        elseif ($berat < 6.6)
        {
            $kategori = $cb1;
        }
        else 
        {
            $kategori = $cc2;
        }
    elseif ($umur == 3)
        if ($berat < 4.5)
        {
            $kategori = $ca0;
        }
        elseif ($berat < 7.5)
        {
            $kategori = $cb1;
        }
        else
        {
            $kategori = $cc2;
        }
    elseif ($umur == 4)
        if ($berat < 5.0)
        {
            $kategori = $ca0;
        }
        elseif ($berat < 8.2)
        {
            $kategori = $cb1;
        }
        else
        {
            $kategori = $cc2;
        }
    elseif ($umur == 5)
        if ($berat < 5.4)
        {
            $kategori = $ca0;
        }
        elseif ($berat < 8.8)
        {
            $kategori = $cb1;
        }
        else 
        {
            $kategori = $cc2;
        }
    elseif ($umur == 6)
        if ($berat < 5.7)
        {
            $kategori = $ca0;
        }
        elseif ($berat < 9.3)
        {
            $kategori = $cb1;
        }
        else 
        {
            $kategori = $cc2;
        }
    elseif ($umur == 7)
        if ($berat < 6.0)
        {
            $kategori = $ca0;
        }
        elseif ($berat < 9.8)
        {
            $kategori = $cb1;
        }
        else 
        {
            $kategori = $cc2;
        }
    elseif ($umur == 8)
        if ($berat < 6.3)
        {
            $kategori = $ca0;
        }
        elseif ($berat < 10.2)
        {
            $kategori = $cb1;
        }
        else {
            $kategori = $cc2;
        }
    elseif ($umur == 9)
        if ($berat < 6.5)
        {
            $kategori = $ca0;
        }
        elseif ($berat < 10.5)
        {
            $kategori = $cb1;
        }
        else 
        {
            $kategori = $cc2;
        }
    elseif ($umur == 10)
        if ($berat < 6.7) 
        {
            $kategori = $ca0;
        }
        elseif ($berat < 10.9) 
        {
            $kategori = $cb1;
        } 
        else 
        {
            $kategori = $cc2;
        }
    elseif ($umur == 11)
        if ($berat < 6.9)
        {
            $kategori = $ca0;
        }
        elseif ($berat < 11.2)
        {
            $kategori = $cb1;
        }
        else
        {
            $kategori = $cc2;
        }
    elseif ($umur == 12)
        if ($berat < 7.0)
        {
            $kategori = $ca0;
        }
        elseif ($berat < 11.5)
        {
            $kategori = $cb1;
        }
        else 
        {
            $kategori = $cc2;
        }
    elseif ($umur == 13)
        if ($berat < 7.2)
        {
            $kategori = $ca0;
        }
        elseif ($berat < 11.8)
        {
            $kategori = $cb1;
        }
        else
        {
            $kategori = $cc2;
        }
    elseif ($umur == 14)
        if ($berat < 7.4)
        {
            $kategori = $ca0;
        }
        elseif ($berat < 12.1)
        {
            $kategori = $cb1;
        }
        else
        {
            $kategori = $cc2;
        }
    elseif ($umur == 15)
        if ($berat < 7.6)
        {
            $kategori = $ca0;
        }
        elseif ($berat < 12.4)
        {
            $kategori = $cb1;
        }
        else
        {
            $kategori = $cc2;
        }
    elseif ($umur == 16)
        if ($berat < 7.7)
        {
            $kategori = $ca0;
        }
        elseif ($berat < 12.6)
        {
            $kategori = $cb1;
        }
        else
        {
            $kategori = $cc2;
        }
    elseif ($umur == 17)
        if ($berat < 7.9)
        {
            $kategori = $ca0;
        }
        elseif ($berat < 12.9)
        {
            $kategori = $cb1;
        }
        else
        {
            $kategori = $cc2;
        }
    elseif ($umur == 18)
        if ($berat < 8.1)
        {
            $kategori = $ca0;
        }
        elseif ($berat < 13.2)
        {
            $kategori = $cb1;
        }
        else
        {
            $kategori = $cc2;
        }
    elseif ($umur == 19)
        if ($berat < 8.2)
        {
            $kategori = $ca0;
        }
        elseif ($berat < 13.5)
        {
            $kategori = $cb1;
        }
        else
        {
            $kategori = $cc2;
        }
    elseif ($umur == 20)
        if ($berat < 8.4)
        {
            $kategori = $ca0;
        }
        elseif ($berat < 13.7)
        {
            $kategori = $cb1;
        }
        else
        {
            $kategori = $cc2;
        }
    elseif ($umur == 21)
        if ($berat < 8.6)
        {
            $kategori = $ca0;
        }
        elseif ($berat < 14.0)
        {
            $kategori = $cb1;
        }
        else
        {
            $kategori = $cc2;
        }
    elseif ($umur == 22)
        if ($berat < 8.7)
        {
            $kategori = $ca0;
        }
        elseif ($berat < 14.3)
        {
            $kategori = $cb1;
        }
        else
        {
            $kategori = $cc2;
        }
    elseif ($umur == 23)
        if ($berat < 8.9)
        {
            $kategori = $ca0;
        }
        elseif ($berat < 14.6)
        {
            $kategori = $cb1;
        }
        else
        {
            $kategori = $cc2;
        }
    elseif ($umur == 24)
        if ($berat < 9.0)
        {
            $kategori = $ca0;
        }
        elseif ($berat < 14.8)
        {
            $kategori = $cb1;
        }
        else
        {
            $kategori = $cc2;
        }
    else 
    {
    $LuarBatas = "z";
    }

else
{
    $LuarBatas = "x";
}

/* Aliasi jenis kelamin */
if ($jenis == "p")
    {
        $jeniskelamin = "perempuan";
    }
    elseif ($jenis == "l")
    {
        $jeniskelamin = "laki-laki";
    }
    else
    {
        $jeniskelamin = "err";
    }

/* salkdjbsaivbj */


echo "<script>
    alert('Anak Anda yang berumur $umur bulan, dengan nama masuk kategori $kategori');
    </script>";


?>