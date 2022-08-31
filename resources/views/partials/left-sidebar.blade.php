<div class="hleft">
    <a class="header-brand" href="@route('admin.dashboard')"><i class="fa fa-graduation-cap brand-logo"></i></a>
    <div class="dropdown">
        <a href="javascript:void(0)" class="nav-link icon menu_toggle"><i class="fe fe-align-center"></i></a>
        @can('access-group','files')
            <a  onclick="window.open('{{ route('admin.filemanager.home') }}', '{{ __lang('filemanager') }}', 'width=1100, height=530',true);" href="javascript:;" href="#" class="nav-link" data-toggle="tooltip" data-placement="right" title="{{ __lang('filemanager') }}" ><i class="fe fe-folder"></i> </a>
        @endcan
        @can('access-group','reports') 
            <a href="@route('admin.report.index')" class="nav-link icon app_inbox" title="{{ __lang('reports') }} data-toggle="tooltip" data-placement="right" "><i class="fas fa-chart-bar"></i> </a> 
        @endcan
        @can('access-group','articles')
            @can('access','view_articles')
                <a class="nav-link icon app_inbox" href="{{ route('admin.articles.index') }}" title="{{ __lang('view-articles') }}"  data-toggle="tooltip" data-placement="right" >
                <i class="fas fa-pencil-ruler"></i></a>
            @endcan 
        @endcan
        <a href="javascript:void(0)" class="nav-link icon settingbar"><i class="fe fe-settings"></i></a>
{{-- 
        <a href="app-email.html"  class="nav-link icon app_inbox"><i class="fe fe-inbox" data-toggle="tooltip" data-placement="right" title="Inbox"></i></a> 
        <a href="app-social.html"  class="nav-link icon xs-hide"><i class="fe fe-share-2" data-toggle="tooltip" data-placement="right" title="Social Media"></i></a>
        <a href="javascript:void(0)" class="nav-link icon theme_btn"><i class="fe fe-feather"></i></a>
        <a href="javascript:void(0)" class="nav-link icon settingbar"><i class="fe fe-settings"></i></a> --}}
    </div>
</div>