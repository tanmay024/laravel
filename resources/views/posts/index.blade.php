@section('content')

<ul>

    @foreach($posts as $post)

     <li><a href="{{route('posts.edit', $post->id)}}">{{$post->title}}</a></li>

        @endforeach



</ul>





@section('footer')


@endsection