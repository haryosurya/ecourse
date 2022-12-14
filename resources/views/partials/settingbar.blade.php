<div id="rightsidebar" class="right_sidebar">
    <a href="javascript:void(0)" class="p-3 settingbar float-right"><i class="fa fa-close"></i></a>
    <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#Settings" aria-expanded="true">Settings</a></li>
        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Themes" aria-expanded="false">Themes</a></li>
    </ul>
    <div class="tab-content">
        <div role="tabpanel" class="tab-pane vivify fadeIn active" id="Settings" aria-expanded="true">
            <div>
                <h6 class="font-14 font-weight-bold  text-muted">General Settings</h6>
                <ul class=" setting-list list-unstyled mt-1 ">
                    @can('access','edit_site_settings')<li ><a class="nav-link" href="@route('admin.setting.index')">{{ __lang('site-settings') }}</a></li>@endcan 
                    @can('access','edit_registration_field')<li ><a class="nav-link" href="@route('admin.setting.fields')">{{ __lang('custom-student-fields') }}</a></li>@endcan

                    {{-- @can('access','edit_site_settings')<li ><a class="nav-link" href="@route('admin.setting.language')">{{ __lang('language') }}</a></li>@endcan --}}
                    {{-- @can('access','view_themes')<li ><a class="nav-link" href="@route('admin.templates')">{{ __lang('site-theme') }}</a></li>@endcan --}}
                    {{-- @can('access','view_payment_methods')<li ><a class="nav-link" href="@route('admin.payment-gateways')">{{ __lang('payment-methods') }}</a></li>@endcan --}}

                    {{-- @can('access','view_coupons')<li ><a class="nav-link" href="@route('admin.payment.coupons')">{{ __lang('coupons') }}</a></li>@endcan --}}
                    {{-- @can('access','manage_currencies')<li ><a class="nav-link" href="@route('admin.setting.currencies')">{{ __lang('currencies') }}</a></li>@endcan --}}
                    {{-- @can('access','configure_sms_gateways')<li ><a class="nav-link" href="@route('admin.smsgateway.index')">{{ __lang('sms-setup') }}</a></li>@endcan --}}

                    @can('access','view_roles')<li ><a class="nav-link" href="@route('admin.roles.index')">{{ __lang('roles') }}</a></li>@endcan
                    @can('access','view_admins')<li ><a class="nav-link" href="@route('admin.admins.index')">{{ __lang('administrators-instructors') }}</a></li>@endcan
                    @can('access','view_test_grades')<li ><a class="nav-link" href="@route('admin.setting.testgrades')">{{ __lang('grades') }}</a></li>@endcan
                    @can('access','view_widgets')<li ><a class="nav-link" href="@route('admin.widget.index')">{{ __lang('homepage-widgets') }}</a></li>@endcan 
                    {{-- <li><a class="nav-link" href="{{ route('admin.menus.header') }}">@lang('default.header-menu')</a></li>  --}}
                    {{-- <li><a class="nav-link" href="{{ route('admin.menus.footer') }}">@lang('default.footer-menu')</a></li> --}}
                    @can('access','view_email_notifications')
                    <li><a class="nav-link" href="@route('admin.messages.emails')">{{ __lang('email-notifications') }}</a></li>
                    @endcan
                    {{-- @can('access','view_sms_notifications')
                        <li><a class="nav-link" href="@route('admin.messages.sms')">{{ __lang('sms-notifications')  }}</a></li>
                    @endcan --}}
                </ul>
            </div>
        </div>  
        <div role="tabpanel" class="tab-pane vivify fadeIn" id="Themes" aria-expanded="false">
            <div class="mb-4">
                <h6 class="font-14 font-weight-bold text-muted">Theme Color</h6>
                <ul class="choose-skin list-unstyled mb-0">
                    <li data-theme="azure"><div class="azure"></div></li>
                    <li data-theme="indigo"><div class="indigo"></div></li>
                    <li data-theme="purple"><div class="purple"></div></li>
                    <li data-theme="orange"><div class="orange"></div></li>
                    <li data-theme="green"><div class="green"></div></li>
                    <li data-theme="cyan" class="active"><div class="cyan"></div></li>
                    <li data-theme="blush"><div class="blush"></div></li>
                    <li data-theme="white"><div class="bg-white"></div></li>
                </ul>
            </div>
            <div class="mb-4">
                <h6 class="font-14 font-weight-bold text-muted">Font Style</h6>
                <div class="custom-controls-stacked font_setting">
                    <label class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" name="font" value="font-muli" checked="">
                        <span class="custom-control-label">Muli Google Font</span>
                    </label>
                    <label class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" name="font" value="font-montserrat">
                        <span class="custom-control-label">Montserrat Google Font</span>
                    </label>
                    <label class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" name="font" value="font-poppins">
                        <span class="custom-control-label">Poppins Google Font</span>
                    </label>
                </div>
            </div>
            <div>
                <h6 class="font-14 font-weight-bold mt-4 text-muted">General Settings</h6>
                <ul class="setting-list list-unstyled mt-1 setting_switch">
                    <li>
                        <label class="custom-switch">
                            <span class="custom-switch-description">Night Mode</span>
                            <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-darkmode">
                            <span class="custom-switch-indicator"></span>
                        </label>
                    </li>
                    <li>
                        <label class="custom-switch">
                            <span class="custom-switch-description">Fix Navbar top</span>
                            <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-fixnavbar">
                            <span class="custom-switch-indicator"></span>
                        </label>
                    </li>
                    <li>
                        <label class="custom-switch">
                            <span class="custom-switch-description">Header Dark</span>
                            <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-pageheader">
                            <span class="custom-switch-indicator"></span>
                        </label>
                    </li>
                    <li>
                        <label class="custom-switch">
                            <span class="custom-switch-description">Min Sidebar Dark</span>
                            <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-min_sidebar">
                            <span class="custom-switch-indicator"></span>
                        </label>
                    </li>
                    <li>
                        <label class="custom-switch">
                            <span class="custom-switch-description">Sidebar Dark</span>
                            <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-sidebar">
                            <span class="custom-switch-indicator"></span>
                        </label>
                    </li>
                    <li>
                        <label class="custom-switch">
                            <span class="custom-switch-description">Icon Color</span>
                            <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-iconcolor">
                            <span class="custom-switch-indicator"></span>
                        </label>
                    </li>
                    <li>
                        <label class="custom-switch">
                            <span class="custom-switch-description">Gradient Color</span>
                            <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-gradient" checked="">
                            <span class="custom-switch-indicator"></span>
                        </label>
                    </li>
                    <li>
                        <label class="custom-switch">
                            <span class="custom-switch-description">Box Shadow</span>
                            <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-boxshadow">
                            <span class="custom-switch-indicator"></span>
                        </label>
                    </li>
                    <li>
                        <label class="custom-switch">
                            <span class="custom-switch-description">RTL Support</span>
                            <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-rtl">
                            <span class="custom-switch-indicator"></span>
                        </label>
                    </li>
                    <li>
                        <label class="custom-switch">
                            <span class="custom-switch-description">Box Layout</span>
                            <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-boxlayout">
                            <span class="custom-switch-indicator"></span>
                        </label>
                    </li>
                </ul>
            </div>
            <hr>
            <div class="form-group">
                <label class="d-block">Storage <span class="float-right">77%</span></label>
                <div class="progress progress-sm">
                    <div class="progress-bar" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 77%;"></div>
                </div>
                <button type="button" class="btn btn-primary btn-block mt-3">Upgrade Storage</button>
            </div>
        </div> 
    </div>
</div>