<?php

namespace Vignettes;

class CarDayVignette extends Vignette
{
	const CAR_VIGNETTE_COLOR = 'red';
	const PRICE_PER_DAY = 5;
	
	use CalculatePriceTrait;
	
	public function __construct($date)
	{
		$this->color = self::CAR_VIGNETTE_COLOR;
		$this->date = $date;
		$this->duration = self::DAY;
		$this->price = self::PRICE_PER_DAY;
	}
	
	public function stick()
	{
		return 5;	
	}
}