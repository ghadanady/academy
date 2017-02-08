<div class="container">
    <div class="row">
        <div class="col-md-7">
            <div class="about-wrap">
                <div class="title">
              {{ $settings->l_block_title }}
                </div>
                <div class="details">
                   {{ $settings->l_block_des}}
                </div>
                <div class="spacer-20"></div>
                <div class="features">
                    <div class="only-feat">
                        <i class="fa fa-users"></i>
                        <h3>{{ $settings->s_block1_title }}</h3>
                        <p>
                           {{ $settings->s_block1_des }}
                        </p>
                    </div>
                    <div class="only-feat">
                        <i class="fa fa-certificate"></i>
                        <h3>{{ $settings->s_block2_title }}</h3>
                        <p>
                           {{ $settings->s_block2_des }}
                        </p>
                    </div>                                            
                    

                </div>
            </div><!--End About-->
        </div>
        <div class="col-md-5">
            <div class="search-wrap">
                <div class="search-title">
                    <i class="fa fa-search"></i>
                    بحث من هنا
                </div>
                <div class="search-content">
                    <form action="{{url('search/')}}" method="POST">
                     {{ csrf_field() }}
                        <div class="form-group">
                            <label>إسم الدورة :</label>
                            <input  name="name" class="form-control" type="text">
                        </div>
                        <div class="form-group">
                            <label>التصنيف :</label>
                            @if(count($categories)>0)
                            <select  name="cat_id" class="form-control">

                             @foreach($categories as $c)
                                <option value="{{$c->id}}">{{$c->name}}</option>
                            @endforeach
                            </select>
                            @endif
                        </div>
                    
                </div>
                <div class="search-footer">
                    <div class="form-group">
                        <button type="submit" class="custom-btn">بحث</button>
                    </div>
                </div>
            </form>
            </div><!--End Search-wrap-->
        </div>
    </div><!--End Row-->
</div><!--End Container-->