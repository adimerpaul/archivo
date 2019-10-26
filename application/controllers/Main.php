<?php


class Main extends CI_Controller{
function index(){
    if (!isset($_SESSION['user'])){
        header("Location: ".base_url()."");
    }
    $this->load->view('main');
}
    function archivo($idregistro){
    $query=$this->db->query("SELECT * FROM modificaciones WHERE idregistro='$idregistro' ORDER BY idmodificacion DESC");
    if ($query->num_rows()>0){
        $query=$this->db->query("SELECT * FROM cancelaciones WHERE idregistro='$idregistro' ORDER BY idcancelacion DESC");
        if ($query->num_rows()>0){
            $nombre=$query->row()->nombre;
            $nombre=str_replace(' ','_',$nombre);
            header("Location: ".base_url()."archivos/CANCELACIONES/".$nombre.".pdf");
        }else{
            $query=$this->db->query("SELECT * FROM cancelaciones WHERE idregistro='$idregistro' ORDER BY idcancelacion DESC");
            $nombre=$query->row()->nombre;
            $nombre=str_replace(' ','_',$nombre);
            header("Location: ".base_url()."archivos/MODIFICACIONES/".$nombre.".pdf");
        }
    }else{
        $query=$this->db->query("SELECT * FROM registros WHERE idregistro='$idregistro' ORDER BY idregistro DESC");
        $nombre=$query->row()->nombre;
        $nombre=str_replace(' ','_',$nombre);
        header("Location: ".base_url()."archivos/REGISTROS/".$nombre.".pdf");
    }
    }
function insert(){
    $nombre=strtoupper( $_POST['nombre']);
    $ci=$_POST['ci'];
    $this->db->query("INSERT INTO persona SET
    nombre='$nombre',
    carnet='$ci'
    ");
    header("Location: ".base_url()."Main");
}
    function persona($id){
        $this->db->where('idpersona', $id);
$query=$this->db->get('persona');
        echo json_encode($query->result_array());
    }
function consulta($tabla,$id){

    $query=$this->db->query("SELECT * FROM $tabla
 WHERE idpersona='$id'");
    echo json_encode($query->result_array());
}
function subir(){
    $tabla=$_POST['tabla'];
    $idpersona=$_POST['idpersona'];
    $nombre=$_POST['nombre'];
    $mi_archivo = 'archivo';
    $config['upload_path'] = "archivos/$tabla";
    $config['file_name'] =$nombre ;
    $config['allowed_types'] = "*";
    $config['max_size'] = "50000";
    $config['max_width'] = "2000";
    $config['max_height'] = "2000";

    $this->load->library('upload', $config);

    if (!$this->upload->do_upload($mi_archivo)) {
        //*** ocurrio un error
        $data['uploadError'] = $this->upload->display_errors();
        echo $this->upload->display_errors();
        return;
    }

    $data['uploadSuccess'] = $this->upload->data();
    $this->db->insert($tabla,array('idpersona'=>$idpersona,'nombre'=>$nombre));
    header("Location: ".base_url()."Main");
}
function modificar(){
    $idpersona=$_POST['idpersona'];
    $idregistro=$_POST['idregistro'];
    $row=$this->db->query("SELECT * FROM persona WHERE idpersona='$idpersona'")->row();
    $nombre=$row->nombre;
    $carnet=$row->carnet;
    $row=$this->db->query("SELECT count(*) cantidad FROM  modificaciones WHERE idpersona='$idpersona'")->row();
    $numero=$row->cantidad+1;
    $nombre=$nombre.'_'.$carnet.'_'.$numero;

    $mi_archivo = 'archivo';
    $config['upload_path'] = "archivos/MODIFICACIONES";
    $config['file_name'] =$nombre ;
    $config['allowed_types'] = "*";
    $config['max_size'] = "50000";
    $config['max_width'] = "2000";
    $config['max_height'] = "2000";

    $this->load->library('upload', $config);

    if (!$this->upload->do_upload($mi_archivo)) {
        //*** ocurrio un error
        $data['uploadError'] = $this->upload->display_errors();
        echo $this->upload->display_errors();
        return;
    }

    $data['uploadSuccess'] = $this->upload->data();
    $this->db->insert('Modificaciones',array('idpersona'=>$idpersona,'nombre'=>$nombre,'idregistro'=>$idregistro));
    $this->db->query("UPDATE registros SET estado='MODIFICADO' WHERE idregistro='$idregistro'");
    header("Location: ".base_url()."Main");
}
    function cancelar(){
        $idpersona=$_POST['idpersona'];
        $idregistro=$_POST['idregistro'];
        $row=$this->db->query("SELECT * FROM persona WHERE idpersona='$idpersona'")->row();
        $nombre=$row->nombre;
        $carnet=$row->carnet;
        $row=$this->db->query("SELECT count(*) cantidad FROM  cancelaciones WHERE idpersona='$idpersona'")->row();
        $numero=$row->cantidad+1;
        $nombre=$nombre.'_'.$carnet.'_'.$numero;

        $mi_archivo = 'archivo';
        $config['upload_path'] = "archivos/CANCELACIONES";
        $config['file_name'] =$nombre ;
        $config['allowed_types'] = "*";
        $config['max_size'] = "50000";
        $config['max_width'] = "2000";
        $config['max_height'] = "2000";
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload($mi_archivo)) {
            //*** ocurrio un error
            $data['uploadError'] = $this->upload->display_errors();
            echo $this->upload->display_errors();
            return;
        }

        $data['uploadSuccess'] = $this->upload->data();
        $this->db->insert('cancelaciones',array('idpersona'=>$idpersona,'nombre'=>$nombre,'idregistro'=>$idregistro));
        $this->db->query("UPDATE registros SET estado='CANCELADO' WHERE idregistro='$idregistro'");
        header("Location: ".base_url()."Main");
    }
}
