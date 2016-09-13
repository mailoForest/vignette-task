<?php

namespace Vignettes;

class CarMonthlyVignette extends CarDayVignette
{	
	public function __construct($date)
	{
		parent::__construct($date);
		
		$this->price  = self::PRICE_PER_MONTH;
		$this->duration = self::MONTH;
	}
}