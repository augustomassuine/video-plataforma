@extends('layouts.base')

@section('content')


    <div id="content-wrapper">
        <div class="container-fluid" style="min-height: 650px">
            <div class="video-block section-padding">
                <div class="row">
                    <div class="col-md-12">
                        <div class="main-title">

                            <div class="btn-group float-right right-action">

                                <a href="/categories/create" class="" style="margin-right: 20px">
                                    Adicionar <i class="fa fa-plus" aria-hidden="true"></i>
                                </a>

                                <a href="#" class="right-action-link text-gray" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Sort by <i class="fa fa-caret-down" aria-hidden="true"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top Rated</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp; Viewed</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i> &nbsp; Close</a>
                                </div>
                            </div>
                            <h6>Categories</h6>

                            @if (session('message'))
                                @include('alerts.sucess-messages')
                            @endif

                        </div>
                    </div>


                    @foreach($categories as $category)
                        <div class="col-xl-3 col-sm-6 mb-3">

                            @if($category->user_id === auth()->id())
                                <a href="categories/{{ $category->id }}/edit " style="position: absolute;right: 30px">
                                    <i class="fa fa-edit" aria-hidden="true"></i>
                                </a>
                            @endif

                            <div class="category-item mt-0 mb-0">
                                <a href="javascript:;">

                                    @if($category->image !== 'assets/img/s2.png')
                                        <img class="img-fluid" alt="" src="{{ asset('storage' . $category->image) }}">
                                    @else
                                        <img class="img-fluid" src="{{ asset('assets/img/s2.png') }}" alt="">
                                    @endif

                                    <h6>{{ $category->name  }}

                                        @if($category->user_id === auth()->id())
                                            <span title="" data-placement="top" data-toggle="tooltip" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></span>
                                        @endif

                                    </h6>
                                    <p>0 views</p>
                                </a>
                            </div>
                        </div>
                    @endforeach



                </div>


                @if(count($categories) >= 10)
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
                @endif
            </div>
        </div>
        <!-- /.container-fluid -->

        @include('layouts.footer')

    </div>
    <!-- /.content-wrapper -->


@endsection