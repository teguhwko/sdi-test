<?php
    function tglIndo($tgl){
        $tanggal = ltrim(substr($tgl,8,2),0);
        $bulan = getNamaBulan(substr($tgl,5,2));
        $tahun = substr($tgl,0,4);
        return $tanggal.' '.$bulan.' '.$tahun; 
    }
    function getNamaBulan($angka){
        $text ="";
        switch($angka){
            case 1:
                $text = "Januari";
                break;
            case 2:
                $text = "Februari";
                break;
            case 3:
                $text = "Maret";
                break;
            case 4:
                $text = "April";
                break;
            case 5:
                $text = "Mei";
                break;
            case 6:
                $text = "Juni";
                break;
            case 7:
                $text = "Juli";
                break;
            case 8:
                $text = "Agustus";
                break;
            case 9:
                $text = "September";
                break;
            case 10:
                $text = "Oktober";
                break;                              
            case 11:
                $text = "November";
                break;
            case 12:
                $text = "Desember";
                break;   
        }
        return $text;
    }
?>