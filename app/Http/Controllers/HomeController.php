<?php namespace App\Http\Controllers;

class HomeController extends Controller
{

    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('hello');
    }

    /**
     * @return string
     */
    public function simpleRoute()
    {
        return 'simple route';
    }

    /**
     * @param $param1
     * @param $param2
     * @return string
     */
    public function complexRoute($param1, $param2)
    {
        return "Complex route with parameters $param1 and $param2";
    }

    /**
     * @return \Illuminate\View\View
     */
    public function secure()
    {
        return 'Secure';
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function redirect()
    {
        return redirect('/');
    }

}
