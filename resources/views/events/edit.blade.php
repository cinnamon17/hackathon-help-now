<form action="{{route('event.update', $event) }}" method="POST">

@csrf
@method('PUT')

<input type="text" name="title" value="{{ $event->title}}">
<input type="text" name="descripcion" value="{{ $event->descripcion}}">

<button type="submit">Update</button>


</form>
