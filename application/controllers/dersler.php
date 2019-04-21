<?php


class dersler extends CI_Controller{

    public function index() {


        $query = $this->db->get('dersbilgileri')->result();

        $viewData = array(
            "rows" => $query
        );




        $this->load->view('listele',$viewData);


    }

    public function insertPage(){
        $this->load->view("dersekle");
    }

    public function insert() {

        $derskodu = $this->input->post("derskodu");
        $dersadi = $this->input->post("ders");
        $bolum = $this->input->post("bolum");
        $dersiveren = $this->input->post("dersiveren");
        $ogrencisayisi = $this->input->post("ogrencisayisi");
        $derskredi = $this->input->post("derskredi");
        $dersicerik = $this->input->post("dersicerik");

        $data = array(
            "derskodu" => $derskodu,
            "ders" => $dersadi,
            "bolum" => $bolum,
            "dersiveren" => $dersiveren,
            "ogrencisayisi" => $ogrencisayisi,
            "derskredi" => $derskredi,
            "dersicerik" => $dersicerik
        );

        $insert = $this->db->insert('dersbilgileri',$data);


        if($insert){
            echo 'Ders Ekleme Başarılı';
            redirect(base_url());
        }else{
            echo 'Ders Ekleme Başarısız.';
        }


    }

    public function updatePage($id){

        $id = $this->uri->segment(3);
        $row = $this
            ->db
            ->where('id',$id)
            ->get("dersbilgileri")
            ->row();

        $viewData = new stdClass();
        $viewData ->row = $row;

        $this->load->view('dersduzenle',$viewData);
    }


    public function update($id){
        $derskodu = $this->input->post("derskodu");
        $dersadi = $this->input->post("ders");
        $bolum = $this->input->post("bolum");
        $dersiveren = $this->input->post("dersiveren");
        $ogrencisayisi = $this->input->post("ogrencisayisi");
        $derskredi = $this->input->post("derskredi");
        $dersicerik = $this->input->post("dersicerik");

        $data = array(
            "derskodu" => $derskodu,
            "ders" => $dersadi,
            "bolum" => $bolum,
            "dersiveren" => $dersiveren,
            "ogrencisayisi" => $ogrencisayisi,
            "derskredi" => $derskredi,
            "dersicerik" => $dersicerik
        );

        $update = $this
            ->db
            ->where('id',$id)
            ->update('dersbilgileri',$data);

        if($update){
            echo 'Güncelleme Başarılı';
            echo '<br>';
            echo 'Ders Listesi sayfasina yönlendiriliyorsunuz...';
            redirect(base_url('dersler/'));

        }else{
            echo 'Güncelleme Başarısız.';
        }
    }

    public function delete($id){

        $delete = $this
            ->db
            ->where('id',$id)
            ->delete('dersbilgileri');


        if($delete){
           redirect(base_url("dersler"));


        }else{
            echo 'Silme Başarısız.';
        }
    }

}



?>