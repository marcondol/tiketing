
<?php
class Pesawat_model extends CI_Model {

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

   public function get_airlines(){
      $data=array("akses_kode"=>$this->key ,
                  "app" => "info", 
                  "action"=>"get_airlines");
      return $this->post_request($data);
   }
   
   public function get_airlines_connect(){
      $data=array("akses_kode"=>$this->key ,
                  "app" => "info", 
                  "action"=>"get_airlines_connect");
      return $this->post_request($data);
   }

   public function get_airport_connect(){
      $data=array("akses_kode"=>$this->key ,
                  "app" => "info", 
                  "action"=>"get_airport",
                  "country"=>"INDONESIA"
               );
      return $this->post_request($data);
   }

   public function get_departure_airport($airline_id){
      $data=array("akses_kode"=>$this->key ,
                  "app" => "info", 
                  "action"=>"get_departure_airport",
                  "airline"=>"$airline_id"
               );
      return $this->post_request($data);
   }

   public function get_arrival_airport($airline_id, $airport){
      $data=array("akses_kode"=>$this->key ,
                  "app" => "info", 
                  "action"=>"get_arrival_airport",
                  "airline"=>"$airline_id",
                  "departure" =>"$airport"
               );
      return $this->post_request($data);
   }

   public function get_airport_rute($airport_id){
      $data=array("akses_kode"=>$this->key ,
                  "app" => "flight", 
                  "action"=>"get_rute",
                  "departure" =>"$airport_id"
               );
      return $this->post_request($data);
   }

   public function get_search_flight($data){     
      $data=array("akses_kode"=>$this->key ,
                  "app" => "flight", 
                  'action' => "search_multi",
                  'airline' => $data['airline'],
                  'roundtrip' => $data['roundtrip'],
                  'from' => $data['from'],
                  'to' => $data['to'],
                  'depart' => $data['depart'],
                  'return' => $data['return'],
                  'adult' => $data['adult'],
                  'child' => $data['child'],
                  'infant' => $data['infant']
               );
      return array($this->post_request($data));
   }

   public function get_flight_detail($data){
      $data=array("akses_kode"=>$this->key ,
                  "app" => "flight", 
                  "action" => "search_detail",
                  "session_id" =>$data["session_id"],
                  "flightno_1" =>$data["flight_no"],
                  "class_id_1" =>$data["flight_class"],
                  // "flightno_2" =>$data["flight_no"],
                  // "class_id_2" =>$data["flight_class"],
                 );
      return array($this->post_request($data));
   }

}