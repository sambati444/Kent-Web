<?php

if(!(isset($header) && $header == false))
	$this->load->view('layout/header');

if(!(isset($sidebar) && $sidebar == false))
	$this->load->view('layout/sidebar');

if(isset($_view))
	$this->load->view($_view);

if(!(isset($footer) && $footer == false))
	$this->load->view('layout/footer');

?>