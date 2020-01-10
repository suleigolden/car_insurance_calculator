<?php

//namespace app\controller;

/**
 * 
 */
class CarInsurance
{
	public $num_one;
	public $num_two;
	private $result;
	
	function __construct()
	{
		# code...
	}

	//Process percentage
    public function percentage($firstNum, $secNum)
    {	

        $this->num_one = $firstNum;
        $this->num_two = $secNum;   

        $this->result = $this->cal_percentage($this->num_one,$this->num_two);

        return $this->result; 
    }

    //Calculate percentage of a number
    public function cal_percentage($percentage,$num)
    {  	
            
     return ($percentage / 100) * $num;

    }

}