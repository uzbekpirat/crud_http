<form action="{{ route('put_s', $post->id) }}" method="POST">
    @csrf
    @method('PUT')
 Title   <input type="text" name="title" value="{{ $post->title }}"><br>
 Description   <input type="text" name="description" value="{{ $post->description }}">
    <button type="submit">Yangilash</button>
</form>