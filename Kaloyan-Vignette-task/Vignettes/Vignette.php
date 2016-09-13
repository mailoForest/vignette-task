<?php

namespace Vignettes;

class Vignette
{
	const DAY = 'day';
	const MONTH = 'month';
	const YEAR = 'year';
	
	protected $date;
	protected $color;
	protected $duration;
	protected $price;

	public function getPrice()
	{
		return $this->price;
	}
	
	public function getDuration()
	{
		return $this->duration;
	}
	public function getDate()
	{
		return $this->date;
	}
	public function getColor()
	{
		return $this->color;
	}
	
	public function stick(){}
}

