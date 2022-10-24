<form id="event-edit-form" action="{{route('event.update', $event) }}" method="POST">

@csrf
@method('PUT')
<label for="title">Titulo</label>
<input id="title" type="text" name="title" value="{{ $event->title}}">
<label for="descripcion">Descripción</label>
<input id="descripcion" type="text" name="descripcion" value="{{ $event->descripcion}}">
<label for="img">Imagen</label>
<input id="img" type="text" name="img" value="{{ $event->img}}">
<label for="localizacion">Localización</label>
<input id="localizacion" type="text" name="localizacion" value="{{ $event->localizacion}}">

<button type="submit">Update</button>


</form>
