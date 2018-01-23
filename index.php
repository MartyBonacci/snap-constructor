<?php

class Car {
	private $color;
	private $mpg;
	public function __construct(string $newColor, int $newMpg) {
		try{
			$this->setColor($newColor);
			$this->setMpg($newMpg);
		}
		catch(\InvalidArgumentException | \TypeError $exception) {
			$exceptionType = get_class($exception);
			throw (new $exceptionType($exception-getMessage(),0, $exception));
		}
	}

	/**
	 * @return string
	 */
	public function getColor(): string {
		return $this->color;
	}

	/**
	 * @return int
	 */
	public function getMpg(): int {
		return $this->mpg;
	}

	/**
	 * @param int $color
	 */
	public function setColor($color): void {
		$this->color = $color;
	}

	/**
	 * @param int $mpg
	 */
	public function setMpg($mpg): void {
		$this->mpg = $mpg;
	}
}

$jetta = new car("blue",32);

$jettaColor = $jetta->getColor();
$jettaMpg = $jetta->getMpg();

echo ($jettaColor ." " . $jettaMpg);
