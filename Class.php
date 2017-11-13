<?php

class Test {

	public $name;
	public $date;
	public $cookie;
	public $language = "LT";
	public $array = [];

	function __construct(string $name){

		$this->name = $name;
		echo "Hello ". $name . "<br>";

	}

	public function dayToday(){

		$date = date('Y-m-d')."<br>";
		echo $date;
		$this->date = $date;

	}

	public function storeToCookie(){

		$cookie_name = "test_today";
		$cookie = setcookie($cookie_name, $this->date, time() + (86400 * 30 * 7), "/");
	}

	public function isEven(int $num){

		if (($num % 2) == 1)
		{ echo "FALSE" . "<br>" ;}
		if (($num % 2) == 0)
		{ echo "TRUE" . "<br>" ;}

	}

	public function setLanguage(string $lang){

		if ($lang == 'Lithuania')
		{ $this->language = 'LT'. "<br>";}
		if ($lang == 'Russia')
		{ $this->language = 'RU'. "<br>";}
		if ($lang == 'Poland')
		{ $this->language = 'PL'. "<br>";}

	}

	public function discount(array $arr) {

		$this->array = [];
		rsort($arr);
		foreach( array_slice( $arr, 0, 3) as $el) {
		$discount = $el * 0.9;
		array_push($this->array, $discount);
		array_shift($arr);
		}
		array_push($this->array, $arr);
		
		return $this->array;
	}

	public function storeRandom(){

		$myfile = fopen("random.txt", "w") or die("Unable to open file!");
		$txt = rand(1990, 2017);
		fwrite($myfile, $txt);
		fclose($myfile);

	}

	public function glueText(string $sen){

		echo "<br>";
		$capitals = ucwords($sen);
		return str_replace(' ', '', $capitals);

	}

	public function  textGen(array $sentences){

		echo "<br>";
		for ($i=0; $i < 100 ; $i++) { 
			$rand_keys = array_rand($sentences, 2);
			echo $sentences[$rand_keys[0]] . "\n";
		}
		

    }



	




}


