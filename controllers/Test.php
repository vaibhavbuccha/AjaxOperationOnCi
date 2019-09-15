<?php

class Test extends CI_Controller
{
	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->helper('url', 'form');
		$this->load->model('Test_model');
	}

	public function index()
	{
		$data['main_view'] = 'add';
		$this->load->view('main',$data);
		
	}

	public function insert()
	{
		$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
		$this->form_validation->set_rules('productName','product name','required');
		// $this->form_validation->set_rules('productimage','product image','required');
		$this->form_validation->set_rules('storename','storename','required');
		$this->form_validation->set_rules('qty','qty','required');
		$this->form_validation->set_rules('color[]','color','required');
		if ($this->form_validation->run() == FALSE)
        {
            echo "error";
        }else if($_FILES['productimage']['name']==''){
        	echo "error";
        }
        else
        {
            echo "success";
        	$name = $this->input->post('productName');
        	$storename = $this->input->post('storename');
        	$color = $this->input->post('color');
        	$image = $_FILES['productimage']['name'];
        	$qty = $this->input->post('qty');
        	$publishdate = $this->input->post('publishDate');
        	$unpublishDate = $this->input->post('unpublishDate');
        	$status = ($this->input->post('status')== null)?$this->input->post('status') : '1';
        	$colors = implode(',', $color);
        	$config['upload_path'] = './assets/';
	        $config['allowed_types'] = 'gif|jpg|png';
	        $config['max_size'] = 2000;
	        $config['max_width'] = 1500;
	        $config['max_height'] = 1500;

	        $this->load->library('upload', $config);

	        if (!$this->upload->do_upload('productimage')) {
	            $error = array('error' => $this->upload->display_errors());

	            // $this->load->view('files/upload_form', $error);
	            // print_r($error);die();
	        } else {
	            $data = array('image_metadata' => $this->upload->data());

	            // $this->load->view('files/upload_result', $data);
	            // print_r($data);die();
	        }

        	$data = [
        		'name'=>$name,
        		'image'=>$image,
        		'storename'=>$storename,
        		'color'=>$colors,
        		'publishdate'=>$publishdate,
        		'unpublishdate'=>$unpublishDate,
        		'status'=>$status,
        		'qty'=>$qty
        	];
        	// echo '<pre>';
        	// print_r($data);die();
        	$this->db->insert('product',$data);
        	// echo $this->db->last_query();
        }
	}

	public function listing()
	{
		$data['product']	= $this->db->get('product')->result();
		$data['main_view'] = 'listing';
		$this->load->view('main',$data);
	}
		
	public function editView($id){
		$data['product'] = $this->db->get('product',['id'=>$id])->result();
		$data['main_view']= 'edit';
		$this->load->view('main',$data);
	}
}


?>