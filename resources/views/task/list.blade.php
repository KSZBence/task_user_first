@foreach ($tasks as $task)
    <form action="/api/tasks/{{$task->id}}" method="post">
        //api tipusa
        {{method_field('GET')}}
<div class="form-group">
    <input type="submit" value="{{$task->title}}">
</div>
</form>
@endforeach
