<?php

namespace Vignettes;

class BussDayVignette extends Vignette
{
	const BUSS_VIGNETTE_COLOR = 'green';
	const PRICE_PER_DAY = 9;
	
	use CalculatePriceTrait;

	public function __construct($date)
	{
		$this->color = self::BUSS_VIGNETTE_COLOR;
		$this->date = $date;
		$this->duration = self::DAY;
		$this->price = self::PRICE_PER_DAY;
	}
	public function stick()
	{
		return 20;
	}
}