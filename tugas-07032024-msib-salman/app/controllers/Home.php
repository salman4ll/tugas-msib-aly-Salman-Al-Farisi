<?php
session_start();
class Home extends Controller {
    public function __construct()
    {
        isLoggedIn();
    }
    public function index() {

            $data['judul'] = 'Home';        
            $data['peserta'] =  $this->model('HomeModel')->getAllPeserta();
            $this->view('components/header', $data);
            $this->view('home/index', $data);
            $this->view('components/footer');
        }
    
}