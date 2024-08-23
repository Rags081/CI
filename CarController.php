<?php 
    class CarController extends CI_Controller{
        public function index(){
            $this->load->view('car_model/list');
        }
    } 

?>