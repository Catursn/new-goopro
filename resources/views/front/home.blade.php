@extends('front.includes.master')
@section('main-content')
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="images/banner1.jpg" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <div class="container">
                        <div >
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <form action="#">
                                        <select name="coba" id="coba">
                                            <option value="#">satu</option>
                                            <option value="#">dua</option>
                                        </select>
                                        <input type="text" placeholder="cobaa">
                                        <button type="submit" class="subb">Search</button>
                                    </form>
                                </div>
                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <form action="#">
                                        <select name="coba" id="coba">
                                            <option value="#">satu</option>
                                            <option value="#">dua</option>
                                        </select>
                                        <input type="text" placeholder="cobaa">
                                        <button type="submit" class="subb">Search</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="images/banner2.jpg" alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                    <div class="container">
                        <div >
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <form action="#">
                                        <select name="coba" id="coba">
                                            <option value="#">satu</option>
                                            <option value="#">dua</option>
                                        </select>
                                        <input type="text" placeholder="cobaa">
                                        <button type="submit" class="subb">Search</button>
                                    </form>
                                </div>
                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <form action="#">
                                        <select name="coba" id="coba">
                                            <option value="#">satu</option>
                                            <option value="#">dua</option>
                                        </select>
                                        <input type="text" placeholder="cobaa">
                                        <button type="submit" class="subb">Search</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="images/banner3.jpg" alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                    <div class="container">
                        <div >
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <form action="#">
                                        <select name="coba" id="coba">
                                            <option value="#">satu</option>
                                            <option value="#">dua</option>
                                        </select>
                                        <input type="text" placeholder="cobaa">
                                        <button type="submit" class="subb">Search</button>
                                    </form>
                                </div>
                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <form action="#">
                                        <select name="coba" id="coba">
                                            <option value="#">satu</option>
                                            <option value="#">dua</option>
                                        </select>
                                        <input type="text" placeholder="cobaa">
                                        <button type="submit" class="subb">Search</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="container">
        <div class="place">
            <div class="title">
                <h3>Properti Perwilayah</h3>
            </div>
            <div class="row">
                <div class="col-25">
                    <img src="images/bandung.png" alt="">
                </div>
                <div class="col-25">
                    <img src="images/bandung.png" alt="">
                </div>
                <div class="col-25">
                    <img src="images/bandung.png" alt="">
                </div>
                <div class="col-25">
                    <img src="images/bandung.png" alt="">
                </div>
            </div>
        </div>
    </div>
@endsection
@push('styles')
@endpush
@push('scripts')
@endpush