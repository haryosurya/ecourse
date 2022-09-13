 <div id="left-sidebar" class="sidebar">
     <h5 class="brand-name"> {{ (env('APP_NAME')) }}<a href="javascript:void(0)" class="menu_option float-right"><i
                 class="icon-grid font-16" data-toggle="tooltip" data-placement="left"
                 title="Grid & List Toggle"></i></a></h5>
     <ul class="nav nav-tabs">
        @can('access-group','course')
            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#menu-uni">{{ __lang('courses') }}</a></li>
        @endcan
        @can('access-group','student')
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#menu-stud">{{ __lang('students') }}</a></li>
        @endcan
        @can('access-group','classes')
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#menu-admin">{{ __lang('classes') }}</a></li> 
        @endcan

     </ul>
     <div class="tab-content mt-3">
         <div class="tab-pane fade show active" id="menu-uni" role="tabpanel">
             <nav class="sidebar-nav">
                <ul class="metismenu">
                    {{-- COURSE --}}
                    <li class="g_heading"><i class="fas fa-book"></i>  <span> {{ __lang('courses-sessions') }}</span> </li>
                    <li ><a class="nav-link" href="{{ route('admin.student.sessions') }}"><i class="fa fa-book"></i><?= __lang('all-courses-session') ?></a></li>
                    <li><a class="nav-link" href="{{ route('admin.session.groups') }}"><i class="fa fa-graduation-cap"></i><?= __lang('manage-categories') ?></a></li>
                    {{-- @can('access','add_course')
                    <li class="g_heading"><i class="fas fa-plus"></i>  <span>{{ __lang('add-new') }} {{ __lang('courses-sessions') }}</span> </li>
                    <li><a class="nav-link" href="@route('admin.session.addcourse')"><i class="fa fa-list-ul"></i>{{ __lang('online-course') }}</a></li>
                        @can('access','add_session')
                        <li><a class="nav-link" href="{{ route('admin.student.addsession',['type'=>'s']) }}"><i class="fa fa-list-ul"></i>{{ __lang('training-session')  }}</a></li>
                        <li><a class="nav-link" href="{{ route('admin.student.addsession',['type'=>'b']) }}"><i class="fa fa-list-ul"></i>{{ __lang('training-online') }}</a></li>
                        @endcan
                    @endcan  --}}
                    {{-- videos --}}
                    @can('access-group','video') 
                    <li class="g_heading"> <i class="fas fa-video"></i><span>{{ __lang('video-library') }}</span> </li> 
                    @can('access','add_video')<li ><a class="nav-link" href="@route('admin.video.add')">{{ __lang('add-video') }}</a></li>@endcan
                    @can('access','view_videos')<li ><a class="nav-link" href="@route('admin.video.index')">{{ __lang('all-videos') }}</a></li>@endcan
                    @can('access','view_video_space')<li ><a class="nav-link" href="@route('admin.video.disk')">{{ __lang('disk-space-usage') }}</a></li>@endcan 
                    @endcan

                    {{-- REVISIONS --}}
                    @can('access-group','revision_notes')
                    <li class="g_heading">
                         <i class="fas fa-list-alt"></i><span>{{ __lang('revision-notes') }}</span> 
                    </li>
                        @can('access','add_note')<li ><a class="nav-link" href="@route('admin.homework.add')">{{ __lang('add-note') }}</a></li>@endcan
                        @can('access','view_notes')<li ><a class="nav-link" href="@route('admin.homework.index')">{{ __lang('view-archive') }}</a></li>@endcan
                    @endcan
                    {{-- DOWNLOADS --}}
                    @can('access-group','downloads')
                        <li class="g_heading">
                            <i class="fas fa-download"></i><span>{{ __lang('downloads') }}</span> 
                        </li>
                        @can('access','view_downloads')<li ><a class="nav-link" href="@route('admin.download.index')">{{ __lang('all-downloads') }}</a></li>@endcan
                        @can('access','add_download')<li ><a class="nav-link" href="@route('admin.download.add')">{{ __lang('create-download') }}</a></li>@endcan
                    @endcan
                 </ul>
             </nav>
         </div>
         <div class="tab-pane fade" id="menu-admin" role="tabpanel">
             <nav class="sidebar-nav">
                 <ul class="metismenu"> 
                    <li class="g_heading"><i class="fas fa-book"></i>  <span> {{ __lang('courses-sessions') }}</span> </li>
                    @can('access','view_classes')<li ><a class="nav-link" href="@route('admin.lesson.index')">{{ __lang('all-classes') }}</a></li>@endcan
                    @can('access','add_class')<li ><a class="nav-link" href="@route('admin.lesson.add')">{{ __lang('add-class') }}</a></li>@endcan
                    @can('access','view_class_groups')<li ><a class="nav-link" href="@route('admin.lesson.groups')">{{ __lang('manage-class-groups') }}</a></li>@endcan
                   
                    {{-- attendace --}}
                    @can('access-group','attendance')
                    <li class="g_heading"> <i class="fas fa-table"></i><span>{{ __lang('attendance') }}</span> </li>
                        @can('access','set_attendance')<li ><a class="nav-link" href="@route('admin.student.attendance')">{{ __lang('attendance') }}</a></li>@endcan
                        @can('access','set_bulk_attendance')<li ><a class="nav-link" href="@route('admin.student.attendancebulk')">{{ __lang('attendance') }} ({{ __lang('bulk') }})</a></li>@endcan
                        @can('access','set_import_attendance')<li ><a class="nav-link" href="@route('admin.student.attendanceimport')">{{ __lang('attendance') }} ({{ __lang('import') }})</a></li>@endcan
                        @can('access','create_certificate_list')<li ><a class="nav-link" href="@route('admin.student.certificatelist')">{{ __lang('certificate-list') }}</a></li>@endcan
                        @can('access','set_attendance_dates')<li ><a class="nav-link" href="@route('admin.student.attendancedate')">{{ __lang('attendance-dates') }}</a></li>@endcan
                    @endcan

                    {{-- Homework --}}
                    @can('access-group','homework')
                    <li class="g_heading"> <i class="fas fa-edit"></i><span>{{ __lang('homework') }}</span> </li>
                    @can('access','view_homework_list')<li ><a class="nav-link" href="@route('admin.assignment.index')">{{ __lang('view-all') }}</a></li>@endcan
                    @can('access','add_homework')<li ><a class="nav-link" href="@route('admin.assignment.add')">{{ __lang('add-homework') }}</a></li>@endcan
                    @endcan 
                 </ul>
             </nav>
         </div>
         <div class="tab-pane fade" id="menu-stud" role="tabpanel">
             <nav class="sidebar-nav">
                 <ul class="metismenu">
                    <li class="g_heading"><i class="fas fa-users"></i><span><?= __lang('students') ?></li>
                    @can('access','view_students')<li ><a href="@route('admin.student.index')">{{ __lang('all-students') }}</a></li>@endcan
                    @can('access','add_student')<li ><a href="@route('admin.student.add')">{{ __lang('add-student') }}</a></li>@endcan
                    @can('access','view_students')<li ><a href="@route('admin.student.active')">{{ __lang('active-students') }}</a></li>@endcan
                    @can('access','bulk_enroll')<li ><a  href="@route('admin.student.massenroll')">{{ __lang('bulk-enroll') }}</a></li>@endcan
                    @can('access','export_student')<li ><a href="@route('admin.student.import')">{{ __lang('import-export') }}</a></li>@endcan
                    @can('access','message_students')<li ><a href="@route('admin.student.mailsession')">{{ __lang('message-students') }}</a></li>@endcan
                    {{-- @can('access','view_students')<li ><a class="nav-link" href="@route('admin.student.code')">{{ __lang('verify-code') }}</a></li>@endcan  --}}
                    {{-- DISCUSSION --}}
                    @can('access-group','discussions')
                    <li class="g_heading"> <i class="fas fa-comments"></i><span>{{ __lang('discussions') }}</span> </li>
                    @can('access','view_discussions')<li ><a class="nav-link" href="@route('admin.discuss.index')">{{ __lang('instructor-chat') }}</a></li>@endcan
                    @can('access','view_forum_topics')<li ><a class="nav-link" href="@route('admin.forum.index')">{{ __lang('student-forum') }}</a></li>@endcan
                    @endcan
                    {{-- TEST --}}
                    @can('access-group','tests')
                    <li class="g_heading"> <i class="fas fa-check-circle"></i><span>{{ __lang('tests') }}</span> </li>
                    @can('access','view_tests')<li ><a class="nav-link" href="@route('admin.test.add')">{{ __lang('add-test') }}</a></li>@endcan
                    @can('access','add_test')<li ><a class="nav-link" href="@route('admin.test.index')">{{ __lang('all-tests') }}</a></li>@endcan
                    @endcan 
                    {{-- SURVEY --}}
                    @can('access-group','survey')
                    <li class="g_heading"> <i class="fas fa-flag-checkered"></i><span>{{ __lang('surveys') }}</span> </li>
                    @can('access','add_survey')<li ><a class="nav-link" href="@route('admin.survey.add')">{{ __lang('add-survey') }}</a></li>@endcan
                    @can('access','view_surveys')<li ><a class="nav-link" href="@route('admin.survey.index')">{{ __lang('all-surveys') }}</a></li>@endcan 
                    @endcan
                    {{-- CERTIFICATES --}}
                    @can('access-group','certificates')
                    <li class="g_heading"> <i class="fas fa-file-pdf"></i><span>{{ __lang('certificates') }}</span> </li>
                    @can('access','add_certificate')<li ><a class="nav-link" href="@route('admin.certificate.add')">{{ __lang('create-certificate') }}</a></li>@endcan
                    @can('access','view_certificates')<li ><a class="nav-link" href="@route('admin.certificate.index')">{{ __lang('manage-certificates') }}</a></li>@endcan
                    @can('access','view_certificates')<li ><a class="nav-link" href="@route('admin.certificate.track')">{{ __lang('track-certificates') }}</a></li>@endcan
                    @endcan
                    {{-- REPORTS --}}
                    <li class=""></li>
                 </ul>
             </nav>
         </div>
         <div class="tab-pane fade" id="menu-me" role="tabpanel">
             <nav class="sidebar-nav">
                 <ul class="metismenu">
                     <li><a href="payments.html"><i class="fa fa-credit-card"></i><span>Payments</span></a></li> 
                     <li><a href="setting.html"><i class="fa fa-gear"></i><span>Settings</span></a></li>
                 </ul>
             </nav>
         </div>
     </div>
 </div>
