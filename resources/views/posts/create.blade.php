
@section('content')


    <h1>Create Post</h1>

    {{--<form method="post" action="/posts" >--}}
    {!! Form::open() !!}

        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <input type="text" name="title" placeholder="Enter Title">


        <input type="submit" name="submit">


    </form>




@section('footer')