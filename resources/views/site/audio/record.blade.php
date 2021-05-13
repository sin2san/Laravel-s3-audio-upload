@extends('site.layouts.default')

@section('htmlheader_title')
    Record Voice Print
@endsection

@section('main-content')
    <section class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Intro</h2>
                    <ul>
                        <li><a href="{{ url('/') }}"><i class="fa fa-home"></i>Home</a></li>
                        <li class="active"><a href="#"><i class="fa fa-rss-square"></i>Record Voice Print</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 mx-auto">
                    <div class="section-title">
                        <h1 class="mb-4" style="text-transform: none;">Open microphone app in your computer and hit record when you're ready then read the text below</h1>
                        {{-- <h1 class="mb-5" style="text-transform: none;">Hit record when you're ready then read the text below</h1> --}}
                        <p  class="text-left">By a show of hands, how many people in the audience here have ever been stressed? Try to remember, what was the situation? Was it a job interview? A deadline? A Speech in front of a crowd? A first date perhaps? How did it feel? Were your legs shaking? Were you sweating? Did you feel like your heart was pounding in your chest? Well, I am not calling you all liars but I can guarantee that in some of you, that was all in your head and in fact your heart rate did not go up at all. It can be easily seen that on the surface most people get quite nervous in stressful situations, but if you peel back the layers and take a look at their biological response, that is, their blood pressure and heart rate in these circumstances, well that tells a different story. For example, if a saber tooth tiger walked into this room right now I am comfortable saying that all of us would be stressed out. However, despite all of us being equally stressed psychologically, biologically some of us would be reacting like this caveman, your blood pressure and heart rate would be through the roof. While others of us would be like this caveman and despite your manic state your heart rate and blood pressure would remain constant.</p>
                        <br />
                        <p class="text-left">What is more interesting though is that the extent or the manner in which your blood pressure and heart rate increase in response to stress can predispose you to a host of diseases. For example it has shown that individuals whose blood pressure and heart rate increase a tremendous amount under stress are more likely to develop cardiovascular disease and hypertension in the future. This type of reaction pattern has even been linked to increased risk of death! Opposite to that, individuals whose cardiovascular systems behave like this caveman have been shown to be characterized by depression, addictive behavior, and obesity. So what we have here is a goldilocks situation. Small reactions are too cold, large reactions are too hot, but medium reactions at this point seem to be just right. </p>
                        <br />
                        <p class="text-left">So, this wide variety of reactions begs the question, why do people react so differently. Well this is what my PhD is looking at. In the lab I re-create stressful situations by making participants give speeches in front of a small crowd or perform mental math under time pressure. While they do this I measure their blood pressure, heart rate, and other makers of cardiovascular function to gain an insight into what causes individuals to react so differently to stressful situations. I've seen it all. I've had participants yelling at me because they are so stressed yet their blood pressure and heart rate remain constant. On the other hand, I've tested participants that seem unphased by stress yet display a huge increase in heart rate and blood pressure. Two counter-intuitive situations, don't you think?</p>
                        <br />
                        <p class="text-left">It is my hope that if the reasons for such radically different cardiovascular stress responses can be figured then these responses may one day be able to be used as a screening tool so that individuals who are predisposed to cardiovascular disease or depression can be identified at a young age so that medical or lifestyle interventions can be put in place to stop or slow disease progression. For example, a child who mounts a tremendous blood pressure and heart rate response to stress can be counseled by a doctor to engage in daily exercise to reduce risk of cardiovascular disease. </p>
                        <br />
                        <p class="text-left">Let's face it. We are all stressed at some point. Given the prevalence and adverse health implications of stress wouldn't you want to be screened to know what diseases you may be predisposed to as a result of the way you react with your daily stress? Thank you.</p>
                        <br />
                        <a class="btn primary text-white pull-right" href="{{ url('audio/add') }}"><i class="fa fa-arrow-right"></i></a>
                        <br />
                        <br />
                        <br />
                        <br />
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
