<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

    public function __construct()
    {
        parent:: __construct();
        $this->load->model('mahasiswa_model');
    }

	public function index() {

		$this->data['title'] = 'Mahasiswa';
        $this->data['mahasiswa'] = $this->mahasiswa_model->getDataMahasiswa();
        $this->load->view('mahasiswa/mahasiswa_list', $this->data);
	}

    public function add(){
        $this->data['title']="Tambah Mahasiswa";
        $this->load->view('mahasiswa/mahasiswa_add',$this->data);
    }

    public function add_save(){
        $data = array(
            'nama'=> $this->input->post('nama'),
            'nim'=> $this->input->post('nim'),
            'no_hp'=> $this->input->post('no_hp'),
            'email'=> $this->input->post('email'),
            'jurusan'=> $this->input->post('jurusan'),
            'foto_profil'=> $_FILES['foto'],
            'alamat'=> $this->input->post('alamat')
        );

        if ($foto=''){}else{
            $config['uploud_path'] = './assets/foto';
            $config['allowed_types'] = 'jpg|png';

            $this->load->library('upload',$config);
            if(!$this->upload->do_upload('foto')){
                echo "Upload foto gagal"; die();
            }else{
                $foto=$this->upload-data('file_name');
            }
        }

        $simpan = $this->mahasiswa_model->simpan($data);
        if($simpan){
            redirect('Mahasiswa');
        }
    }

    public function edit($id_mhs){
        $this->data['title'] = 'Edit Mahasiswa';
        $this->data['mahasiswa'] = $this->mahasiswa_model->find($id_mhs);

        $this->load->view('mahasiswa/mahasiswa_edit',$this->data);
    }

    public function edit_save(){
        $id_mhs = $this->input->post('id_mhs');
        $data = array(
            'nama'=> $this->input->post('nama'),
            'nim'=> $this->input->post('nim'),
            'no_hp'=> $this->input->post('no_hp'),
            'email'=> $this->input->post('email'),
            'jurusan'=> $this->input->post('jurusan'),
            'foto_profil'=> $this->input->post('foto_profil'),
            'alamat'=> $this->input->post('alamat')
        );
        $edit = $this->mahasiswa_model->edit_data($data,$id_mhs);
        if($edit){
            redirect("mahasiswa");
        }
    }


    public function hapus($id_mhs){
        $delete = $this->mahasiswa_model->delete($id_mhs);
        if($delete){
            redirect('mahasiswa');
        }
    }
}
?>