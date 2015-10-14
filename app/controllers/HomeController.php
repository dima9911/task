<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function getIndex()
	{
		return View::make('index');
	}

		public function getMenu()
	{
		return View::make('menu');
	}

		public function getPizza()
	{

		return View::make('pizza');
	}

		public function postCheck()
	{


	 	$arr = Input::get("fields");
	 	$arr1 = Input::get("fields1");
	 	$arr2 = Input::get("fields2");
	 	
	 	if (count($arr)!=0)
	 	{
	 	$elem[0]=Pizza::find($arr[0]); //тесто
	 	$elem[1]=Pizza::find($arr[1]); //диаметр

	 	$result[0]=$elem[0]->price*$elem[1]->price;
	 	$result1[0]=$elem[0]->name;
	 	$result1[1]=$elem[1]->name;
	 	$r="<br>";
	 	$result[1]=$result1[0].$r.$result1[1];

	 	return $result;

	    }

	    	if (count($arr1)!=0)
	 	{	$r="<br>";
		$result[0]=0;
		$result[1]="";
		
	 	
	 	for ($i=0; $i<count($arr1); $i++)
	 	{
	 		$elem[$i]=Pizza::find($arr1[$i]);
	 	}

	 

	 	for ($j=0; $j < count($elem) ; $j++) 
	 	{ 
	 		$result[0]+=$elem[$j]->price;
	 		 $result[1]=$result[1].$r.$elem[$j]->name;


	 	}



	 	return $result;

	    }

	    	if (count($arr2)!=0)
	 	{	$r="<br>";
		$result[0]=0;
		$result[1]="";
		
	 	
	 	for ($i=0; $i<count($arr2); $i++)
	 	{
	 		$elem[$i]=Pizza::find($arr2[$i]);
	 	}

	 

	 	for ($j=0; $j < count($elem) ; $j++) 
	 	{ 
	 		$result[0]+=$elem[$j]->price;
	 		 $result[1]=$result[1].$r.$elem[$j]->name;


	 	}



	 	return $result;

	    }


	 	
	}

	public function getN() {

		$arr1=[10,11,12];
		$r="<br>";
		$result[0]=0;
		$result[1]="";
		
	 	
	 	for ($i=0; $i<count($arr1); $i++)
	 	{
	 		$elem[$i]=Pizza::find($arr1[$i]);
	 	}

	 

	 	for ($j=0; $j < count($elem) ; $j++) 
	 	{ 
	 		$result[0]+=$elem[$j]->price;
	 		 $result[1]=$result[1].$r.$elem[$j]->name;


	 	}

	
	}

}
