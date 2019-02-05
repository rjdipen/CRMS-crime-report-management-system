<div class="sidebar sidebar-main sidebar-fixed">
    <div class="sidebar-content">
        <!-- Main navigation -->
        <div class="sidebar-category sidebar-category-visible">
            <div class="category-content no-padding">
                <ul class="navigation navigation-main navigation-accordion">

                    <!-- Main -->
                    <li class="{{ (Request::is('crime/category') ? 'active' : '') }}">
                        <a href="{{action('CrimeType\CrimeTypeController@index')}}">
                            <i class="icon-make-group"></i> <span>Crime</span>
                        </a>
                    </li>

                    <li class="{{ (Request::is('division') ? 'active' : '') }}">
                        <a href="{{action('Division\DivisionController@index')}}"><i class=" icon-location3"></i> <span>Division</span></a>
                    </li>

                    <li class="{{ (Request::is('zila') ? 'active' : '') }}">
                        <a href="{{action('Zila\ZilaController@index')}}"><i class="icon-map5"></i> <span>Zila</span></a>
                    </li>

                    <li class="{{ (Request::is('upazila') ? 'active' : '') }}">
                        <a href="{{action('Upazila\UpazilaController@index')}}"><i class="icon-direction"></i> <span>Upazila</span></a>
                    </li>

                    <li class="{{ (Request::is('gender') ? 'active' : '') }}">
                        <a href="{{action('Gender\GenderController@index')}}"><i class="icon-section"></i> <span>Gender</span></a>
                    </li>

                    <li class="{{ (Request::is('sadmin/blog/category') ? 'active' : '') }}">
                        <a href="{{action('Blog\BlogCategoryController@index')}}"><i class="icon-magazine"></i> <span>Blog Category</span></a>
                    </li>

                    <li class="{{ (Request::is('police/station') ? 'active' : '') }}">
                        <a href="{{action('PoliceStation\PoliceStationController@index')}}"><i class="icon-office"></i> <span>Police Station</span></a>
                    </li>

                    <li class="{{ (Request::is('goods/*','goods') ? 'active' : '') }}"><a href="#"><i class="icon-cart5"></i> <span>Goods</span></a>
                        <ul>
                            <li class="{{ (Request::is('goods/category') ? 'active' : '') }}">
                                <a href="{{action('Goods\GoodsCategoryController@index')}}"><i class="icon-diamond3"></i> Goods Category</a>
                            </li>
                            <li class="{{ (Request::is('goods/subcategory') ? 'active' : '') }}">
                                <a href="{{action('Goods\GoodsSubcategoryController@index')}}"><i class="icon-diamond3"></i> Goods SubCategory</a>
                            </li>

                        </ul>
                    </li>

                    <li class="{{ (Request::is('user/*','user') ? 'active' : '') }}"><a href="#"><i class="icon-users4"></i> <span>User</span></a>
                        <ul>
                            <li class="{{ (Request::is('user/list') ? 'active' : '') }}">
                                <a href="{{action('User\UserlistController@index')}}"><i class="icon-diamond3"></i> All User</a>
                            </li>
                            <li class="{{ (Request::is('admin/list') ? 'active' : '') }}">
                                <a href="{{action('User\UserlistController@adminList')}}"><i class="icon-diamond3"></i> All Admin</a>
                            </li>
                        </ul>
                    </li>

                    <li class="{{ (Request::is('history') ? 'active' : '') }}">
                        <a href="{{action('History\HistoryController@index')}}"><i class="icon-newspaper"></i> <span> History</span></a>
                    </li>

                </ul>
            </div>
        </div>
        <!-- /main navigation -->

    </div>
</div>
