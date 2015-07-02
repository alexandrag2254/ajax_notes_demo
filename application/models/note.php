<?php  

class Note extends CI_Model 
{
  public function add($title)
  {
    $query = "INSERT INTO notes (title, created_at, updated_at) VALUES (?, NOW(), NOW())";
    $value = array($title);
    return $this->db->query($query, $value);
  }

  public function get_all()
  {
    return $this->db->query("SELECT * FROM notes")->result_array();
  }

  public function delete($id)
  {
    return $this->db->query("DELETE FROM notes WHERE id = ?", array($id));
  }

  public function update($info)
  {
    $query = "UPDATE notes SET description = ? WHERE id = ?";
    $values = array($info["description"], $info["id"]);
    return $this->db->query($query, $values);
  }
}

?>