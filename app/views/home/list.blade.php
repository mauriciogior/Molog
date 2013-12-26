@extends('layouts.default')

@section('content')
<header class="list">
	<div class="title">
		Molog
	</div>
	<div class="white left"></div>
	<div class="white right"></div>
</header>
<section>
	<article>
		<ul class="list">
			@foreach($posts as $post)
			<li>
				<div class="profile">
					<img src="{{ $post->user->picture }}"/>
					<div class="info">
						<h1>
							<a href="{{ URL('@'.$post->user->username.'/'.$post->collection->id.'/'.$post->id) }}">
								{{ $post->title }}
							</a>
						</h1>
						<p>
							<a href="{{ URL('@'.$post->user->username) }}">
								{{ "@".$post->user->username }}
							</a>
						</p>
					</div>
				</div>
			</li>
			@endforeach
		</ul>
	</article>
</section>
@stop