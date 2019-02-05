
<div class="row">
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div class="category-content no-padding">

            <ul class="navigation bg-slate-800 navigation-main no-padding pb-5">
                <li class="category-title text-center text-size-large bg-slate-700 text-uppercase"><span>About US</span></li>
                <li>
                    <a class="navbar-brand pt-5 pb-0 pl-20 pr-10" href="{{action('UserController@index')}}"><img src="{{asset('public/assets/images/2.png')}}" alt="" style="height: 32px;"></a>
                    <h5 class="text-bold text-uppercase pt-10">CRMS</h5>
                </li><br>
                <li class="divider"></li>
                <li class="category-title" style="margin-bottom: 8px;"><i class="icon-office"></i><span>Office Head Quater :</span></li>
                <li class=""><a href=""><i class="icon-location4"></i><span>142/a,bananni,policeline,dhaka</span></a></li>
                <li class=""><a  href=""><i class="icon-phone-plus"></i><span>+8801784256152</span></a></li>
                <li class="pb-5"><a  href=""><i class="icon-phone"></i><span>4851247,475826</span></a></li>

            </ul>
        </div>
    </div>

    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div class="category-content no-padding">

            <ul class="navigation navigation-main bg-slate-800 navigation-bordered no-padding">
                <li class="category-title text-center text-size-large bg-slate-700 text-uppercase" style="margin-top: 2px;"><span>menu</span></li>
                <li><a class="active" href="{{action('MostWanted\UserMostWantedController@index')}}"><i class="icon-home3"></i><span>Most Wanted</span></a></li>
                <li><a class="" href="{{action('Fir\FirController@index')}}"><i class="icon-home3"></i><span>FIR Registration</span></a></li>
                <li><a class="" href="{{action('Gd\GdController@index')}}"><i class="icon-home3"></i><span>General Dairy</span></a></li>
                <li><a class="" href="{{action('Blog\UserBlogController@index')}}"><i class="icon-home3"></i><span>Blog</span></a></li>
                <li><a class="" href="{{action('History\HistoryController@userhistory')}}"><i class="icon-home3"></i><span>History</span></a></li>
                <li><a class="" href="{{action('About\AboutUsController@index')}}"><i class="icon-home3"></i><span>About US</span></a></li>
            </ul>
        </div>
    </div>

    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div class="category-content no-padding">

            <ul class="navigation navigation-main bg-slate-800 navigation-bordered no-padding">
                <li class="category-title text-center text-size-large bg-slate-700 text-uppercase"><span>Contact us</span></li>
                <li>
                    <form action="{{action('UserController@save')}}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="panel-body p-10">
                            <div class="form-group mb-15">
                                <div class="input-group">
                                    <span class="input-group-addon bg-slate-700"><i class=" icon-user"></i></span>
                                    <input class="form-control bg-slate" placeholder="Enter your Full Name" type="text" name="name">
                                </div>
                            </div>

                            <div class="form-group mb-15">
                                <div class="input-group">
                                    <span class="input-group-addon bg-slate-700"><i class="icon-paperplane"></i></span>
                                    <input class="form-control bg-slate" placeholder="Enter Your Email" type="email" name="email">
                                </div>
                            </div>

                            <div class="form-group mb-15">
                                <div class="input-group">
                                    <span class="input-group-addon bg-slate-700"><i class="icon-mail5"></i></span>
                                    <textarea name="massage" class="form-control bg-slate" rows="3" cols="" placeholder="Enter your message here"></textarea>
                                </div>
                            </div>
                            <div class="text-right">
                                <button type="submit" class="btn bg-slate-700">Submit form<i class="icon-arrow-right14 position-right"></i></button>
                            </div>
                        </div>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="row text-center bg-slate p-10">
    <span>Copyright © {{date('Y')}} © <a href="#" target="_blank">www.cmrs.com</a>. All rights reserved.</span>
    <span>Help Line: 01784647241</span>
</div>


