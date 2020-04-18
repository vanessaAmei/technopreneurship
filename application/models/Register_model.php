<?php
class Register_model extends CI_Model
{
 public function insert($data)
 {
    // $this->db->insert('user', $data);
    // return $this->db->insert_id();
    $this->db->insert('user', $data);
    $query = $this->db->query('SELECT LAST_INSERT_ID()');
    $row = $query->row_array();
    return $row['LAST_INSERT_ID()'];
 }

 public function verify_email($key)
 {
  $this->db->where('verification_key', $key);
  $this->db->where('is_email_verified', 'no');
  $query = $this->db->get('user');
  if($query->num_rows() > 0)
  {
   $data = array(
    'is_email_verified'  => 'yes'
   );
   $this->db->where('verification_key', $key);
   $this->db->update('user', $data);
   return true;
  }
  else
  {
   return false;
  }
 }
}

?>