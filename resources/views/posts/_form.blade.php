<p>
        <label for="">title</label>
        <input type="text" name="title" 
        value="{{ old('title',$post->title ?? null) }}"/>           <!-- coalescing operater(?? null) used for updating -->
    </p>

    <p>
        <label for="">content</label>
        <input type="text" name="content" 
        value="{{ old('content',$post->content ?? null) }}"/>
    </p>
    @if($errors->any())
        <div>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif