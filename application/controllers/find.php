<?php 

class Find extends CI_Controller {

fuction__construct ()
{
parent::__construct();
$this->load->model('find_model');
}

fuction index()
{

}


fuction findemp()
{
$dept = $this->input->get ('dept');

$res =$this->find_model->search($dept);

echo json_encode($res);
}


}
