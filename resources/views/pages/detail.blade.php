@extends('layouts.app')
@section('title','DETAIL TRAVEL | KUY-LA')
@push('prepend-style')
<link rel="stylesheet" href="{{ url('frontend/libraries/xzoom/xzoom.css') }}">
@endpush
@section('content')
<main>
    <section class="section-details-header"></section>
        <section class="section-details-content">
            <div class="container">
                <div class="row">
                    <div class="col p-0">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">Paket Travel</li>
                                <li class="breadcrumb-item active">Details</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 pl-lg-0">
                        <div class="card card-details">
                            <h1>{{ $item->title }}</h1>
                            <p>
                                {{ $item->location }}
                            </p>
                            @if ($item->galleries->count())
                                
                            <div class="gallery">
                                <div class="xzoom-container">
                                    <img src="{{ Storage::url($item->galleries->first()->image) }}" alt="" class="xzoom" id="xzoom-default" xoriginal="{{ Storage::url($item->galleries->first()->image) }}">
                                </div>
                                <div class="xzoom-thumbs">
                                    @foreach ($item->galleries as $gallery)
                                    <a href="{{ Storage::url($gallery->image) }}">
                                        <img src="{{ Storage::url($gallery->image) }}" alt="" class="xzoom-gallery" width="120" xpreview="{{ Storage::url($gallery->image) }}">
                                    </a>
                                    @endforeach
                                </div>
                            </div>
                            @endif
                            <h2>Tentang Wisata</h2>
                            <p>{!! $item->about !!}
                            </p>
                            <div class="features row">
                                <div class="col-md-4">
                                    <div class="description">
                                        <img src="{{ url('frontend/images/icon_set/ic_event.png') }}" alt="" class="features-image">
                                    </div>
                                    <div class="description">    
                                        <h3>Featured Event</h3>
                                        <p>{{ $item->featured_event }}</p>
                                    </div>
                                </div>
                                <div class="col-md-4 border-left">
                                    <div class="description">
                                        <img src="{{ url('frontend/images/icon_set/ic_language.png') }}" alt="" class="features-image">
                                    </div>
                                    <div class="description">
                                        <h3>Language</h3>
                                        <p>{{ $item->language }}</p>
                                    </div>
                                </div>
                                <div class="col-md-4 border-left">
                                    <div class="description">
                                        <img src="{{ url('frontend/images/icon_set/ic_food.png') }}" alt="" class="features-image">
                                    </div>
                                    <div class="description">
                                        <h3>Foods</h3>
                                        <p>Local Foods</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card card-details card-right">
                            <h2>Members are going</h2>
                            <div class="member my-2">
                                <img src="{{ url('frontend/images/item_members/member-1.png') }}" alt="" class="member-image" mr-1>
                                
                                <img src="{{ url('frontend/images/item_members/member-2.png') }}" alt="" class="member-image" mr-1>
                                
                                <img src="{{ url('frontend/images/item_members/member-3.png') }}" alt="" class="member-image" mr-1>
                                
                                <img src="{{ url('frontend/images/item_members/member-4.png') }}" alt="" class="member-image" mr-1>
                                
                                <img src="{{ url('frontend/images/item_members/member-5.png') }}" alt="" class="member-image" mr-1>
                            </div>
                            <hr>
                            <h2>Trip Information</h2>
                            <table class="trip-informations">
                                <tr>
                                    <th width="50%">Date Of Departure</th>
                                    <td width="50%" class="text-right">{{ \Carbon\Carbon::create($item->date_of_departure)->format('F n, Y') }}</td>
                                </tr>
                                <tr>
                                    <th width="50%">Duration</th>
                                    <td width="50%" class="text-right">{{ $item->duration }}</td>
                                </tr>
                                <tr>
                                    <th width="50%">Type</th>
                                    <td width="50%" class="text-right">{{ $item->type }}</td>
                                </tr>
                                <tr>
                                    <th width="50%">Price</th>
                                    <td width="50%" class="text-right">Rp. {{ $item->price }} / Person</td>
                                </tr>
                            </table>
                        
                        </div>
                        <div class="join-container">
                            @auth
                                <form action="{{ route('checkout_process', $item->id) }}" method="POST">
                                    @csrf
                                    <button class="btn btn-block btn-join-now mt-3 py-2" type="submit">
                                        Join Now!
                                    </button>
                                </form>
                            @endauth
                            @guest
                                <a href="{{ url('/login') }}" class="btn btn-block btn-join-now mt-3 my-2">Login Or Register To Join!</a>
                            @endguest
                        </div>
                    </div>
                </div>
            </div>
        </section>
    
</main>
@endsection
@push('addon-script')
<script src="{{ url('frontend/libraries/xzoom/xzoom.min.js') }}"></script>
<script>
    $(document).ready(function(){
        $('.xzoom, .xzoom-gallery').xzoom({
            zoomWidth:500,
            title:false,
            tint:'#333',
            Xoffset:15
        });
    });
</script>    
@endpush