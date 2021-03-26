<?php namespace App\Http\Controllers;



class WelcomeController extends BaseController{
/**	
*@return void
*/
    public function_construct()
    {
    	$this->middleware('guest');
    }
    /**	
     *@return void
    */
    public function index()
    {
    	return view('welcome');
    }
}
