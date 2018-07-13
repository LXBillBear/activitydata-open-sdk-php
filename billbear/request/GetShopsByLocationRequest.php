<?php
class GetShopsByLocationRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "shop/getShopsByLocation";
	}
	
	public function getApiParas(){
		return json_encode($this->apiParas);
	}
	
	public function check(){
		
	}
	
	public function putOtherTextParam($key, $value){
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}

 
	private $latitude;      

 	
    public function getLatitude() {
		return $this->latitude;
	}

	public function setLatitude($latitude){
		$this->latitude = $latitude;
		$this->apiParas["latitude"] = $latitude;
	}          
    
 
	private $longitude;      

 	
    public function getLongitude() {
		return $this->longitude;
	}

	public function setLongitude($longitude){
		$this->longitude = $longitude;
		$this->apiParas["longitude"] = $longitude;
	}          
    
 
	private $id;      

 	
    public function getId() {
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
		$this->apiParas["id"] = $id;
	}          
    

}