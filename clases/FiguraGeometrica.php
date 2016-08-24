<?php 
	
	class FiguraGeometrica
	{
		protected $color;
		protected $perimetro;
		protected $superficie;

		
		function __construct()
		{			
		}

		function GetColor()
		{
			return $this->color;
		}

		function SetColor($value)
		{
			$this->color =$value;
		}

		private  function CalcularDatos()
		{

		}

		public function Dibujar()
		{

		}

		public function __ToString()
		{
			return $this->color."<br>".$this->perimetro."<br>".$this->superficie."<br>";
		}





	}
 ?>