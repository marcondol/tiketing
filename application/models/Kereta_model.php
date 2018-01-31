
<?php
class Kereta_model extends CI_Model {

   public $key;
   public $url;

   public function __construct(){
	 parent::__construct();
	 $this->key = $this->config->item('key');
	 $this->url = $this->config->item('url');
   }

   public function post_request($data){
      $ch=curl_init();
      // user credencial
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_URL, $this->url);
      curl_setopt($ch, CURLOPT_POST, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
      curl_setopt($ch, CURLOPT_VERBOSE, true);
      $response = curl_exec($ch);
      return json_decode($response);
   }

   public function get_station(){
      $data=array("akses_kode"=>$this->key ,
                  "app" => "train",
                  "action"=>"get_station");
      return $this->post_request($data);
   }

   public function get_train($data){
      $data=array("akses_kode"=>$this->key ,
                  "app" => "train",
                  'action' => "train_search",
                  'roundtrip'  => $data['roundtrip'],
                  'from'    => $data['from'],
                  'to'      => $data['to'],
                  'depart'  => $data['depart'],
                  'adult'=> $data['adult'],
                  'infant'=> $data['child']);
      return $this->post_request($data);
   }

   public function get_train_detail($data){
      $post_data=array("akses_kode"=>$this->key ,
                  "app" => "train",
                  "action"=> "train_detail",
                  "session_id"=> $data['session_id'],
                  "train_no_1"=> $data['train_no'],
                  "train_name_1"=> $data['train_name'],
                  "sub_class_1"=> $data['train_class']
      );
      return $this->post_request($post_data);
   }
   public function get_train_book($data_post){
      $data=array("akses_kode"=>$this->key ,
                  "app" => "train",
                  "action" => "train_book"
                 );
      $data = array_merge($data, $data_post);
      $res = array($this->post_request($data));
      echo "<pre>";
      print_r($data);
      print_r($res);
      // $this->save_order($res);
      return $res;
   }

   public function save_order($data){
     $insert_data = array(
         "book_id" => $data[0]->book_id,
         "order_type" => "kereta",
         "order_dttm"=> date("Y-m-d H:i:s")
     );
     $this->db->insert("misterklik_order",$insert_data);
   }
}