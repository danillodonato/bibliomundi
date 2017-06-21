<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Principal_model extends CI_Model {

	public function __construct() {
			parent::__construct();
			$this->load->helper('url');
	}


	public function get_sales() {
		$conexao = mysqli_connect('localhost','root','','bibliomundi');
		if($conexao){
			// die("Conectado");
			// echo "Conectado!";
		}else{
			// die("Deu ruim");
 			echo "Deu merda!<br>";
 			echo "ERRO: ".mysqli_error;
		}
		$query = "select y.author_name, sum(y.size) as size, sum(y.sales) as sales from (select a.author_name, (select count(x.sale_price) from sale_item x where x.ebook_id_fk = e.ebook_id) as size,sum(s.sale_price) as sales from sale_item s inner join ebook e on s.ebook_id_fk = e.ebook_id inner join author a on a.author_id = e.author_id_fk group by a.author_name, e.ebook_id)y group by y.author_name;";
		$result = mysqli_query($conexao,$query);
		$dados = array();
		while($row = mysqli_fetch_assoc($result)){
			$dados['dados'][] = $row;
		}
		// var_dump($dados);
		return $dados;
	}

}
?>