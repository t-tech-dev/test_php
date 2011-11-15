<?php
	class Testxss extends Controller {
 
     
    function __construct() {
        parent::__construct();
        $this->load->helper(array("form"));
    }
     
     
    function index() {
        // for textarea
        $output['inputpost'] = htmlspecialchars($this->input->post("inputpost"));
        $output['inputget'] = htmlspecialchars($this->input->get("inputget"));
        // for html output
        $output['resultpost'] = trim($this->input->post("inputpost",true));
        $output['resultget'] = trim($this->input->get("inputget",true));
        //
        $this->load->view("testxss_view", $output);
    }
     
 
}


?>