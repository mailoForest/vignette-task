<?php

namespace Vignettes;

class BussAnnuallyVignette extends BussMonthlyVignette
{
	public function __construct($date)
	{
		parent::__construct($date);

		$this->price  = self::PRICE_PER_YEAR;
		$this->duration = self::YEAR;
	}
}