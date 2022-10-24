<div>
<form action="{{route('event.edit', $event)}}" method="POST">

@csrf
@method('GET')

{{ $event->title }}
{{ $event->descripcion }}

<button type="submit">Edit</button>
</form>
<div>


</div>

</div>


