<?php
class CL_StrenghtStats 
{
     //Property Definition -----------------------------------------------------------------------------------------------------
        private $squats;
        private $bench_press;
        private $dead_lift; 
        private $barbell_rowing;
        private $pull_ups;
        private $military_press;
        private $repeats_per_weight;
        private $weight_per_repeats;

        //-------------------------------------------------------------------------------------------------------------------------

        
        // Constructors------------------------------------------------------------------------------------------------------------
        function __construct($squats, $bench_press, $barbell_rowing, $dead_lift, $military_press, $pull_ups)
        {
            $this->squats = $squats;
            $this->bench_press = $bench_press;
            $this->barbell_rowing = $barbell_rowing;
            $this->dead_lift = $dead_lift;
            $this->military_press = $military_press;
            $this->pull_ups = $pull_ups;
        }

        //-------------------------------------------------------------------------------------------------------------------------




        //Setter und Getter--------------------------------------------------------------------------------------------------------
        
        public function getSquats()
        {
		return $this->squats;
	}

	public function setSquats($squats)
        {
		$this->squats = $squats;
	}

	public function getBench_press()
        {
		return $this->bench_press;
	}

	public function setBench_press($bench_press)
        {
		$this->bench_press = $bench_press;
	}

	public function getDead_lift()
        {
		return $this->dead_lift;
	}

	public function setDead_lift($dead_lift)
        {
		$this->dead_lift = $dead_lift;
	}

	public function getBarbell_rowing()
        {
		return $this->barbell_rowing;
	}

	public function setBarbell_rowing($barbell_rowing)
        {
		$this->barbell_rowing = $barbell_rowing;
	}

	public function getPull_ups()
        {
		return $this->pull_ups;
	}

	public function setPull_ups($pull_ups)
        {
		$this->pull_ups = $pull_ups;
	}

	public function getMilitary_press()
        {
		return $this->military_press;
	}

	public function setMilitary_press($military_press)
        {
		$this->military_press = $military_press;
	}

	public function getRepeats_per_weight()
        {
		return $this->repeats_per_weight;
	}

	public function setRepeats_per_weight($repeats_per_weight)
        {
		$this->repeats_per_weight = $repeats_per_weight;
	}

	public function getWeight_per_repeats()
        {
		return $this->weight_per_repeats;
	}

	public function setWeight_per_repeats($weight_per_repeats)
        {
		$this->weight_per_repeats = $weight_per_repeats;
	}

        //-------------------------------------------------------------------------------------------------------------------------




        //Static Methods and Functions---------------------------------------------------------------------------------------------
        public static function calc_one_repeat_max($weight, $repeats)
        {
            $result = $weight / (1.0278 - 0.0278 * $repeats);

            return round($result, 2);
        }

        public static function calc_repeats_per_weight($weight, $one_repeat_max)
        {
            $result = 36.97 - (($weight / $one_repeat_max) / 0.0278);

            return round($result, 0);
        }

        public static function calc_weight_per_repeats($one_repeat_max, $repeats)
        {
            $result = $one_repeat_max * (1.0278 - 0.0278 * $repeats);

            return round($result, 2);
        }
        //-------------------------------------------------------------------------------------------------------------------------
}
