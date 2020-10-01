@extends('layouts.base')

@section('content')

    <div id="content-wrapper">
        <div class="container-fluid">
            <div class="video-block section-padding">
                <div class="row">
                    <div class="col-md-12">
                        <div class="main-title">
                            <div class="btn-group float-right right-action">
                                <a href="#" class="right-action-link text-gray" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Sort by <i class="fa fa-caret-down" aria-hidden="true"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top Rated</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp; Viewed</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i> &nbsp; Close</a>
                                </div>
                            </div>
                            <h6>Subscriptions</h6>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="channels-card">
                            <div class="channels-card-image">
                                <a href="#"><img class="img-fluid" src="{{ asset('assets/img/s1.png') }}" alt=""></a>
                                <div class="channels-card-image-btn"><button type="button" class="btn btn-success btn-sm border-none">Subscribe <strong>1.4M</strong></button> <button type="button" class="btn btn-warning btn-sm border-none"><i class="fas fa-times-circle"></i></button></div>
                            </div>
                            <div class="channels-card-body">
                                <div class="channels-title">
                                    <a href="#">Channels Name <span title="" data-placement="top" data-toggle="tooltip" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></span></a>
                                </div>
                                <div class="channels-view">
                                    382,323 subscribers
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="channels-card">
                            <div class="channels-card-image">
                                <a href="#"><img class="img-fluid" src="{{ asset('assets/img/s2.png') }}" alt=""></a>
                                <div class="channels-card-image-btn"><button type="button" class="btn btn-danger btn-sm border-none">Subscribe <strong>1.4M</strong></button> <button type="button" class="btn btn-warning btn-sm border-none"><i class="fas fa-times-circle"></i></button></div>
                            </div>
                            <div class="channels-card-body">
                                <div class="channels-title">
                                    <a href="#">Channels Name</a>
                                </div>
                                <div class="channels-view">
                                    382,323 subscribers
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="channels-card">
                            <div class="channels-card-image">
                                <a href="#"><img class="img-fluid" src="{{ asset('assets/img/s3.png') }}" alt=""></a>
                                <div class="channels-card-image-btn"><button type="button" class="btn btn-secondary btn-sm border-none">Subscribed <strong>1.4M</strong></button> <button type="button" class="btn btn-warning btn-sm border-none"><i class="fas fa-times-circle"></i></button></div>
                            </div>
                            <div class="channels-card-body">
                                <div class="channels-title">
                                    <a href="#">Channels Name <span title="" data-placement="top" data-toggle="tooltip" data-original-title="Verified"><i class="fas fa-check-circle"></i></span></a>
                                </div>
                                <div class="channels-view">
                                    382,323 subscribers
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="channels-card">
                            <div class="channels-card-image">
                                <a href="#"><img class="img-fluid" src="{{ asset('assets/img/s4.png') }}" alt=""></a>
                                <div class="channels-card-image-btn"><button type="button" class="btn btn-danger btn-sm border-none">Subscribe <strong>1.4M</strong></button> <button type="button" class="btn btn-warning btn-sm border-none"><i class="fas fa-times-circle"></i></button></div>
                            </div>
                            <div class="channels-card-body">
                                <div class="channels-title">
                                    <a href="#">Channels Name</a>
                                </div>
                                <div class="channels-view">
                                    382,323 subscribers
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="channels-card">
                            <div class="channels-card-image">
                                <a href="#"><img class="img-fluid" src="{{ asset('assets/img/s6.png') }}" alt=""></a>
                                <div class="channels-card-image-btn"><button type="button" class="btn btn-danger btn-sm border-none">Subscribe <strong>1.4M</strong></button> <button type="button" class="btn btn-warning btn-sm border-none"><i class="fas fa-times-circle"></i></button></div>
                            </div>
                            <div class="channels-card-body">
                                <div class="channels-title">
                                    <a href="#">Channels Name</a>
                                </div>
                                <div class="channels-view">
                                    382,323 subscribers
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="channels-card">
                            <div class="channels-card-image">
                                <a href="#"><img class="img-fluid" src="{{ asset('assets/img/s8.png') }}" alt=""></a>
                                <div class="channels-card-image-btn"><button type="button" class="btn btn-danger btn-sm border-none">Subscribe <strong>1.4M</strong></button> <button type="button" class="btn btn-warning btn-sm border-none"><i class="fas fa-times-circle"></i></button></div>
                            </div>
                            <div class="channels-card-body">
                                <div class="channels-title">
                                    <a href="#">Channels Name</a>
                                </div>
                                <div class="channels-view">
                                    382,323 subscribers
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="channels-card">
                            <div class="channels-card-image">
                                <a href="#"><img class="img-fluid" src="{{ asset('assets/img/s5.png') }}" alt=""></a>
                                <div class="channels-card-image-btn"><button type="button" class="btn btn-danger btn-sm border-none">Subscribe <strong>1.4M</strong></button> <button type="button" class="btn btn-warning btn-sm border-none"><i class="fas fa-times-circle"></i></button></div>
                            </div>
                            <div class="channels-card-body">
                                <div class="channels-title">
                                    <a href="#">Channels Name</a>
                                </div>
                                <div class="channels-view">
                                    382,323 subscribers
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="channels-card">
                            <div class="channels-card-image">
                                <a href="#"><img class="img-fluid" src="{{ asset('assets/img/s6.png') }}" alt=""></a>
                                <div class="channels-card-image-btn"><button type="button" class="btn btn-danger btn-sm border-none">Subscribe <strong>1.4M</strong></button> <button type="button" class="btn btn-warning btn-sm border-none"><i class="fas fa-times-circle"></i></button></div>
                            </div>
                            <div class="channels-card-body">
                                <div class="channels-title">
                                    <a href="#">Channels Name</a>
                                </div>
                                <div class="channels-view">
                                    382,323 subscribers
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="channels-card">
                            <div class="channels-card-image">
                                <a href="#"><img class="img-fluid" src="{{ asset('assets/img/s8.png') }}" alt=""></a>
                                <div class="channels-card-image-btn"><button type="button" class="btn btn-danger btn-sm border-none">Subscribe <strong>1.4M</strong></button> <button type="button" class="btn btn-warning btn-sm border-none"><i class="fas fa-times-circle"></i></button></div>
                            </div>
                            <div class="channels-card-body">
                                <div class="channels-title">
                                    <a href="#">Channels Name</a>
                                </div>
                                <div class="channels-view">
                                    382,323 subscribers
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="channels-card">
                            <div class="channels-card-image">
                                <a href="#"><img class="img-fluid" src="{{ asset('assets/img/s7.png') }}" alt=""></a>
                                <div class="channels-card-image-btn"><button type="button" class="btn btn-secondary btn-sm border-none">Subscribed <strong>1.4M</strong></button> <button type="button" class="btn btn-warning btn-sm border-none"><i class="fas fa-times-circle"></i></button></div>
                            </div>
                            <div class="channels-card-body">
                                <div class="channels-title">
                                    <a href="#">Channels Name <span title="" data-placement="top" data-toggle="tooltip" data-original-title="Verified"><i class="fas fa-check-circle"></i></span></a>
                                </div>
                                <div class="channels-view">
                                    382,323 subscribers
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="channels-card">
                            <div class="channels-card-image">
                                <a href="#"><img class="img-fluid" src="{{ asset('assets/img/s1.png') }}" alt=""></a>
                                <div class="channels-card-image-btn"><button type="button" class="btn btn-danger btn-sm border-none">Subscribe <strong>1.4M</strong></button> <button type="button" class="btn btn-warning btn-sm border-none"><i class="fas fa-times-circle"></i></button></div>
                            </div>
                            <div class="channels-card-body">
                                <div class="channels-title">
                                    <a href="#">Channels Name</a>
                                </div>
                                <div class="channels-view">
                                    382,323 subscribers
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="channels-card">
                            <div class="channels-card-image">
                                <a href="#"><img class="img-fluid" src="{{ asset('assets/img/s2.png') }}" alt=""></a>
                                <div class="channels-card-image-btn"><button type="button" class="btn btn-danger btn-sm border-none">Subscribe <strong>1.4M</strong></button> <button type="button" class="btn btn-warning btn-sm border-none"><i class="fas fa-times-circle"></i></button></div>
                            </div>
                            <div class="channels-card-body">
                                <div class="channels-title">
                                    <a href="#">Channels Name</a>
                                </div>
                                <div class="channels-view">
                                    382,323 subscribers
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center pagination-sm mb-0">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1">Previous</a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- /.container-fluid -->

        @include('layouts.footer')

    </div>
    <!-- /.content-wrapper -->

@endsection