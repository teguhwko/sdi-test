<?php
include_once APPPATH . '/third_party/fpdf/fpdf.php';
class PDF extends FPDF{
    function Header()
	{
		$this->SetDisplayMode(100,'default');
        $this->Image(base_url('gambar/logo.JPG'),20,17,17,17);
        $this->SetFont('Arial','B',20);
        $this->SetTextColor(42, 135, 189);
        $this->Cell(190,10,'CV. PERSIA DAYA ENERGI',0,1,'C');

        $this->SetFont('Arial','',12);
        $this->SetTextColor(209, 29, 29);
        $this->Cell(190,5,'CONTRAKTOR - ELECTRICAL - MECHANICAL - SUPPLIER',0,1,'C');
        
        $this->SetFont('Arial','b',9);
        $this->SetTextColor(8, 8, 8);
        $this->Cell(190,5,'Alamat : Jln. Raya Indarung No.21 Padang HP.081363381653 /  081378234927',0,1,'C');
        $this->Cell(190,5,'Workshop : Jln. Raya Bandar Buat No.17 Telp (0751) 7740953',0,1,'C');
        $this->Cell(190,5,'Email : Persiadayaenergi@gmail.com',0,1,'C');
        $this->Cell(20,7,'',0,1,'C');
        $this->SetLineWidth(1);

        $this->Line(20,42,185,42);
        $this->SetLineWidth(0);
        $this->Line(20,43,185,43);
	}
    function Footer()
    {
        $this->SetY(-15);
        $this->SetFont('Arial','I',8);
        $this->Cell(0,10,'Halaman '.$this->PageNo().'',0,0,'R');
    }
}
?>