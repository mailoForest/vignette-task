<?php

namespace Vignettes;

class TruckDayVignette extends Vignette
{
	const TRUCK_VIGNETTE_COLOR = 'blue';
	const PRICE_PER_DAY = 7;
	
	use CalculatePriceTrait;

	public function __construct($date)
	{
		$this->color = self::TRUCK_VIGNETTE_COLOR;
		$this->date = $date;
		$this->duration = self::DAY;
		$this->price = self::PRICE_PER_DAY;
	}
	
	public function stick()
	{
		return 10;
	}
}