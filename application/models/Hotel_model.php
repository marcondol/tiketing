
<?php
class Hotel_model extends CI_Model {

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

   public function get_hotel($data){
      $data_post=array("akses_kode"=>$this->key,
                  "app"  => "hotel_v5",
                  "action" =>"hotel_search",
                  "city" =>strtolower($data["city"]),
                  "ci" => $data["ci"],
                  "co" => $data["co"],
                  "room" => $data["room"],
                  "adult" => $data["adult"],
                  "child"   => $data["child"],
                  "hotel_name" => "");
      return $this->post_request($data_post);
   }

   public function get_detail_hotel($data){
      $data_post=array("akses_kode"=>$this->key,
                  "app"  => "hotel_v5",
                  "action" =>"hotel_detail",
                  "session_id" =>$data["session_id"],
                  "hotelId" => $data["hotelId"],
                  );
      return $this->post_request($data_post);
   }

}