@extends('site.layouts.default')

@section('htmlheader_title')
    Intro
@endsection

@section('main-content')
    <section class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Intro</h2>
                    <ul>
                        <li><a href="{{ url('/') }}"><i class="fa fa-home"></i>Home</a></li>
                        <li class="active"><a href="#"><i class="fa fa-rss-square"></i>Intro</a></li>
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
                        <h1 class="mb-4" style="text-transform: none;">Help us get to know your voice</h1>
                        <p class="text-left">We need to hear a short snippet of your voice so we'll be able to recognize you when you upload a recording. Don't worry, you won't have to come up with something to talk about on the spot!</p>
                        <br />
                        <p  class="text-left">On the next page, you'll see a short bit of text. Just record yourself reading that paragraph at your normkal pace and speaking style. you'll be able to re-record as many times as you need to.</p>
                        <br />
                        <br />
                        <a class="btn primary text-white" href="{{ url('record') }}">Let's Get Started!</a>
                        <br />
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
