@extends('layouts.main')

@section('title','Заголовок')

@section('pagecontent')

    <main>
        <section class="main-header">
            <div class="container">
                <div class="col-12 bg-light p-5" style="height: 240px;">
                    <h1>Laravel</h1>
                    <h3>My articles</h3>
                </div>
            </div>
        </section>

        <section class="posts mt-5">
            <div class="container">

                <div class="row">
                    @foreach($articles as $article)
                    <div class="col-md-4 mt-2 col-sm-12">
                        <div class="card h-100">
                            <img src="{{$article->img}}" class="card-img-top" alt="...">
                            <div class="card-body" style="position: relative">
                                <h5 class="card-title">{{$article->theme}}</h5>
                                <p class="card-text">{{$article->artmessage}}</p>

                                <div class="" style="position: absolute; bottom: 0; top:-100px">
                                    <div class="icons mb-4">
                                        <i class="fa fa-solid fa-heart fa-lg mr"></i>
                                        <span id="article-like">{{$article->likes}}</span>
                                        <i class="fa fa-solid fa-eye fa-lg" aria-hidden="true"></i>
                                        <span id="article-views">{{$article->views}}</span>
                                    </div>
                                    <a href="{{route('oneArticle',$article->slug)}}" class="btn btn-primary <!--stretched-link--> mt-0">Подробнее</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>


    </main>
@endsection
