<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar .right-side" style="min-height: 1200px;">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-right image">
                <img src="{{ !empty($user->image) ? asset('storage/uploads/images/avatars/'. $user->image->name) : asset('storage/uploads/images/avatars/default.jpg') }}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-right info">
                <p>{{ $user->name }}</p>
                <a href="{{ url('admin/users/profile') }}"><i class="fa fa-circle text-success"></i> {{ !empty($user->name) ? $user->name : "بدون اسم" }}</a>
            </div>
        </div>

        <ul class="sidebar-menu">
            <li class="treeview">
                <a href="{{url('/admin')}}">
                    <i class="fa fa-dashboard"></i>
                    <span>الرئسيه  </span>
                </a>
            </li>
           <!--  <li class="treeview">
                <a href="{{url('/admin/slider')}}">
                    <i class="fa fa-dashboard"></i>
                    <span>الاسليدر</span>
                </a>
            </li> -->
            @if ($user->isAdmin())
                <li class="treeview">
                    <a href="{{url('admin/settings')}}">
                        <i class="fa fa-pie-chart"></i>
                        <span>الاعدادات </span>
                    </a>
                </li>
                <li class="treeview">
                    <a href="{{url('admin/users')}}">
                        <i class="fa fa-dashboard"></i> <span>المستخدمين </span>
                    </a>
                </li>

                 <li class="treeview">
                    <a href="{{url('admin/slider')}}">
                        <i class="fa fa-dashboard"></i> <span>الاسليدر    </span>
                    </a>
                </li>

                 <li class="treeview">
                    <a href="{{url('admin/page')}}">
                        <i class="fa fa-dashboard"></i> <span>الصفحات الفرعيه     </span>
                    </a>
                </li>
                 <li class="treeview">
                    <a href="{{url('admin/instructor')}}">
                        <i class="fa fa-dashboard"></i> <span>المحاضرين  </span>
                    </a>
                </li>



                 <li class="treeview">
                    <a href="{{url('admin/cources')}}">
                        <i class="fa fa-dashboard"></i> <span>الدورات  </span>
                    </a>


                </li>
                <li class="treeview">
                    <a href="{{url('admin/cources/order')}}">
                        <i class="fa fa-dashboard"></i> <span>طلبات الدورات   </span>
                    </a>


                </li>
                

                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-pie-chart"></i>
                        <span>اقسام الدورات </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{ route('admin.categories.index' , ['type' => 'main']) }}"><i class="fa fa-circle-o"></i> {{ trans('categories.main_page_name') }}</a>
                        </li>
                        <li><a href="{{ route('admin.categories.index' , ['type' => 'sub']) }}"><i class="fa fa-circle-o"></i> {{ trans('categories.sub_page_name') }}</a>
                        </li>
            </li>
        </ul>
    </li>


                 <li class="treeview">
                    <a href="{{url('admin/article')}}">
                        <i class="fa fa-dashboard"></i> <span>المقالات  </span>
                    </a>
                </li>
                 <li class="treeview">
                    <a href="{{ route('admin.categories.index' , ['type' => 'main']) }}">
                        <i class="fa fa-dashboard"></i> <span>اقسام المقالات      </span>
                    </a>
                </li>
                  <li class="treeview">
                    <a href="{{url('admin/new')}}">
                        <i class="fa fa-dashboard"></i> <span>الاخبار  </span>
                    </a>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-pencil-square-o"></i>
                        <span>الرسائل و الاشتركات</span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{ route('admin.contacts.index') }}"><i class="fa fa-circle-o"></i>عرض الرسائل</a>
                        </li>
                        <li><a href="{{ route('admin.subscribtions.index') }}"><i class="fa fa-circle-o"></i>عرض الاشتركات</a>
                        </li>
                    </ul>
                </li>




            @endif
        </li>


</ul>
</section>
<!-- /.sidebar -->
</aside>
