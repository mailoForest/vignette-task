<?php

namespace Vignettes;

trait CalculatePriceTrait
{
	const PRICE_PER_YEAR = self::PRICE_PER_MONTH * 6;
	const PRICE_PER_MONTH = self::PRICE_PER_DAY * 10;
}