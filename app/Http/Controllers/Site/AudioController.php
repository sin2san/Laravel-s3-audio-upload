<?php namespace App\Http\Controllers\Site;

use App\Audio;
use App\AudioHasRating;
use App\Http\Requests\Site\FeedRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AudioController extends Controller
{
    public function __construct(Audio $audio, AudioHasRating $rating)
    {
        $this->module = "audio";
        $this->data = $audio;
        $this->rating = $rating;
        $this->middleware('auth');
        $this->option = Cache::get('optionCache');
    }

    public function get_intro(){
        $module = $this->module;
        return view('site.'.$module.'.intro');
    }

    public function get_record(){
        $module = $this->module;
        return view('site.'.$module.'.record');
    }

    public function get_feeds()
    {
        $module = $this->module;

        $feeds = $this->data->orderBy('id', 'DESC')->paginate(12);
        return view('site.'.$module.'.index', compact('module', 'feeds'));
    }

    public function get_add_audio(){
        $module = $this->module;
        return view('site.'.$module.'.add', compact('module'));
    }

    public function post_audio(FeedRequest $request)
    {
        $this->data->fill($request->all());

        //CREATING NAME FOR FILES
        $currentDate = date('Ymd');
        $currentTime = time();

        //AUDIO UPLOAD FUNCTION
        if($request->audio) {
            $audioExtension = $request->audio->getClientOriginalExtension();
            $file_audio = $request->audio;
            $audio_name = $currentDate.$currentTime.'.'.$audioExtension;

            $path = $file_audio->storeAs('audios', $audio_name, 's3');
        }

        $this->data->audio = $audio_name;
        $this->data->user_id = Auth::id();
        $this->data->save();
        $feedId = $this->data->id;
        $eId = Crypt::encrypt($feedId);

        return redirect('feed/audio/'.$eId)->With('success', 'Your audio upload is successful');
    }

    public function get_single_feed($id)
    {
        $module = $this->module;
        $eId = Crypt::decrypt($id);
        $singleData = $this->data->find($eId);
        $checkRating = $this->rating->where('user_id', Auth::id())->Where('audio_id', $eId)->first();

        $ratings = $this->rating->Where('audio_id', $eId)->paginate(40);

        return view('site.'.$module.'.single', compact('module', 'singleData', 'checkRating', 'ratings'));
    }

    public function post_rating($id, Request $request)
    {
        $eId = Crypt::decrypt($id);

        $this->rating->user_id = Auth::id();
        $this->rating->audio_id = $eId;
        $this->rating->rating = $request->star;
        $this->rating->Save();

        return redirect()->back()->with('success', 'Your rating is successfully submitted');
    }

}
