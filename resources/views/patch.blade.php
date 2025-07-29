<form action="{{ route('patch_s', $post->id) }}" method="POST">
    @csrf
    @method('PATCH')
 Title {{ $post->title }}<br>
 Description   <input type="text" name="description" value="{{ $post->description }}">
    <button type="submit">Yangilash</button>
</form>