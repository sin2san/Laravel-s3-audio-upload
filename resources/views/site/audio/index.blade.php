@extends('site.layouts.default')

@section('htmlheader_title')
    Feed
@endsection

@section('main-content')
    <section class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Feed</h2>
                    <ul>
                        <li><a href="#"><i class="fa fa-home"></i>Home</a></li>
                        <li class="active"><a href="#"><i class="fa fa-rss-square"></i>Feed</a></li>
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
                        <h1><span>Audio</span> Feed</h1>
                        <p>Find the latest audios here</p>
                    </div>
                </div>
            </div>
            @if(count($feeds) > 0)
                <div class="row">
                    @foreach ($feeds as $row)
                        <!-- GETTING ENV VALUES -->
                        @php
                            $s3Client = new \Aws\S3\S3Client([
                                'region' => \Config::get('filesystems.disks.s3.region'),
                                'version' => 'latest',
                                'credentials' => [
                                    'key' => \Config::get('filesystems.disks.s3.key'),
                                    'secret' => \Config::get('filesystems.disks.s3.secret'),
                                ]
                            ]);

                            $cmd = $s3Client->getCommand('GetObject', [
                                'Bucket' => \Config::get('filesystems.disks.s3.bucket'),
                                'Key' => 'audios/' . $row->audio,
                            ]);

                            $requestAudio = $s3Client->createPresignedRequest($cmd, '+60 minutes');
                            $presignedUrlAudio = (string) $requestAudio->getUri();
                        @endphp
                        <div class="col-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-4">
                            <div class="card">
                                <audio id="video{{ $row->id }}" class="js-player" playsinline controls style="--plyr-color-main: #A3CB38;">
                                    <source src="{{ $presignedUrlAudio }}" type="audio/mp3" />
                                    <source src="{{ $presignedUrlAudio }}" type="audio/ogg" />
                                </audio>
                                <div class="card-body">
                                    <div class="title">
                                    <h5 class="mb-2 h5-spacing card-title"><a
                                            href="{{ url('feed/audio/' . \Crypt::encrypt($row->id)) }}">{{ $row->title }}</a>
                                    </h5>
                                    <p>{{ $row->user->name }}</p>
                                    <p class="my-2 text-muted pull-right">{{ $row->created_at->diffForHumans() }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div id="genit-main">
                    <section class="genit-login" data-section="login" style="padding: 5% 0 10% 0;">
                        <div class="genit-narrow-content">
                            <h1 class="text-center" style="font-weight: 900; font-size: 110px; margin-bottom: 0;">201</h1>
                            <div class="text-center">
                                <h3 style="margin-bottom: 15px; font-weight: 100;">Not Content Found</h3>
                                <p>It seems we can’t able to find any contents. <a href="{{ url('/') }}" style="color: #666;">Go back to Homepage</a></p>
                            </div>
                        </div>
                    </section>
                </div>
            @endif
            <div class="row justify-content-center text-center my-5">
                <div class="col-10 col-lg-10 col-md-10 col-sm-10 col-xs-10 mx-auto text-center">
                    {{ $feeds->links() }}
                </div>
            </div>
        </div>
    </section>
@endsection
