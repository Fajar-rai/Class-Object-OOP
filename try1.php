<?php
	class Motor
	{
			Public $merk;
			Public Function Hidupkan()
			{
				return'Hidupkan Motor' .$this->merk;
			}
	}
	$Motor1 = new Motor();
	$Motor1->merk = 'Kawasaki' ;
	echo $Motor1->hidupkan();