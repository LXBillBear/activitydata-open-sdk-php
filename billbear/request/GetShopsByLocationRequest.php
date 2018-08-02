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
    
 
	private $bankName;      

 	
    public function getBankName() {
		return $this->bankName;
	}

	public function setBankName($bankName){
		$this->bankName = $bankName;
		$this->apiParas["bankName"] = $bankName;
	}          
    
 
	private $category;      

 	
    public function getCategory() {
		return $this->category;
	}

	public function setCategory($category){
		$this->category = $category;
		$this->apiParas["category"] = $category;
	}          
    
 
	private $date;      

 	
    public function getDate() {
		return $this->date;
	}

	public function setDate($date){
		$this->date = $date;
		$this->apiParas["date"] = $date;
	}          
    

}