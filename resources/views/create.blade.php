<form action="{{route('store')}}" method="POST">
    @csrf
    <input type="text" name="title" placeholder="title" required><br>
    <input type="text" name="description" placeholder="description" required><br>
    <button type="submit">saqlash</button>
    <a href="{{route('index')}}">orqaga</a>
</form>