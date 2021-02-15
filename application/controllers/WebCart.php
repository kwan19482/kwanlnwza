<?php
	class WebCart extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('Product_model');

		}
		public function index(){
			$cart=$this->cart->contents();
			print_r($cart);
		}

		public function add()
		{
			/*foreach($this->input->post() as $key => $value){
				echo "$key = $value";
				echo "\$$key = \$this->input->post('$key');<br>";
			}*/
			$pro_id=$this->input->post('pro_id');
			$qty=$this->input->post('qty');
			$product=$this->Product_model->getOne($pro_id);

			$data = array(
			        'id'      => $pro_id,
			        'qty'     => $qty,
			        'price'   => $product->pro_price,
			        'name'    => array('TH'=>$product->pro_name_th,'EN'=>$product->pro_name_en),
			        
			);

			$this->cart->insert($data);

			redirect("Webcart/index");
		}
		public function edit(){
			redirect("Webcart/index");
		}
		public function delete(){
			redirect("Webcart/index");
		}
	}
?>