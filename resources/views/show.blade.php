
@foreach ($posts as $post)
 Title <p>  {{$post->title}}</p> <br>
 Description  <p> {{$post->description}} </p><br>

 <form action="{{ route('destroy', $post->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">O'chirish</button>
</form>
 <a href="{{route('patch',$post->id)}}">yangilash</a>
 
 <a href="{{route('edit', $post->id)}}">taxrirlash</a>
 <br>
@endforeach
<a href="{{route('index')}}" class=back>orqaga</a>
<style>
    .back {
        position: absolute; 
        top: 20px; 
        right: 20px; 
        text-decoration: none; 
         color: blue;
        padding: 10px 15px; 
        border: 2px solid black; 
        border-radius: 5px;
        background-color: white;
    }
</style>