@extends('layouts.main')

@section('title','Заголовок')

@section('pagecontent')

  	<main>

		<section class="posts mt-5">
			<div class="container">

				<div class="row justify-content-center">
                        @foreach($articles as $article)
						<div class="col-md-4 col-sm-2 mt-2">

                            @foreach($tags[$article->id] as $tag)
                                <a href="#"><label class="tag badge bg-secondary text-wrap">{{$tag->text}}</label></a>
                            @endforeach
			  			</div>

						<div class="col-8 mt-2">
							<div class="card">
							  <img src="{{$article->img}}" class="card-img-top" alt="...">
							  <div class="card-body">
							    <h5 class="card-title">{{$article->theme}}</h5>
							    <p class="card-text">{{$article->artmessage}}</p>
                              <div class="icons">
                                  <i class="fa fa-solid fa-heart fa-lg mr" id="like" style="cursor: pointer"></i>
                                  <span id="article-like">{{$article->likes}}</span>
                                  <i class="fa fa-solid fa-eye fa-lg" aria-hidden="true"></i>
                                  <span id="article-views">{{$article->views}}</span>
                              </div>
                              <div class="mt-5">
							        <a href="{{route('oneArticle',$article->slug)}}" class="btn btn-primary stretched-link">Подробнее</a>
                              </div>
							  </div>
							</div>
						</div>
						<div class="w-100"></div>
                        @endforeach
				</div>

				<div class="row mt-5 justify-content-center">
                      {{$articles->links('pagination::bootstrap-4')}}
				</div>

			</div>
		</section>
   </main>

@endsection
