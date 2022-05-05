<?php

class Animal
{
	public	$food = '';
	public	$location = '';
	
	
	public function makeNoise()
	{
		echo get_class($this) . ' тварина спить';
	}
	
	protected function eat()
	{
		
	}
	
	protected function sleep()
	{
		
	}
}


class Dog extends Animal
{
	public $food = 'Косточка';
	public $location = 'Будка';
	
	public function makeNoise()
	{
		echo get_class($this) . ' постійно виляє хвостом';
	}
	
	public function eat()
	{
		echo 'Ласує ' . $this->food;
	}
}

class Cat extends Animal
{
	public $food = 'Риба';
	public $location = 'Диван';
	
	public function makeNoise()
	{
		echo get_class($this) . ' ігнорить';
	}
	
	public function eat()
	{
		echo 'Ласує ' . $this->food;
	}
}

class Horse extends Animal
{
	public $food = 'Яблуко';
	public $location = 'Стайня';
	
	public function makeNoise()
	{
		echo get_class($this) . ' гарцює';
	}
	
	public function eat()
	{
		echo 'Ласує ' . $this->food;
	}
}

class Veterinarian
{

	
	public function treatAnimal(Animal $animal)
	{
		return 'їсть '. $animal->food . ' та живе в '  . $animal->location;
	}
	
	
}
