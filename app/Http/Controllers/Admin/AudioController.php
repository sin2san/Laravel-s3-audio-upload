<?php namespace App\Http\Controllers\Admin;

use App\Audio;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;

class AudioController extends Controller
{
    public function __construct(Audio $audio)
    {
        $this->module = "audio";
        $this->audio = $audio;
        $this->option = Cache::get('optionCache');
        $this->middleware('auth');
    }

    public function index()
    {
        $module = $this->module;
        $audios = $this->audio->paginate(10);

        return view('admin.'. $module .'.index', compact('module', 'audios'));
    }

}
