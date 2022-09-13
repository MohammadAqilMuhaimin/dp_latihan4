<?php
defined('BASEPATH') OR exit('Not Allowed access');

class Mahasiswa_model extends CI_Model{

    public function getDataMahasiswa(){
        // $this->db->order_by('NoBarang','DESC');
        $data = $this->db->get('mahasiswa')->result();
        return $data;
    }

    public function simpan($data){
        $this->db->insert('mahasiswa',$data);
        return $this;
    }

    public function find($id_mhs){
        $this->db->where('id_mhs',$id_mhs);
        $data =$this->db->get('mahasiswa')->row();

        // select * from mahasiswa where id_mhs ='$id_mhs';
        return $data;
    }

    public function edit_data($data,$id_mhs){
        //update barang set nama_barang='',harga_satuan='xx' where NoBarang='xxx'
        $this->db->where('id_mhs',$id_mhs);
        $this->db->update('mahasiswa',$data);
        return $this;

    }

    public function delete($id_mhs){
        $this->db->where('id_mhs',$id_mhs);
        $this->db->delete('mahasiswa');
        return $this;
    }
}
?>