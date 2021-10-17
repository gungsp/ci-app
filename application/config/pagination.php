<?php 
// CONFIG
        
$config['base_url'] = 'http://localhost/ci-app/warga/index/';

// ENCLOSING
$config['full_tag_open'] = '<nav><ul class="pagination justify-content-center">';
$config['full_tag_close'] = '</nav></ul>';

$config['first_link'] = 'First';
$config['first_tag_open'] = '<li class="page-item">';
$congig['first_tag_close'] = '</li>';

$config['last_link'] = 'Last';
$config['last_tag_open'] = '<li class="page-item">';
$congig['last_tag_close'] = '</li>';

$config['next_link'] = '&raquo';
$config['next_tag_open'] = '<li class="page-item">';
$congig['next_tag_close'] = '</li>';

$config['prev_link'] = '&laquo';
$config['prev_tag_open'] = '<li class="page-item">';
$congig['prev_tag_close'] = '</li>';

$config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
$config['cur_tag_close'] = '</a></li>';

$config['num_tag_open'] = '<li class="page-item">';
$config['num_tag_close'] = '</li>';

$config['attributes'] = array('class' => 'page-link'); 

?>