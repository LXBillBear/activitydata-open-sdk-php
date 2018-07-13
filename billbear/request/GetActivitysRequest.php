<?php
class GetActivitysRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "activity/getActivitys";
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

 
	private $cityId;      

 	
    public function getCityId() {
		return $this->cityId;
	}

	public function setCityId($cityId){
		$this->cityId = $cityId;
		$this->apiParas["cityId"] = $cityId;
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