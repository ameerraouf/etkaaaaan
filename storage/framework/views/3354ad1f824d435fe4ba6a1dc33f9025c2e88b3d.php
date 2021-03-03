<ul class="page-sidebar-menu" data-auto-scroll="true" data-slide-speed="200">
    <li class="sidebar-toggler-wrapper add-ccs">
        <a href="<?php echo e(url('/')); ?>" target="_blank">
            <i class="fa fa-home"></i>
            <span class="title">
							واجهة الموقع
						</span>
            <span class="selected">
						</span>
        </a>
        <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
        <div class="sidebar-toggler hidden-phone">
        </div>

        <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
    </li>
    <li class="sidebar-search-wrapper">
        <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
        <form class="sidebar-search" action="extra_search.html" method="POST">
            <div class="form-container">
                <div class="input-box">
                    <a href="javascript:;" class="remove">
                    </a>
                    <input type="text" placeholder="Search..."/>
                    <input type="button" class="submit" value=" "/>
                </div>
            </div>
        </form>
        <!-- END RESPONSIVE QUICK SEARCH FORM -->
    </li>
    <li class="start <?php if(empty(Request::segment(2))): ?> active <?php endif; ?>">
        <a href="<?php echo e(url(app('aurl'))); ?>">
            <i class="fa fa-home"></i>
            <span class="title">
							<?php echo e(trans('admin.home')); ?>

						</span>
            <span class="selected">
						</span>
        </a>
    </li>


    <?php if(auth()->user()->admin()->first()->settings == 1): ?>
        <li class="<?php if(Request::segment(2) == 'settings' || Request::segment(2) ==  'sms'): ?> active open <?php endif; ?>">
            <a href="javascript:;">
                <i class="fa fa-cogs"></i>
                <span class="title">
							<?php echo e(trans('admin.settings')); ?>

						</span>
                <span class="arrow ">
						</span>
            </a>
            <ul class="sub-menu">
                <li>
                    <a href="<?php echo e(url(app('aurl'))); ?>/settings">
                        <?php echo e(trans('admin.settings')); ?>

                    </a>
                </li>

            </ul>
        </li>
    <?php endif; ?>

    <?php if(auth()->user()->admin()->first()->admingroup == 1): ?>
        <li class="<?php if(Request::segment(2) == 'admingroup'): ?> active open <?php endif; ?>">
            <a href="javascript:;">
                <i class="fa fa-group"></i>
                <span class="title">
							<?php echo e(trans('admin.admingroup')); ?>

						</span>
                <span class="arrow ">
						</span>
            </a>
            <ul class="sub-menu">
                <li>
                    <a href="<?php echo e(url(app('aurl'))); ?>/admingroup">
                        <?php echo e(trans('admin.admingroup')); ?>

                    </a>
                </li>
                <li>
                    <a href="<?php echo e(url(app('aurl'))); ?>/admingroup/create">
                        <?php echo e(trans('admin.addadmingroup')); ?>

                    </a>
                </li>
            </ul>
        </li>
    <?php endif; ?>
    <?php if(auth()->user()->admin()->first()->admingroup == 1): ?>
        <li>
            <a href="javascript:;">
                <i class="fa fa-group"></i>
                <span class="title">
							<?php echo e(trans('شركاء العمل')); ?>

						</span>
                <span class="arrow ">
						</span>
            </a>
            <ul class="sub-menu">
                <li>
                    <a href="<?php echo e(url(app('aurl'))); ?>/partner">
                        <?php echo e(trans('الكل')); ?>

                    </a>
                </li>
            </ul>
        </li>
    <?php endif; ?>

    <!--<?php if(auth()->user()->admin()->first()->users == 1): ?>-->
    <!--    <li class="<?php if(Request::segment(2) == 'users'): ?> active open <?php endif; ?>">-->
    <!--        <a href="javascript:;">-->
    <!--            <i class="fa fa-group"></i>-->
    <!--            <span class="title">-->
				<!--			<?php echo e(trans('admin.users')); ?>-->
				<!--		</span>-->
    <!--            <span class="arrow ">-->
				<!--		</span>-->
    <!--        </a>-->
    <!--        <ul class="sub-menu">-->
    <!--            <li>-->
    <!--                <a href="<?php echo e(url(app('aurl'))); ?>/users">-->
    <!--                    <?php echo e(trans('admin.users')); ?>-->
    <!--                </a>-->
    <!--            </li>-->
    <!--            <li>-->
    <!--                <a href="<?php echo e(url(app('aurl'))); ?>/users/create">-->
    <!--                    <?php echo e(trans('admin.adduser')); ?>-->
    <!--                </a>-->
    <!--            </li>-->
    <!--        </ul>-->
    <!--    </li>-->
    <!--<?php endif; ?>-->

    <?php if(auth()->user()->admin()->first()->departments == 1): ?>
        <li class="<?php if(Request::segment(2) == 'departments'): ?> active open <?php endif; ?>">
            <a href="javascript:;">
                <i class="fa fa-list"></i>
                <span class="title">
							<?php echo e(trans('admin.departments')); ?>

						</span>
                <span class="arrow ">
						</span>
            </a>
            <ul class="sub-menu">
                <li>
                    <a href="<?php echo e(url(app('aurl'))); ?>/department">
                        <?php echo e(trans('admin.departments')); ?>

                    </a>
                </li>
                <li>
                    <a href="<?php echo e(url(app('aurl'))); ?>/department/create">
                        <?php echo e(trans('admin.add')); ?>

                    </a>
                </li>
            </ul>
        </li>
    <?php endif; ?>

    <?php if(auth()->user()->admin()->first()->news == 1): ?>
        <li class="<?php if(Request::segment(2) == 'news'): ?> active open <?php endif; ?>">
            <a href="javascript:;">
                <i class="fa fa-file-o"></i>
                <span class="title">
							<?php echo e(trans('admin.news')); ?> 
						<span class="label label-info">
						    <?php echo e(App\News::count()); ?>

						</span>
				</span>
                <span class="arrow ">
						</span>
            </a>
            <ul class="sub-menu">
                <li>
                    <a href="<?php echo e(url(app('aurl'))); ?>/news">
                        <?php echo e(trans('admin.news')); ?>


                        <span class="label label-info"><?php echo e(App\News::count()); ?></span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo e(url(app('aurl'))); ?>/news/create">
                        <?php echo e(trans('admin.add')); ?>

                    </a>
                </li>
            </ul>
        </li>
    <?php endif; ?>

    <!--<li class="<?php if(Request::segment(2) == 'slides'): ?> active open <?php endif; ?>">-->
    <!--    <a href="javascript:;">-->
    <!--        <i class="fa fa-file"></i>-->
    <!--        <span class="title">-->
				<!--			<?php echo e(trans('admin.slideshow')); ?>-->
				<!--		</span>-->
    <!--        <span class="arrow ">-->
				<!--		</span>-->
    <!--    </a>-->
    <!--    <ul class="sub-menu">-->
    <!--        <li>-->
    <!--            <a href="<?php echo e(url(app('aurl'))); ?>/slides">-->
    <!--                <?php echo e(trans('admin.slideshow')); ?>-->
    <!--            </a>-->
    <!--        </li>-->
    <!--        <li>-->
    <!--            <a href="<?php echo e(url(app('aurl'))); ?>/slides/create">-->
    <!--                <?php echo e(trans('admin.add')); ?>-->
    <!--            </a>-->
    <!--        </li>-->
    <!--    </ul>-->
    <!--</li>-->

    <!--<?php if(auth()->user()->admin()->first()->orders == 1 || auth()->user()->admin()->first()->orders2 == 1  || auth()->user()->admin()->first()->orders3 == 1): ?>-->
    <!--    <li class="<?php if(in_array(Request::segment(2),['orders3','orders2','orders'])): ?> active open <?php endif; ?>">-->
    <!--        <a href="javascript:;">-->
    <!--            <i class="fa fa-file"></i>-->
    <!--            <span class="title">-->
				<!--			<?php echo e(trans('admin.orders')); ?>-->
				<!--		</span>-->
    <!--            <span class="arrow ">-->
				<!--		</span>-->
    <!--            <span class="label label-info">-->
				<!--		  <?php echo e(App\Order::where('status','panding')->count() + App\Order2::where('status','panding')->count() + App\Order3::where('status','panding')->count()); ?>-->
				<!--		  </span>-->
    <!--        </a>-->
    <!--        <ul class="sub-menu">-->
    <!--            <?php if(auth()->user()->admin()->first()->orders == 1): ?>-->
    <!--                <li>-->
    <!--                    <a href="<?php echo e(url(app('aurl'))); ?>/orders">-->
    <!--                        <?php echo e(trans('admin.orders_step1')); ?>-->

    <!--                        <span class="label label-info"><?php echo e(App\Order::where('status','panding')->count()); ?></span>-->
    <!--                    </a>-->
    <!--                </li>-->
    <!--            <?php endif; ?>-->
    <!--            <?php if(auth()->user()->admin()->first()->orders2 == 1): ?>-->
    <!--                <li>-->
    <!--                    <a href="<?php echo e(url(app('aurl'))); ?>/orders2">-->
    <!--                        <?php echo e(trans('admin.orders_step2')); ?>-->

    <!--                        <span class="label label-info"><?php echo e(App\Order2::where('status','panding')->count()); ?></span>-->
    <!--                    </a>-->
    <!--                </li>-->
    <!--            <?php endif; ?>-->
    <!--            <?php if(auth()->user()->admin()->first()->orders3 == 1): ?>-->
    <!--                <li>-->
    <!--                    <a href="<?php echo e(url(app('aurl'))); ?>/orders3">-->
    <!--                        <?php echo e(trans('admin.orders_step3')); ?>-->

    <!--                        <span class="label label-info"><?php echo e(App\Order3::where('status','panding')->count()); ?></span>-->
    <!--                    </a>-->
    <!--                </li>-->
    <!--            <?php endif; ?>-->
    <!--        </ul>-->
    <!--    </li>-->
    <!--<?php endif; ?>-->

    <!--<?php if(auth()->user()->admin()->first()->formspdf == 1): ?>-->
    <!--    <li class="<?php if(Request::segment(2) == 'formspdf' || Request::segment(2) == 'formspdf'): ?> active open <?php endif; ?>">-->
    <!--        <a href="javascript:;">-->
    <!--            <i class="fa fa-file"></i>-->
    <!--            <span class="title">-->
				<!--			<?php echo e(trans('admin.formspdf')); ?>-->
				<!--		</span>-->
    <!--            <span class="arrow ">-->
				<!--		</span>-->
    <!--        </a>-->
    <!--        <ul class="sub-menu">-->
    <!--            <li>-->
    <!--                <a href="<?php echo e(url(app('aurl'))); ?>/formspdf">-->
    <!--                    <?php echo e(trans('admin.formspdf')); ?>-->
    <!--                </a>-->
    <!--            </li>-->
    <!--            <li>-->
    <!--                <a href="<?php echo e(url(app('aurl'))); ?>/formspdf/create">-->
    <!--                    <?php echo e(trans('admin.add')); ?>-->
    <!--                </a>-->
    <!--            </li>-->
    <!--        </ul>-->
    <!--    </li>-->
    <!--<?php endif; ?>-->



    <?php if(auth()->user()->admin()->first()->links == 1): ?>
        <li class="<?php if(Request::segment(2) == 'links'): ?> active open <?php endif; ?>">
            <a href="javascript:;">
                <i class="fa fa-link"></i>
                <span class="title">
							<?php echo e(trans('admin.links')); ?>

						</span>
                <span class="arrow ">
						</span>
            </a>
            <ul class="sub-menu">
                <li>
                    <a href="<?php echo e(url(app('aurl'))); ?>/links">
                        <?php echo e(trans('admin.links')); ?>

                    </a>
                </li>
                <li>
                    <a href="<?php echo e(url(app('aurl'))); ?>/links/create">
                        <?php echo e(trans('admin.add')); ?>

                    </a>
                </li>
            </ul>
        </li>
    <?php endif; ?>


    <?php if(auth()->user()->admin()->first()->country == 1): ?>
        <li class="<?php if(
				in_array(Request::segment(2), ['countries','areas','cities','sections'])): ?> active open <?php endif; ?>">
            <a href="javascript:;">
                <i class="fa fa-globe"></i>
                <span class="title">
							<?php echo e(trans('admin.countries_area_city_sec')); ?>

						</span>
                <span class="arrow ">
						</span>
            </a>
            <ul class="sub-menu">
                <li>
                    <a href="<?php echo e(url(app('aurl'))); ?>/countries">
                        <?php echo e(trans('admin.countries')); ?>

                    </a>
                </li>

                <?php 
                    /*
                   <li>
                       <a href="<?php echo e(url(app('aurl'))); ?>/areas">
                            <?php echo e(trans('admin.areas')); ?>

                       </a>
                   </li>

                   <li>
                       <a href="<?php echo e(url(app('aurl'))); ?>/cities">
                            <?php echo e(trans('admin.city')); ?>

                       </a>
                   </li>

                   <li>
                       <a href="<?php echo e(url(app('aurl'))); ?>/sections">
                            <?php echo e(trans('admin.section')); ?>

                       </a>
                   </li>
                    */
                 ?>
            </ul>
        </li>
    <?php endif; ?>

    <?php if(auth()->user()->admin()->first()->pages == 1): ?>
        <li class="<?php if(Request::segment(2) == 'pages'): ?> active open <?php endif; ?>">
            <a href="javascript:;">
                <i class="fa fa-file"></i>
                <span class="title">
							<?php echo e(trans('admin.pages')); ?>

						</span>
                <span class="arrow ">
						</span>
            </a>
            <ul class="sub-menu">
                <li>
                    <a href="<?php echo e(url(app('aurl'))); ?>/pages">
                        <?php echo e(trans('admin.pages')); ?>

                    </a>
                </li>
                <li>
                    <a href="<?php echo e(url(app('aurl'))); ?>/pages/create">
                        <?php echo e(trans('admin.add')); ?>

                    </a>
                </li>
            </ul>
        </li>
    <?php endif; ?>



    <?php if(auth()->user()->admin()->first()->comments == 1 and 44 == 55): ?>
        <li class="<?php if(Request::segment(2) == 'comments'): ?> active open <?php endif; ?>">
            <a href="javascript:;">
                <i class="fa fa-comment"></i>
                <span class="title">
							<?php echo e(trans('admin.comments')); ?>


							<span class="label label-info"><?php echo e(App\Comment::count()); ?></span>
						</span>
                <span class="arrow ">
						</span>
            </a>
            <ul class="sub-menu">
                <li>
                    <a href="<?php echo e(url(app('aurl'))); ?>/comments">
                        <?php echo e(trans('admin.comments')); ?>

                        <span class="label label-info"> <?php echo e(App\Comment::where('active',0)->count()); ?> </span>
                    </a>
                </li>
            </ul>
        </li>
    <?php endif; ?>

    <?php if(auth()->user()->admin()->first()->reports == 1 and 1 == 8): ?>
        <li class="<?php if(Request::segment(2) == 'reports'): ?> active open <?php endif; ?>">
            <a href="javascript:;">
                <i class="fa fa-file"></i>
                <span class="title">
							<?php echo e(trans('admin.reports')); ?>

							 <span class="label label-info"><?php echo e(App\Report::where('done',0)->count()); ?></span>
						</span>
                <span class="arrow ">
						</span>
            </a>
            <ul class="sub-menu">
                <li>
                    <a href="<?php echo e(url(app('aurl'))); ?>/reports">
                        <?php echo e(trans('admin.reports')); ?>

                        <span class="label label-info"><?php echo e(App\Report::where('done',0)->count()); ?></span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo e(url(app('aurl'))); ?>/reports?get=report_comment">
                        <?php echo e(trans('admin.report_comment')); ?>

                        <span class="label label-info"><?php echo e(App\Report::where('done',0)->where('comment_id','>',0)->count()); ?></span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo e(url(app('aurl'))); ?>/reports?get=report_to_news">
                        <?php echo e(trans('admin.report_to_news')); ?>

                        <span class="label label-info"><?php echo e(App\Report::where('done',0)->where('news_id','>',0)->count()); ?></span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo e(url(app('aurl'))); ?>/reports?get=report_to_user">
                        <?php echo e(trans('admin.report_to_user')); ?>

                        <span class="label label-info"><?php echo e(App\Report::where('done',0)->where('to_user_id','>',0)->count()); ?></span>
                    </a>
                </li>

            </ul>
        </li>
    <?php endif; ?>



    <?php if(auth()->user()->admin()->first()->banners == 1): ?>
        <li class="<?php if(Request::segment(2) == 'banners'): ?> active open <?php endif; ?>">
            <a href="javascript:;">
                <i class="fa fa-clock-o"></i>
                <span class="title">
							<?php echo e(trans('admin.banners')); ?>

						</span>
                <span class="arrow ">
						</span>
            </a>
            <ul class="sub-menu">
                <li>
                    <a href="<?php echo e(url(app('aurl'))); ?>/banners">
                        <?php echo e(trans('admin.banners')); ?>

                    </a>
                </li>
                <li>
                    <a href="<?php echo e(url(app('aurl'))); ?>/banners/create">
                        <?php echo e(trans('admin.add')); ?>

                    </a>
                </li>


            </ul>
        </li>
    <?php endif; ?>


    <?php if(auth()->user()->admin()->first()->contact == 1): ?>
        <li class="<?php if(Request::segment(2) == 'contactus'): ?> active open <?php endif; ?>">
            <a href="javascript:;">
                <i class="fa fa-envelope-o"></i>
                <span class="title">
							<?php echo e(trans('admin.contactus')); ?>

						</span>
                <span class="arrow ">
						</span>
            </a>
            <ul class="sub-menu">
                <li>
                    <a href="<?php echo e(url(app('aurl'))); ?>/contactus">
                        <?php echo e(trans('admin.contactus')); ?>

                    </a>
                </li>
                <li>
                    <a href="<?php echo e(url(app('aurl'))); ?>/contactus/cronjob/messages">
                        <?php echo e(trans('admin.cronjob_emails')); ?>

                    </a>
                </li>
            </ul>
        </li>
    <?php endif; ?>
    
    
   
        <li 
        class="<?php if(Request::segment(2) == 'Albume' OR Request::segment(2) == 'AlbumeImage'): ?>  active open <?php endif; ?>">
            <a href="javascript:;">
                <i class="fa fa fa-sitemap"></i>
                <span class="title">
						الالبومات
						</span>
                <span class="arrow ">
						</span>
            </a>
            <ul class="sub-menu">
                <li>
                    <a href="<?php echo e(url(app('aurl'))); ?>/Albume">
                        الالبومات
                    </a>
                </li>
                <li>
                    <a href="<?php echo e(url(app('aurl'))); ?>/AlbumeImage">
                       صور الالبومات
                    </a>
                </li>
            </ul>
        </li>

    

    
    <li class="start " style="border-top:1px solid #5c5c5c ">
        <a href="<?php echo e(url(app('aurl') .'/YearReaports' )); ?>">
            <i class="fa fa-sitemap"></i>
            <span class="title">
						التقارير السنويه
						</span>
            <span>
						</span>
        </a>
    </li>
    
    <li class="start " style="border-top:1px solid #5c5c5c ">
        <a href="<?php echo e(url(app('aurl') .'/Policie' )); ?>">
            <i class="fa fa-sitemap"></i>
            <span class="title">
						السياسات
						</span>
            <span>
						</span>
        </a>
    </li>
    
  

</ul>