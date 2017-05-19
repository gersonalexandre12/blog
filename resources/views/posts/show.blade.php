@extends('default_template.default')
@section('title-page')
  Show Post
@endsection
@section('title-model')
  Post
@endsection
@section('subtitle-model')
  Show
@endsection
@section('content-model')
  <h1>{{ $post->title }}</h1>
  <p>{{ $post->content }}</p>
  <hr>
  <a href="{{action('PostsController@index')}}" class="btn btn-default btn-lg">
    Back
  </a>
  <hr>
  <h2>Comments ({{$post->comments->count()}})</h2>

  <form action="{{action('CommnetsController@store')}}" method="Post">
  
  	<label for ="comment"></label>
  	<textarea
  	name="comment"
  	id="comment"
  	class="form-control"
  	rows="10"
  	placeholder="Digite aqui seu comentário"></textarea>
  	<br>
  </form>
  <ul>
  	<li>
  		<p style="background-color: #eee"></p>
  	
  		-
  		<small>01:20:20</small>
  	</li>
  </ul>
@endsection

