@foreach($menus as $menu)
    @include('admin.partials.footer_menu',['menu'=>$menu])

    <div class="int_ml50  ml-5">
        @foreach(\App\Models\FooterMenu::where('parent_id',$menu->id)->orderBy('sort_order')->get() as $subMenu)
            @include('admin.partials.footer_menu',['menu'=>$subMenu])

        @endforeach
    </div>
@endforeach
