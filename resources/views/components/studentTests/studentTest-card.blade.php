<div class="container">
    <br>
    <div class="row ">
        @foreach($courses as $course)
            @foreach($groups as $group)
                @if($course->id === $group->course_id)
                    <div class="col-12 col-md-6 col-lg-3 mb-2">
                        <div class="card text-center" id="card-tests" style="...">
                            <div class="card-body">
                                <h5 class="card-title">{{$group->edition}}</h5>
                                <p class="card-text">{{$course->name}}</p>
                                <a href="{{url('/studentTests/'.$group->id.'/option')}}" type="button" id="btn-card-grades" class="btn">Registar notas</a>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        @endforeach
    </div>
</div>
