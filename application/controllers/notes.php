<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Notes extends CI_Controller {
  public function index()
  {
    $this->load->view("index");
  }

  public function create()
  {
    $this->load->model("Note");
    $this->Note->add($this->input->post("title"));
    $this->partial_html();
  }

  public function partial_html()
  {
    $this->load->model("Note");
    $data["notes"] = $this->Note->get_all();
    $this->load->view("partial.php", $data);
  }

  public function delete()
  {
    $this->load->model("Note");
    $this->Note->delete($this->input->post("id"));
    $this->partial_html();
  }

  public function update()
  {
    $info["id"] = $this->input->post("id");
    $info["description"] = $this->input->post("description");
    $this->load->model("Note");
    $this->Note->update($info);

    $this->partial_html();
  }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */