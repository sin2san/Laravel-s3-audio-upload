<?php namespace App\Http\Controllers\Site;

use Illuminate\Support\Facades\Cache;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->module = "home";
        $this->option = Cache::get('optionCache');
    }

    public function get_index()
    {
        $module = $this->module;
        return view('site.'.$module.'.index', compact('module'));
    }

}
