<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Start
 *
 * @author atbr
 */
class Start extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function accueil($pseudo = '') {

        $data = array();
        $data['pseudo'] = $pseudo;
        $this->load->view('accueil.php', $data);
    }

}
