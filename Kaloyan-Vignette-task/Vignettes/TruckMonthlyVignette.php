<?php

namespace Vignettes;

class TruckMonthlyVignette extends TruckDayVignette
{
	public function __construct($date)
	{
		parent::__construct($date);
		
		$this->duration = self::MONTH;
		$this->price = self::PRICE_PER_MONTH;
	}
}