@extends('site.layouts.main.master')
@section('title')
    {{ $category->name }}
@endsection
@section('page-header')
    @include('site.layouts.partials.bread-crumb')
@endsection
@section('page-content')
    <div class="col-md-8">
        @if ($urgent_articles->count())
            <div class="tab-slider" class="overflow:hidden;">
                <div class="tab-list">
                    @foreach ($u_articles as $article)
                        @if($loop->index > 4)
                        @break
                        @endif
                        <a href="#content-{{ $loop->index }}-tab" class="{{ $loop->index? '' : 'active'}}">
                            {{ str_limit($article->title,50) }}
                        </a>
                    @endforeach
                </div><!--End tab-list-->
                <div class="tab-content">
                    @foreach ($urgent_articles as $article)
                        @if($loop->index > 6)
                        @break
                        @endif
                        <div id="content-{{ $loop->index }}-tab" class="tab-list-item">
                            <div class="news-item item-tab">
                                <a href="{{ $article->getUrl() }}" class="{{--  $loop->index? '' : 'active'--}}">
                                    {{ str_limit($article->title,75) }}
                                </a>
                                <div class="content">
                                    <div class="heading">
                                        <img src="{{ $article->getImage() }}">
                                        <div class="news-hover">
                                            <a href="{{ $article->getUrl() }}">
                                                <i class="fa fa-file-text-o"></i>
                                            </a>
                                        </div><!--End News-Hover-->
                                    </div><!--End Heading-->
                                    <p>
                                        {{ $article->getDesc() }}
                                        <a href="{{ $article->getUrl() }}">المزيد</a>
                                    </p>
                                </div><!--End Content-->
                            </div><!--End item-tab-->
                        </div><!--End tab-list-item-->
                    @endforeach
                </div><!--End tab-content-->
            </div><!--End tab-slider-->
        @endif
        <div class="widget">
            <div class="widget-title">
                <h3>أخر الأخبار </h3>
            </div><!--End Widget-title-->
            <div class="widget-content">
                @foreach ($l_articles as $article)
                    <div class="news-item list">
                        <div class="heading">
                            <img  src="{{ $article->getImage() }}">
                            <div class="news-hover">
                                <a href="{{ $article->getUrl() }}">
                                    <i class="fa fa-file-text-o"></i>
                                </a>
                            </div><!--End News-Hover-->
                        </div><!--End Heading-->
                        <div class="content">
                            <a href="{{ $article->getUrl() }}">
                                {{ str_limit($article->title,55) }}
                            </a>
                            <ul class="info">
                                <li class="date">
                                    {{ $article->created_at->toDateString() }}
                                </li>
                                <li class="comments-number">
                                    {{ $article->comments->count() }} تعليق
                                </li>
                            </ul><!--End info-->
                            <p>
                                {{ str_limit($article->getDesc(),150) }}
                            </p>
                            <a href="{{ $article->getUrl() }}" class="custom-btn">المزيد</a>
                        </div><!--End Content-->
                    </div><!--End News Item-->
                @endforeach
            </div><!--End widget-content-->
        </div><!--End Widget-->
    </div><!--End col-md-8-->
    @include('site.layouts.partials.left-side-bar')
@endsection
