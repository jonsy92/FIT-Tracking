<?php
require 'CL_ActivityCalculator.php';
class CL_Athlete 
{
        // Property Definition--------------------------------------------------------------------------------------------------------
        private $nickname;
        private $birthday; 
        private $sex;
        private $email;
        private $weight;
        private $height;
        private $ffm;
        private $ffmi;
        private $kfa;
        private $age;
        private $kcal;
        private $stomach;
        private $bizeps_left;
        private $bizeps_right;
        private $chest;
        private $quad_left;
        private $quad_right;
        private $butt;
        private $neck;
        private $shoulders;
        private $lat;
        private $waist;
        private $calf_left;
        private $calf_right;
        
        
        //-------------------------------------------------------------------------------------------------------------------------
        
        
        
        
        // Constructors------------------------------------------------------------------------------------------------------------
        function __construct($nickname, $email, $sex, $weight, $new_height, $birthday)
        {
            $this->nickname = $nickname;
            $this->email = $email;
            $this->sex = $sex;
            $this->weight = $weight;
            $this->height = $new_height;
            $this->birthday = $birthday;
            $this->age = CL_Athlete::calc_age($birthday);
        }

        //-------------------------------------------------------------------------------------------------------------------------



        //Setter and Getter--------------------------------------------------------------------------------------------------------
        
        public function getNickname()
        {
		return $this->nickname;
	}

	public function setNickname($nickname)
        {
		$this->nickname = $nickname;
	}

	public function getBirthday()
        {
		return $this->birthday;
	}

	public function setBirthday($birthday)
        {
		$this->birthday = $birthday;
	}

	public function getSex()
        {
		return $this->sex;
	}

	public function setSex($sex)
        {
		$this->sex = $sex;
	}

	public function getEmail()
        {
		return $this->email;
	}

	public function setEmail($email)
        {
		$this->email = $email;
	}

	public function getWeight()
        {
		return $this->weight;
	}

	public function setWeight($weight)
        {
		$this->weight = $weight;
	}

	public function getHeight()
        {
		return $this->height;
	}

	public function setHeight($height)
        {
		$this->height = $height;
	}

	public function getFfm()
        {
		return $this->ffm;
	}

	public function setFfm($ffm)
        {
		$this->ffm = $ffm;
	}

	public function getFfmi()
        {
		return $this->ffmi;
	}

	public function setFfmi($ffmi)
        {
		$this->ffmi = $ffmi;
	}

	public function getKfa()
        {
		return $this->kfa;
	}

	public function setKfa($kfa)
        {
		$this->kfa = $kfa;
	}

	public function getAge()
        {
		return $this->age;
	}

	public function setAge($age)
        {
		$this->age = $age;
	}

	public function getKcal()
        {
		return $this->kcal;
	}

	public function setKcal($kcal)
        {
		$this->kcal = $kcal;
	}

	public function getStomach()
        {
		return $this->stomach;
	}

	public function setStomach($stomach)
        {
		$this->stomach = $stomach;
	}

	public function getBizeps_left()
        {
		return $this->bizeps_left;
	}

	public function setBizeps_left($bizeps_left)
        {
		$this->bizeps_left = $bizeps_left;
	}

	public function getBizeps_right()
        {
		return $this->bizeps_right;
	}

	public function setBizeps_right($bizeps_right)
        {
		$this->bizeps_right = $bizeps_right;
	}

	public function getChest()
        {
		return $this->chest;
	}

	public function setChest($chest)
        {
		$this->chest = $chest;
	}

	public function getQuad_left()
        {
		return $this->quad_left;
	}

	public function setQuad_left($quad_left)
        {
		$this->quad_left = $quad_left;
	}

	public function getQuad_right()
        {
		return $this->quad_right;
	}

	public function setQuad_right($quad_right)
        {
		$this->quad_right = $quad_right;
	}

	public function getButt()
        {
		return $this->butt;
	}

	public function setButt($butt)
        {
		$this->butt = $butt;
	}

	public function getNeck()
        {
		return $this->neck;
	}

	public function setNeck($neck)
        {
		$this->neck = $neck;
	}

	public function getShoulders()
        {
		return $this->shoulders;
	}

	public function setShoulders($shoulders)
        {
		$this->shoulders = $shoulders;
	}

	public function getLat()
        {
		return $this->lat;
	}

	public function setLat($lat)
        {
		$this->lat = $lat;
	}

	public function getWaist()
        {
		return $this->waist;
	}

	public function setWaist($waist)
        {
		$this->waist = $waist;
	}

	public function getCalf_left()
        {
		return $this->calf_left;
	}

	public function setCalf_left($calf_left)
        {
		$this->calf_left = $calf_left;
	}

	public function getCalf_right()
        {
		return $this->calf_right;
	}

	public function setCalf_right($calf_right)
        {
		$this->calf_right = $calf_right;
	}
        
        //-------------------------------------------------------------------------------------------------------------------------






        //Static Methods and Functions---------------------------------------------------------------------------------------------
        public static function calc_kfa_male($stomach, $neck, $height)
        {
            $result = 495 / 1.0324 - 0.19077 * ($stomach - $neck) + 0.15456 * $height - 450;

            return round($result, 2);
        }

        public static function calc_kfa_female($stomach, $neck, $height, $waist)
        {
            $result = 495 / 1.29579 - 0.35004 * ($stomach + $waist - $neck) + 0.22100 * $height - 450;

            return round($result, 2);
        }

        public static function calc_ffm($weight, $kfa)
        {
            $result = $weight * (100 - $kfa) / 100;

            return round($result, 2);
        }

        public static function calc_ffmi($height, $ffm)
        {
            $result = $ffm / (($height/100) * ($height/100)) + 6.3 * (1.8 - ($height/100));

            return round($result, 2);
        }

        public static function calc_age($date)
        {
            $birthday = new DateTime($date);
            $today = new DateTime(date('Y-m-d'));
            $difference = $birthday->diff($today);
 
            return $difference->format('%y');
        }

        public static function calc_kcal($weight, $height, $age, $sex, $job_factor, $sport_kcal, $goal_kcal)
        {
            if ($sex == "male")
            {
                $result = ((66.47 + (13.7 * $weight + 5 * $height - 6.8 * $age)) * $job_factor) + $sport_kcal + $goal_kcal;           
            }
            else
            {
                $result = ((655.1 + (9.6 * $weight + 1.8 * $height - 4.7 * $age)) * $job_factor) + $sport_kcal + $goal_kcal;
            }

            return $result;
        }
        //-------------------------------------------------------------------------------------------------------------------------
}
