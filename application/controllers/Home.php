<?php 

class Home extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();

		if($this->session->userdata('language')==''){
			$this->session->set_userdata('language','TH');
		}
		$this->lang->load($this->session->userdata('language'),'lang');
		$this->load->model('Product_model');
	}

	public function index()
	{
		// Pagination library
		$config['base_url'] = base_url('Home/index/');	
		$config['total_rows'] = $this->Product_model->count();
		$config['per_page'] = 18;
		
		$this->pagination->initialize($config);
		$data['links'] = $this->pagination->create_links();

		$start = $this->uri->segment(3)>0?$this->uri->segment(3):0;
		$products  = $this->Product_model->getAll($start, $config['per_page']);

		$data['total_rows'] = $config['total_rows'];
		$data['products'] = $products;
		// echo $this->db->last_query();
		// exit();
		//$data['content'] = 'province/show';

		$data['lang'] = $this->session->userdata('language');

		$this->load->view('watchshop/index.php',$data);
	}
	public function productDetail($productId=0){
		$products  = $this->Product_model->getOne($productId);
		$data['lang'] = $this->session->userdata('language');
		/*echo $this->db->last_query();
		print_r($products);
		exit();*/
		$data['products'] = $products;
		$this->load->view('watchshop/product_details',$data);

	}
	public function updatePrice()
	{
		$products  = $this->Product_model->getAll(0, 700);
		foreach($products as $product){
			$this->db->where('pro_id',$product->pro_id);
			$data = array('pro_price'=>rand(200,8000));
			$this->db->update('products',$data);

		}

	}

}
 ?>