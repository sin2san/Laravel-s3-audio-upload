<?php namespace App\Http\Controllers\Admin;

use App\User;
use App\Option;
use App\Audio;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->option = Cache::get('optionCache');
        $this->middleware('auth');
    }

    public function index()
    {
        $admins = User::role('admin')->count();
        $users = User::role('user')->count();
        $audios = Audio::count();

        return view('admin.home.dashboard', compact('admins', 'users', 'audios'));
    }

    public function cache_flush()
    {
        Cache::flush();
        $option = Option::first();
        Cache::forever('optionCache', $option);

        return redirect()->back()->with('success', 'All cache data removed');
    }

}
