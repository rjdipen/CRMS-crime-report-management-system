<div class="sidebar sidebar-main sidebar-fixed">
    <div class="sidebar-content">
        <!-- Main navigation -->
        <div class="sidebar-category sidebar-category-visible">
            <div class="category-content no-padding">
                <ul class="navigation navigation-main navigation-accordion">
                    <li class="{{ (Request::is('missing/person*','missing/person') ? 'active' : '') }}"><a href="#"><i class="icon-people"></i> <span>Missing Person</span></a>
                        <ul>
                            <li class="{{ (Request::is('admin/missing/person') ? 'active' : '') }}"><a href="{{action('Missing\MissingPersonController@index')}}"><i class="icon-diamond3"></i> New</a></li>
                            <li class="{{ (Request::is('admin/missing/person/running') ? 'active' : '') }}"><a href="{{action('Missing\MissingPersonController@running_person')}}"><i class="icon-diamond3"></i> Running</a></li>
                            <li class="{{ (Request::is('admin/missing/person/complete') ? 'active' : '') }}"><a href="{{action('Missing\MissingPersonController@completed_person')}}"><i class="icon-diamond3"></i> Complete</a></li>
                        </ul>
                    </li>

                    <li class="{{ (Request::is('missing/goods*','missing/goods') ? 'active' : '') }}"><a href="#"><i class="icon-basket"></i> <span> Missing Goods</span></a>
                        <ul>
                            <li class="{{ (Request::is('admin/missing/goods') ? 'active' : '') }}"><a href="{{action('Missing\MissingGoodsController@index')}}"><i class="icon-diamond3"></i> New</a></li>
                            <li class="{{ (Request::is('admin/missing/goods/running') ? 'active' : '') }}"><a href="{{action('Missing\MissingGoodsController@running_goods')}}"><i class="icon-diamond3"></i> Running</a></li>
                            <li class="{{ (Request::is('admin/missing/goods/complete') ? 'active' : '') }}"><a href="{{action('Missing\MissingGoodsController@completed_goods')}}"><i class="icon-diamond3"></i> Complete</a></li>
                        </ul>
                    </li>

                    <li class="{{ (Request::is('gd*','gd') ? 'active' : '') }}"><a href="#"><i class="icon-profile"></i> <span> General Dairy</span></a>
                        <ul>
                            <li class="{{ (Request::is('admin/gd') ? 'active' : '') }}"><a href="{{action('Gd\AdminGdController@index')}}"><i class="icon-diamond3"></i> New GD</a></li>
                            <li class="{{ (Request::is('admin/gd/running') ? 'active' : '') }}"><a href="{{action('Gd\AdminGdController@running_gd')}}"><i class="icon-diamond3"></i> Running GD</a></li>
                            <li class="{{ (Request::is('admin/gd/complete') ? 'active' : '') }}"><a href="{{action('Gd\AdminGdController@complete_gd')}}"><i class="icon-diamond3"></i> Complete GD</a></li>
                        </ul>
                    </li>

                    <li class="{{ (Request::is('fir*','fir') ? 'active' : '') }}"><a href="#"><i class="icon-file-text"></i> <span> Fir Registration</span></a>
                        <ul>
                            <li class="{{ (Request::is('admin/fir') ? 'active' : '') }}"><a href="{{action('Fir\AdminFirController@index')}}"><i class="icon-diamond3"></i> New FIR</a></li>
                            <li class="{{ (Request::is('admin/fir/running') ? 'active' : '') }}"><a href="{{action('Fir\AdminFirController@running_fir')}}"><i class="icon-diamond3"></i> Running FIR</a></li>
                            <li class="{{ (Request::is('admin/fir/complete') ? 'active' : '') }}"><a href="{{action('Fir\AdminFirController@complete_fir')}}"><i class="icon-diamond3"></i> Complete FIR</a></li>
                        </ul>
                    </li>

                    <li class="{{ (Request::is('most/wanted*','most/wanted') ? 'active' : '') }}"><a href="#"><i class=" icon-user-tie"></i> <span> Most Wanted</span></a>
                        <ul>
                            <li class="{{ (Request::is('admin/most/wanted/running') ? 'active' : '') }}"><a href="{{action('MostWanted\MostWantedController@index')}}"><i class="icon-diamond3"></i> Running Mostwanted</a></li>
                            <li class="{{ (Request::is('admin/most/wanted/complete') ? 'active' : '') }}"><a href="{{action('MostWanted\MostWantedController@completed_mostwanted')}}"><i class="icon-diamond3"></i> Complete Mostwanted</a></li>
                        </ul>
                    </li>


                    <li class="{{ (Request::is('blog/*','blog') ? 'active' : '') }}"><a href="#"><i class="icon-file-text2"></i> <span>Blog</span></a>
                        <ul>
                            <li class="{{ (Request::is('admin/blog/list') ? 'active' : '') }}"><a href="{{action('Blog\AdminBlogController@index')}}"><i class="icon-diamond3"></i> Create Blog</a></li>
                        </ul>
                    </li>
                    <li><a href="{{action('Contact\ContactController@admin_contact')}}"><i class="icon-notebook"></i> <span>Contact</span></a></li>
                    {{--<li><a href="#"><i class="icon-users"></i> <span>All Users</span></a></li>--}}
                </ul>
            </div>
        </div>
        <!-- /main navigation -->

    </div>
</div>
