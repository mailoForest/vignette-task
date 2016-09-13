<?php

namespace Driver;


use Vehicles\Vehicle;
use Vignettes\Vignette;
class Driver
{
	private $name;
	private $money;
	private $vehicles = [];
	private $gasStation;
	
	public function __construct($name, $money, $gasStation)
	{
		$this->name = $name;
		$this->money = $money;
	}
	
	public function buy(Vignette $vignette) 
	{
		if ($this->money < $vignette->getPrice()){
			throw new \Exception('Not enough cash, Stranger!');
		}
		
	}
}
