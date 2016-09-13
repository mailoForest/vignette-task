<?php

namespace Vignettes;

class CarAnnuallyVignette extends CarMonthlyVignette
{	
	public function __construct($date)
	{
		parent::__construct($date);
	
		$this->price  = self::PRICE_PER_YEAR;
		$this->duration = self::YEAR;
	}
}