<?php

namespace Vignettes;

class TruckAnnuallyVignette extends TruckMonthlyVignette
{
	public function __construct($date)
	{
		parent::__construct($date);

		$this->duration = self::YEAR;
		$this->price = self::PRICE_PER_YEAR;
	}
}