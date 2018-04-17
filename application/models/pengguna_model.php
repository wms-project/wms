<?php
class pengguna_model extends CI_Model
{

	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function getPengguna()
	{
		$page = isset($_POST['page']) ? intval($_POST['page']):1;
		$rows = isset($_POST['rows']) ? intval($_POST['rows']):50;
		$sort = isset($_POST['sort']) ? strval($_POST['sort']):'pengguna.kd_pengguna';
		$order = isset($_POST['order']) ? strval($_POST['order']):'asc';
		$search = isset($_POST['nama']) ? strval($_POST['nama']):'';
		$offset = ($page-1)*$rows;
		$result = array();
		$result['total'] = $this->db->get('pengguna')->num_rows();
		$row = array();
		// $where = "where '$_POST['nama']'"
		$query = "SELECT * from pengguna where concat(nama)
							like '%$search%' order by $sort $order limit $offset, $rows";
		$country = $this->db->query($query)->result_array();
		$result = array_merge($result, ['rows'=>$country]);
		return $result;
        // $query = $this->db->query("SELECT * FROM pengguna");
        // return $row = $query->result_array();
	}

  public function savePengguna()
    {
        $data = [
						'kd_pengguna' => $this->input->post('kd_pengguna'),
            'nama' => $this->input->post('nama'),
        ];
        $this->db->insert('pengguna',$data);
        return $this->db->insert_id();
    }
    public function updatePengguna($id)
    {
        $data =  [
            'nama' => $this->input->post('nama')
        ];
        $this->db->where('kd_pengguna',$id);
        $this->db->set($data);
        return $this->db->update('pengguna');
    }
    public function destroyCustomer($id)
    {
        $this->db->where('kd_pengguna',$id);
<<<<<<< HEAD
        return 	$this->db->delete('pengguna');
=======
        return $this->db->delete('pengguna');
>>>>>>> c6c890c42a9c6113e282b3dc2b54a3c3a5f6b00a
        // return $this->db->delete($this->table,['id' => $id]);
    }
		// function hapus($param_id, $id, $table){
    //     $this->db->delete($table, array($param_id => $id));
    //     return true;
    // }
}
