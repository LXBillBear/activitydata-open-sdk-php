<?php
class GetShopsByActivityIdLiteRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "shopLite/getShopsByActivityIdLite";
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
    
 
	private $cityId;      

 	
    public function getCityId() {
		return $this->cityId;
	}

	public function setCityId($cityId){
		$this->cityId = $cityId;
		$this->apiParas["cityId"] = $cityId;
	}          
    
 
	private $activityId;      

 	
    public function getActivityId() {
		return $this->activityId;
	}

	public function setActivityId($activityId){
		$this->activityId = $activityId;
		$this->apiParas["activityId"] = $activityId;
	}          
    
 
	private $pageNo;      

 	
    public function getPageNo() {
		return $this->pageNo;
	}

	public function setPageNo($pageNo){
		$this->pageNo = $pageNo;
		$this->apiParas["pageNo"] = $pageNo;
	}          
    
 
	private $pageSize;      

 	
    public function getPageSize() {
		return $this->pageSize;
	}

	public function setPageSize($pageSize){
		$this->pageSize = $pageSize;
		$this->apiParas["pageSize"] = $pageSize;
	}          
    

}