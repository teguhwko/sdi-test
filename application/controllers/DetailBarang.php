<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DetailBarang extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('role') != 'petugas' && $this->session->userdata('role') != 'admin') redirect('Login');
        $this->load->library('datatables');
        $this->load->model('BarangModel', 'barang');
        $this->load->model('HeaderBarangModel', 'headerBarang');
        //$this->load->library('pdf');
    }

    public function index()
    {
        $id = $this->input->get('id_header');
        $barang = $this->headerBarang->getWhere('*', ['id' => $id]);

        $data['judul'] = $barang['nama_barang'];
        $data['group'] = 'Barang';
        $data['id'] = $id;

        $this->load->view('layout/head', $data);
        $this->load->view('layout/navbar');
        $this->load->view('layout/sidebar');
        $this->load->view('petugas/detailbarang/detail');
        $this->load->view('layout/footer');
        $this->load->view('layout/script');
    }

    public function getDetail($id)
    {
        header('Content-Type: application/json');
        $data = $this->barang->getListBarang($id);
        echo $data;
    }

    public function tambah($idHeaderBarang)
    {
        $this->form_validation->set_rules(
            'kondisi',
            'Kondisi',
            'required',
            [
                'required' => '%s tidak boleh kosong',
            ]
        );

        $this->form_validation->set_rules(
            'status',
            'Status',
            'required',
            [
                'required' => '%s tidak boleh kosong',
            ]
        );

        $barang = $this->barang->getLast('kode_barang');
        $kodeDariDb = $barang['kode_barang'];
        $split = explode("-", $kodeDariDb);
        $kode = isset($split[1]) ? $this->generateKode($split[1]) : $this->generateKode(0);

        $headerBarang = $this->headerBarang->getWhere('nama_barang,stok_barang,stok_tersedia', ['id' => $idHeaderBarang]);
        if ($this->form_validation->run() == false) {
            $data['judul'] = $headerBarang['nama_barang'];
            $data['group'] = 'Barang';
            $data['idHeaderBarang'] = $idHeaderBarang;
            $data['kode'] = $kode;
            $this->load->view('layout/head', $data);
            $this->load->view('layout/navbar');
            $this->load->view('layout/sidebar');
            $this->load->view('petugas/detailbarang/tambah');
            $this->load->view('layout/footer');
            $this->load->view('layout/script');
        } else {
            $i = $this->input;
            $status = htmlspecialchars($i->post('status'));
            $data = [
                'status_barang' => $status,
                'kondisi_barang' => htmlspecialchars($i->post('kondisi')),
                'id_header_barang' => $idHeaderBarang,
                'kode_barang' => $kode
            ];
            $this->barang->insert($data);
            $stok = $headerBarang['stok_barang'] + 1;
            $stokTersedia = $headerBarang['stok_tersedia'];

            if ($status == "Tersedia") {
                $stokTersedia++;
            }

            $this->headerBarang->update(['stok_barang' => $stok, 'stok_tersedia' => $stokTersedia], ['id' => $idHeaderBarang]);

            $this->session->set_flashdata(
                'pesan',
                "<script>Toast.fire({icon: 'info',title: 'Data barang berhasil di simpan'})</script>"
            );
            redirect('DetailBarang?id_header=' . $idHeaderBarang);
        }
    }
    public function hapus($kodeBarang)
    {
        $barang = $this->barang->getWhere('id_header_barang,status_barang', ['kode_barang' => $kodeBarang]);
        $idHeaderBarang = $barang['id_header_barang'];


        $status = $barang['status_barang'];

        $headerBarang = $this->headerBarang->getWhere('stok_barang,stok_tersedia', ['id' => $idHeaderBarang]);
        $stok = $headerBarang['stok_barang'] - 1;
        $stokTersedia = $headerBarang['stok_tersedia'];

        if ($stok > 0) {
            if ($status == "Tersedia") {
                $stokTersedia--;
                $updateHeader = [
                    'stok_barang' => $stok,
                    'stok_tersedia' => $stokTersedia
                ];
            } else {
                $updateHeader = [
                    'stok_barang' => $stok
                ];
            }

            $this->headerBarang->update($updateHeader, ['id' => $idHeaderBarang]);
            $this->barang->delete(['kode_barang' => $kodeBarang]);
            $this->session->set_flashdata('pesan', "<script>Toast.fire({icon: 'error',title: 'Data barang berhasil di hapus'})</script>");
            redirect('DetailBarang?id_header=' . $idHeaderBarang);
        } else {
            $this->headerBarang->delete(['id' => $idHeaderBarang]);
            $this->barang->delete(['kode_barang' => $kodeBarang]);
            $this->session->set_flashdata('pesan', "<script>Toast.fire({icon: 'error',title: 'Data barang berhasil di hapus'})</script>");
            redirect('Barang');
        }
    }
    public function ubah($kode)
    {
        $this->form_validation->set_rules(
            'kondisi',
            'Kondisi',
            'required',
            [
                'required' => '%s tidak boleh kosong',
            ]
        );

        $this->form_validation->set_rules(
            'status',
            'Status',
            'required',
            [
                'required' => '%s tidak boleh kosong',
            ]
        );
        $data['barang'] = $this->barang->getBarang($kode);

        if ($this->form_validation->run() == false) {
            $data['judul'] = $data['barang']['nama_barang'];
            $data['group'] = 'Barang';
            $data['kode'] = $kode;
            $this->load->view('layout/head', $data);
            $this->load->view('layout/navbar');
            $this->load->view('layout/sidebar');
            $this->load->view('petugas/detailbarang/ubah');
            $this->load->view('layout/footer');
            $this->load->view('layout/script');
        } else {
            $i = $this->input;
            $idHeaderBarang = $data['barang']['id_header_barang'];
            $stokTersedia = $data['barang']['stok_tersedia'];
            $statusBarangLama = $data['barang']['status_barang'];
            $statusBarangBaru =  htmlspecialchars($i->post('status'));

            $data = [
                'status_barang' => htmlspecialchars($i->post('status')),
                'kondisi_barang' => htmlspecialchars($i->post('kondisi')),
            ];

            if ($statusBarangBaru != $statusBarangLama) {
                if ($statusBarangBaru == "Tersedia") {
                    $stokTersedia++;
                } else {
                    $stokTersedia--;
                }
                $this->headerBarang->update(['stok_tersedia' => $stokTersedia], ['id' => $idHeaderBarang]);
            }
            $this->barang->update($data, ['kode_barang' => $kode]);
            $this->session->set_flashdata(
                'pesan',
                "<script>Toast.fire({icon: 'info',title: 'Data barang berhasil di ubah'})</script>"
            );
            redirect('DetailBarang?id_header=' . $idHeaderBarang);
        }
    }
    private function generateKode($last)
    {
        $kode = "";
        $last ? $kode = 'BRG-' . sprintf("%03d", ($last + 1)) : $kode = 'BRG-' . sprintf("%03d", 1);
        return $kode;
    }
}
