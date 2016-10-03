<?php
class CL_ActivityCalculator 
{
        //Property Definition -----------------------------------------------------------------------------------------------------
        private $job_factor;
        private $sport_kcal;
        private $goal_kcal;
        //-------------------------------------------------------------------------------------------------------------------------




        //Setter und Getter--------------------------------------------------------------------------------------------------------
        public function getJob_factor()
        {
		return $this->job_factor;
	}

	public function setJob_factor($job_factor)
        {
		$this->job_factor = $job_factor;
	}

	public function getSport_kcal()
        {
		return $this->sport_kcal;
	}

	public function setSport_kcal($sport_kcal)
        {
		$this->sport_kcal = $sport_kcal;
	}

	public function getGoal_kcal()
        {
		return $this->goal_kcal;
	}

	public function setGoal_kcal($goal_kcal)
        {
		$this->goal_kcal = $goal_kcal;
	}
        //-------------------------------------------------------------------------------------------------------------------------





        // Static Methods and Functions----------------------------------------------------------------------------------------------
        public static function get_job_factor($job_activitylvl)
        {
            switch ($job_activitylvl)
            {
                case "easy":
                    return (1.4);
                case "normal":
                    return (1.6);
                case "heavy":
                    return (1.8);
                case "heavier":
                    return (2);
            }

            return (1);
        }

        public static function get_sport_calories($weight, $min, $days, $sport_activity)
        {
            $sport_factor = 0;
            switch($sport_activity)
            {
                case "soccer":
                    $sport_factor = 0.127;
                    break;
                case "running":
                    $sport_factor = 0.15;
                    break;
                case "biking":
                    $sport_factor = 0.07;
                    break;
                case "swimming":
                    $sport_factor = 0.146;
                    break;
                case "walking":
                    $sport_factor = 0.06;
                    break;
                case "power lifting":
                    $sport_factor = 0.11;
                    break;
            }

            $result = ($sport_factor * $weight * $min * $days) / 7;

            return $result;
        }

        public static function calc_goal_calories($weight_per_week)
        {
            $kcal = ($weight_per_week * 7000) / 7;

            return $kcal;
        }
        //-------------------------------------------------------------------------------------------------------------------------
}
