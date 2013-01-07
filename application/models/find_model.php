class Find_model extends CI_Model {
function__construct()
{
parent::__construct();
$this->load->database();
}

fuction search($dept)
{
$res = $this->db->get_where('departments',array('dept_name' => $dept));
return $res->result_aray();
}
}

