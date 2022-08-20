<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KondisiBarang extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if($this->session->userdata('role') != 'petugas' && $this->session->userdata('role') != 'admin') redirect('Login');
		$this->load->library('datatables'); 
		$this->load->model('KondisiBarangModel','kondisi');
		$this->load->model('BarangModel','barang');
		//$this->load->library('pdf');
	}

	public function index()
	{
		$data['judul']='Kondisi Barang';
        $data['group']='Kondisi Barang';
        
		$this->load->view('layout/head',$data);
		$this->load->view('layout/navbar');
		$this->load->view('layout/sidebar');
		$this->load->view('petugas/kondisibarang/kondisi');
		$this->load->view('layout/footer');
		$this->load->view('layout/script');
	}

	public function getKondisiBarang()
	{
		header('Content-Type: application/json');
		$data = $this->kondisi->getListKondisiBarang();
		echo $data;
	}
	public function tambah()
	{
		$this->form_validation->set_rules('barang','Nama','required',
                                        [
                                          'required'=>'%s tidak boleh kosong',
                                        ]);
        $this->form_validation->set_rules('kondisi','Jenis Kelamin','required',
                                        [
                                          'required'=>'%s tidak boleh kosong',
                                        ]);
        $this->form_validation->set_rules('jumlah','No HP','required|numeric',
                                        [
                                          'required'=>'%s tidak boleh kosong',
                                          'numeric'=>'%s hanya boleh diisi dengan angka',
                                        ]);
        if($this->form_validation->run()==false){
			$data['judul']='Tambah Kondisi Barang';
			$data['group']='Kondisi Barang';
            $data['barang'] = $this->barang->getAll();
			$this->load->view('layout/head',$data);
			$this->load->view('layout/navbar');
			$this->load->view('layout/sidebar');
			$this->load->view('petugas/kondisibarang/tambah');
			$this->load->view('layout/footer');
			$this->load->view('layout/script');
		}else{
			$i = $this->input;
			$kondisi = htmlspecialchars($i->post('kondisi'));
			$barang = htmlspecialchars($i->post('barang'));
			$jumlah = htmlspecialchars($i->post('jumlah'));

			$data=[
				'kondisi_barang'=>$kondisi,
				'kode_barang'=>$barang,
				'jumlah'=>$jumlah,
			];

			$dataBarangDiDatabase = $this->kondisi->getWhere('jumlah',['kode_barang'=>$barang,'kondisi_barang'=>$kondisi]);
			if($dataBarangDiDatabase){
				$jumlahLama = $dataBarangDiDatabase['jumlah'];
				$jumlahBaru = $jumlahLama + $jumlah;
				$this->kondisi->update(['jumlah'=>$jumlahBaru],['kode_barang'=>$barang,'kondisi_barang'=>$kondisi]);
			}else{
				$this->kondisi->insert($data);
			}

			$this->session->set_flashdata('pesan',"<script>Toast.fire({icon: 'info',title: 'Data kondisibarang berhasil di simpan'})</script>"
			);
			redirect('KondisiBarang');
		}
	}
	public function hapus($id){
		$this->kondisi->delete(['id'=>$id]);
		$this->session->set_flashdata('pesan',"<script>Toast.fire({icon: 'error',title: 'Data kondisibarang berhasil di hapus'})</script>");
		redirect('KondisiBarang');
    }
	public function ubah($id)
	{
		$this->form_validation->set_rules('barang','Nama','required',
                                        [
                                          'required'=>'%s tidak boleh kosong',
                                        ]);
        $this->form_validation->set_rules('kondisi','Jenis Kelamin','required',
                                        [
                                          'required'=>'%s tidak boleh kosong',
                                        ]);
        $this->form_validation->set_rules('jumlah','No HP','required|numeric',
                                        [
                                          'required'=>'%s tidak boleh kosong',
                                          'numeric'=>'%s hanya boleh diisi dengan angka',
                                        ]);
        if($this->form_validation->run()==false){
			$data['judul']='Ubah Kondisi Barang';
			$data['group']='Kondisi Barang';
			$data['barang'] = $this->barang->getAll();
			$data['kondisi'] = $this->kondisi->getWhere('*',['id'=>$id]);

			$this->load->view('layout/head',$data);
			$this->load->view('layout/navbar');
			$this->load->view('layout/sidebar');
			$this->load->view('petugas/kondisibarang/ubah');
			$this->load->view('layout/footer');
			$this->load->view('layout/script');
		}else{
			$i = $this->input;
			$data=[
				'jumlah'=>htmlspecialchars($i->post('jumlah')),
			];
			$this->kondisi->update($data,['id'=>$id]);
			$this->session->set_flashdata('pesan',"<script>Toast.fire({icon: 'info',title: 'Data kondisibarang berhasil di ubah'})</script>"
			);
			redirect('KondisiBarang');
		}
	}

	public function cetak()
    {
        $title = 'Laporan Kondisi Barang' ;
        $pdf = new PDF('P', 'mm', 'A4');
        $pdf->AddPage();
        $pdf->SetTitle($title);

        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(8, 6, '', 0, 0, 'L');
        $pdf->Cell(180, 10, 'Laporan Kondisi Barang', 0, 1, 'L');

        $pdf->SetFont('Arial', '', 7);
        $pdf->Cell(9, 7, '', 0, 0);
        $pdf->Cell(10, 6, 'NO', 1, 0, 'C');
        $pdf->Cell(26, 6, 'KODE BARANG', 1, 0, 'C');
        $pdf->Cell(70, 6, 'NAMA BARANG', 1, 0, 'L');
        $pdf->Cell(24, 6, 'KONDISI BARANG', 1, 0, 'C');
        $pdf->Cell(30, 6, 'JUMLAH', 1, 1, 'C');

		$i=1;
		$kondisiBarang= $this->kondisi->getLaporanKondisiBarang();
		foreach($kondisiBarang as $r){
			$pdf->Cell(9, 7, '', 0, 0);
			$pdf->Cell(10, 6, $i++, 1, 0, 'C');
			$pdf->Cell(26, 6, $r['kode_barang'], 1, 0, 'C');
			$pdf->Cell(70, 6, $r['nama_barang'], 1, 0, 'L');
			$pdf->Cell(24, 6, $r['kondisi_barang'], 1, 0, 'C');
			$pdf->Cell(30, 6, $r['jumlah'], 1, 1, 'C');

		}
        
        $pdf->SetFont('Arial', '', 10);

		$pdf->Output('D');
    }
}