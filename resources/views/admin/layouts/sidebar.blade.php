<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar .right-side">
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
                    <a href="{{url('admin/instructor')}}">
                        <i class="fa fa-dashboard"></i> <span>المحاضرين  </span>
                    </a>
                </li>

                 <li class="treeview">
                    <a href="{{ route('admin.categories.index' , ['type' => 'main']) }}">
                        <i class="fa fa-dashboard"></i> <span>اقسام الدورات     </span>
                    </a>
                </li>

                 <li class="treeview">
                    <a href="{{url('admin/cources')}}">
                        <i class="fa fa-dashboard"></i> <span>الدورات  </span>
                    </a>
                </li>

                 <li class="treeview">
                    <a href="{{url('admin/users')}}">
                        <i class="fa fa-dashboard"></i> <span>المدونه  </span>
                    </a>
                </li>
              
            @endif
        </li>


</ul>
</section>
<!-- /.sidebar -->
</aside>