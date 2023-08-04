<?php
class Capitales extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        //Cargar Modelo
        $this->load->model('Capital');
    }
    //Funcion que renderiza la vista index
    public function index()
    {
        $data['capital_efkq'] = $this->Capital->obtenerTodos();
        // print_r($data);
        $this->load->view('header');
        $this->load->view('capitales/index', $data);
        $this->load->view('footer');
    }

    public function nuevo()
    {
        $this->load->view('header');
        $this->load->view('capitales/nuevo');
        $this->load->view('footer');
    }

    public function guardar()
    {
        $datosNuevoCapital = array(
            "id_efkq" => $this->input->post('id_efkq'),
            "pais_efkq" => $this->input->post('pais_efkq'),
            "continente_efkq" => $this->input->post('continente_efkq'),
            "nombre_efkq" => $this->input->post('nombre_efkq'),
            "longitud_efkq" => $this->input->post('longitud_efkq'),
            "latitud_efkq" => $this->input->post('latitud_efkq')
        );
        if ($this->Capital->insertar($datosNuevoCapital)) {
            redirect('capitales/index');
        } else {
            echo "<h1>ERROR DE LA PAGINA</h1>";
        }
    }
    //funcion para eliminar jugador
    public function eliminar($id_efkq)
    {
        if ($this->Capital->borrar($id_efkq)) {
            redirect('capitales/index');
        } else {
            echo "ERROR AL BORRAR :(";
        }
    }
} // Cierre de la clase
