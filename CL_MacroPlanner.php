<?php
class CL_MacroPlanner 
{
//Property Definition -----------------------------------------------------------------------------------------------------
        private $kcal;
        private $protein;
        private $fat;
        private $carbohydrates;
        //-------------------------------------------------------------------------------------------------------------------------




        // Constructors------------------------------------------------------------------------------------------------------------
        function __construct($kcal, $protein, $fat, $carbohydrates)
        {
            $this->kcal = $kcal;
            $this->protein = $protein;
            $this->fat = $fat;
            $this->carbohydrates = $carbohydrates;
        }
        //-------------------------------------------------------------------------------------------------------------------------






        //Setter und Getter--------------------------------------------------------------------------------------------------------
        public function getKcal()
        {
		return $this->kcal;
	}

	public function setKcal($kcal)
        {
		$this->kcal = $kcal;
	}

	public function getProtein()
        {
		return $this->protein;
	}

	public function setProtein($protein)
        {
		$this->protein = $protein;
	}

	public function getFat()
        {
		return $this->fat;
	}

	public function setFat($fat)
        {
		$this->fat = $fat;
	}

	public function getCarbohydrates()
        {
		return $this->carbohydrates;
	}

	public function setCarbohydrates($carbohydrates)
        {
		$this->carbohydrates = $carbohydrates;
	}
        //-------------------------------------------------------------------------------------------------------------------------





        // Static Methods and Functions----------------------------------------------------------------------------------------------
        public static function calc_macro($kcal, $athlete)
        {
            $protein = round(($athlete->Weight * 2), 0);

            $fat = round(($athlete->Weight * 0.8),0);

            $carbohydrates = round((($kcal - ($protein * 4) - ($fat * 9)) / 4), 0);

            $macros = new Cl_MacroPlanner($kcal, $protein, $fat, $carbohydrates);

            return $macros;
        }

        public static function calc_kcal($protein, $fat, $carbohydates)
        {
            $result = $protein * 4 + $fat * 9 + $carbohydates * 4;

            return $result;
        }
}
