<?php

class Home extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_sekolah');
        
    }

    public function index()
    {
        $data = array(
            'title'     => 'Pemetaan Sekolah',
            'sekolah'   => $this->m_sekolah->tampil(),
            'isi'       => 'v_pemetaan'
        );
        $this->load->view('layout/v_wrapper', $data, FALSE);
    }

}

/* End of file Controllername.php */
