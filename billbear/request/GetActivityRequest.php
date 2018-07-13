<?php
class GetActivityRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "activity/getActivity";
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

 
	private $id;      

 	
    public function getId() {
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
		$this->apiParas["id"] = $id;
	}          
    

}