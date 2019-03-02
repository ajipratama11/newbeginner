<?php
    $this->load->view('admin/template/head');
    $this->load->view('admin/template/top');
    $this->load->view('admin/template/side');
	
    echo $contents; 
    
    $this->load->view('admin/template/foot');
	$this->load->view('admin/template/js');	
?> 

