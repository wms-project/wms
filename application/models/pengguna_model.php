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
        $query = $this->db->query("SELECT * FROM pengguna");
        return $row = $query->result_array();
	}

  public function savePengguna()
    {
        $data = [
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
        return $this->db->delete('pengguna');
        // return $this->db->delete($this->table,['id' => $id]);
    }
}
