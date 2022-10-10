@extends('layouts.admin')
@section('innerTitle',__lang('dashboard'))
@section('pageTitle',__lang('dashboard'))
@section('breadcrumb')
    @include('admin.partials.crumb',[
    'crumbs'=>[
            route('admin.dashboard')=>__('default.dashboard')
        ]])
@endsection

@section('content')
<div class="section-body mt-4">
    <div class="container-fluid">
        <div class="row clearfix row-deck">
            <div class="col-6 col-md-4 col-xl-2">
                <div class="card">
                    <div class="card-body ribbon">
                        <div class="ribbon-box green" data-toggle="tooltip" title="New Professors">{{$totalStudents}}</div>
                        <a href="{{ route('admin.student.index') }}" class="my_sort_cut text-muted">
                            <i class="fa fa-black-tie"></i>
                            <span>{{__lang('students')}}</span>
                        </a>
                    </div>
                </div>
            </div> 
            <div class="col-6 col-md-4 col-xl-2">
                <div class="card">
                    <div class="card-body ribbon">
                        <div class="ribbon-box green" data-toggle="tooltip" title="New Professors">{{ $totalCourses }}</div>
                        <a href="{{ route('admin.student.sessions') }}?type=c" class="my_sort_cut text-muted">
                            <i class="fa fa-black-tie"></i>
                            <span>{{__lang('online-courses')}}</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-xl-2">
                <div class="card">
                    <div class="card-body ribbon">
                        <div class="ribbon-box green" data-toggle="tooltip" title="New Professors">{{ $totalSessions }}</div>
                        <a href="{{ route('admin.student.sessions') }}" class="my_sort_cut text-muted">
                            <i class="fa fa-black-tie"></i>
                            <span>{{ __lang('active-sessions') }}</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-xl-2">
                <div class="card">
                    <div class="card-body ribbon">
                        <div class="ribbon-box green" data-toggle="tooltip" title="New Professors">{{ $totalClasses }}</div>
                        <a href="{{ route('admin.lesson.index') }}" class="my_sort_cut text-muted">
                            <i class="fa fa-black-tie"></i>
                            <span>{{ __lang('classes') }}</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
 
     
    <div class="row"> 
        <div class="col-md-12 ">
            <div class="card">
                <div class="card-header">
                    <h4>{{ __lang('latest-users') }}</h4>
                </div>
                <div class="card-body">
                    <div class="row pb-2">
                        @foreach($latestUsers as $user)
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="card"> 
                                <div class="card-body text-center  viewbutton @if($user->student) int_curpoin @endif"  @if($user->student)   data-id="{{ $user->student->id }}" data-toggle="modal" data-target="#simpleModal" title="@lang('default.view')"   @endif >
                                    <img class="card-profile-img" src="{{ profilePictureUrl($user->picture) }}" alt="">
                                    <h5 class="mb-0">{{ __lang($user->role->name) }}</h5>
                                    <span>{{ ($user->name) }}</span>
                                    <div class="text-muted">{{ ($user->email) }}</div>
                                    <p class="mb-4 mt-3">5290 NE 50th Rd, Osceola, MO, 64776</p>
                                    <button class="btn btn-primary btn-sm">Read More</button>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="col-4 col-sm-3 col-lg-2 mb-4 mb-md-0">
                            <div class="avatar-item mb-0  viewbutton @if($user->student) int_curpoin @endif"  @if($user->student)   data-id="{{ $user->student->id }}" data-toggle="modal" data-target="#simpleModal" title="@lang('default.view')"   @endif >
                                <img  alt="image" src="{{ profilePictureUrl($user->picture) }}" class="img-fluid" data-toggle="tooltip" title="{{  $user->name }} {{ $user->last_name }}">
                                <div class="avatar-badge" title="{{ __lang($user->role->name) }}" data-toggle="tooltip">
                                    @if($user->role_id==1)
                                    <i class="fas fa-wrench"></i>
                                    @else
                                        <i class="fas fa-graduation-cap"></i>
                                    @endif
                                </div>
                            </div>
                        </div> --}}
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        
        <div class="col-lg-12 col-md-12 col-12">
            <div class="card">
                <div class="card-header">
                    <h4>{{ __lang('recent-courses') }}</h4>
                    <div class="card-header-action">
                        <a href="{{ route('admin.student.sessions') }}" class="btn btn-primary">{{ __lang('View All') }}</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="summary">
                        <div class="summary-item">
                            <ul class="list-unstyled list-unstyled-border">

                                @foreach($session['paginator'] as $row)
                                    @php
                                        $course = \App\Models\Course::find($row->id);
                                    @endphp
                                <li class="media">
                                    <a @if($course->type != 'c')  href="{{ route('admin.student.editsession',['id'=>$row->id]) }}"  @else  href="{{ route('admin.session.editcourse',['id'=>$row->id]) }}"  @endif >
                                        <img class="mr-3 rounded" width="50" @if(!empty($course->picture) && file_exists($course->picture)) src="{{ asset($course->picture) }}"  @else src="{{ asset('client/themes/admin/assets/img/products/product-2-50.png') }}" @endif alt="product">
                                    </a>
                                    <div class="media-body">
                                        <div class="media-right">{{ price($course->fee) }}</div>
                                        <div class="media-title"><a  @if($course->type != 'c')  href="{{ route('admin.student.editsession',['id'=>$row->id]) }}"  @else  href="{{ route('admin.session.editcourse',['id'=>$row->id]) }}"  @endif >{{ $course->name }}</a></div>
                                        <div class="text-muted text-small">@if($course->admin)<span class="text-primary">{{ $course->admin->user->name }} {{ $course->admin->user->last_name }}</span> <div class="bullet"></div> @endif  {{ \Illuminate\Support\Carbon::parse($course->created_at)->diffForHumans() }}</div>
                                    </div>
                                </li>
                                @endforeach


                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
@section('footer')
    <!-- Page Specific JS File -->
    <script src="{{ asset('client/themes/admin/assets/js/page/index-0.js_') }}"></script>

    <script type="text/javascript">
        "use strict";

        var statistics_chart = document.getElementById("myChart").getContext('2d');

        var myChart = new Chart(statistics_chart, {
            type: 'line',
            data: {
                labels: {!! clean($monthList) !!},
                datasets: [{
                    label: '{{ __lang('sales') }}',
                    data: {!! clean($monthSaleData) !!},
                    borderWidth: 5,
                    borderColor: '#6777ef',
                    backgroundColor: 'transparent',
                    pointBackgroundColor: '#fff',
                    pointBorderColor: '#6777ef',
                    pointRadius: 4
                }]
            },
            options: {
                legend: {
                    display: false
                },
                scales: {
                    yAxes: [{
                        gridLines: {
                            display: false,
                            drawBorder: false,
                        },
                        ticks: {
                            stepSize: 1000
                        }
                    }],
                    xAxes: [{
                        gridLines: {
                            color: '#fbfbfb',
                            lineWidth: 2
                        }
                    }]
                },
            }
        });

        $('#visitorMap').vectorMap(
            {
                map: 'world_en',
                backgroundColor: '#ffffff',
                borderColor: '#f2f2f2',
                borderOpacity: .8,
                borderWidth: 1,
                hoverColor: '#000',
                hoverOpacity: .8,
                color: '#ddd',
                normalizeFunction: 'linear',
                selectedRegions: false,
                showTooltip: true,
                pins: {
                    id: '<div class="jqvmap-circle"></div>',
                    my: '<div class="jqvmap-circle"></div>',
                    th: '<div class="jqvmap-circle"></div>',
                    sy: '<div class="jqvmap-circle"></div>',
                    eg: '<div class="jqvmap-circle"></div>',
                    ae: '<div class="jqvmap-circle"></div>',
                    nz: '<div class="jqvmap-circle"></div>',
                    tl: '<div class="jqvmap-circle"></div>',
                    ng: '<div class="jqvmap-circle"></div>',
                    si: '<div class="jqvmap-circle"></div>',
                    pa: '<div class="jqvmap-circle"></div>',
                    au: '<div class="jqvmap-circle"></div>',
                    ca: '<div class="jqvmap-circle"></div>',
                    tr: '<div class="jqvmap-circle"></div>',
                },
            });
    </script>
    <div class="modal fade" id="simpleModal"  tabindex="-1" role="dialog" id="exampleModal">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">{{ __lang('student-details') }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="info">
                </div>
                <div class="modal-footer bg-whitesmoke br">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">{{ __lang('close') }}</button>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(function(){
            $('.viewbutton').click(function(){
                $('#info').text('Loading...');
                var id = $(this).attr('data-id');
                $('#info').load('{{ adminUrl(array('controller'=>'student','action'=>'view'))}}'+'/'+id);
            });
        });
    </script>
@endsection
