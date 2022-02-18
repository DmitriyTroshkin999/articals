@extends('layouts.main')

@section('title','Заголовок')

@section('pagecontent')


  	<main>
        <script type="text/javascript" src="/js/incrementView.js"></script>
        <script type="text/javascript" src="/js/incrementLike.js"></script>
		<section class="posts mt-5">
			<div class="container">

				<div class="row justify-content-center">
					<div class="col-8">
						<h1>Тема</h1>
						<div class="icons">
							<i class="fa fa-solid fa-heart fa-lg mr" id="like" style="cursor: pointer"></i>
                            <span id="article-like">{{$article->likes}}</span>
							<i class="fa fa-solid fa-eye fa-lg" aria-hidden="true"></i>
							<span id="article-views">{{$article->views}}</span>
						</div>

						<div class="tags mt-2">
                            @foreach($tags as $tag)
							    <a href="#"><label class="tag badge bg-secondary text-wrap">{{$tag->text}}</label></a>
                            @endforeach
						</div>

						<div class="mt-5">
                            <p>{{$article->artmessage}}</p>
						</div>
                        <input type="hidden" id="article_id" value="{{$article->id}}"/>
						<form method="post" action="/сomment/{{$article->id}}">
                            @csrf


                            <!-- Вывод ошибок валидации формы -->

                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif


						  <div class="mb-3 mt-3">
						    <label for="subject" class="form-label">Тема сообщения:</label>
						    <input type="text" class="form-control @error('title') is-invalid @enderror" id="subject" placeholder="Тема сообщения" name="subject">
						  </div>
						  <div class="mb-3">
						    <label for="body" class="form-label">Текст:</label>
						    <textarea  rows="10" class="form-control @error('title') is-invalid @enderror" id="body" placeholder="Текст сообщения" name="body"></textarea>
						  </div>




						  <button type="submit" class="btn btn-primary">Отправить</button>
						</form>


					</div>
				</div>

            </div>
		</section>



   </main>

@endsection
