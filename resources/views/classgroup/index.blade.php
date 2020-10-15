
{{--{{$classes->first()->classgroup->name}}--}}



<ol>
    @foreach($classes as $class)

        <li>{{$class->name}}</li>
    @endforeach


</ol>
