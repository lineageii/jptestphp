<?php
class RetCode {
	private $errorNum;
	private $retVal;

	public function __construct($errorNum, $retVal) {
		$this->errorNum = $errorNum;
		$this->retVal = $retVal;
		return $this;
	}

	public function getErrorNum()
	{
		return $this->errorNum;
	}

	public function setErrorNum($errorNum)
	{
		$this->errorNum = $errorNum;
	}

	public function getRetVal()
	{
		return $this->retVal;
	}

	public function setRetVal($retVal)
	{
		$this->retVal = $retVal;
	}
	
	public function json(){
		return json_encode(array(
			'errorNum' =>$this->errorNum,
			'retVal'=>$this->retVal
		));
	}
	
}
?>