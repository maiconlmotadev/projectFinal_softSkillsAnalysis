<div class="container text-right">
    <a href="{{url('/tests/create')}}" type="button" id="add-btn" class="btn btn-light">Adicionar teste <i
            class="bi bi-plus-circle-fill"></i></a>
</div>
<br>
<?php $contador=0 ?>
<table class="table table-striped text-center">
    <thead>
    <tr>
        <th scope="col">Data do Teste</th>
        <th scope="col">Turma</th>
        <th scope="col">Tipo de Teste</th>
        <th scope="col">Fase de avaliação</th>
        <th scope="col">Editar</th>
    </tr>
    </thead>
    <tbody>
    @foreach($tests as $test)
        <tr>
            <td>{{$test->test_date}}</td>

                @foreach($test-> students as $student)
                    @if($contador == 0)
                    <td>{{$student->group->edition}}</td>
                            <?php $contador++ ?>
                    @endif
                @endforeach
                        <?php $contador=0 ?>

            @foreach($testTypes as $testType)
                @if(($testType->id) == ($test-> test_type_id))
                    <td>{{$testType->description}}</td>
                @endif
            @endforeach
            @foreach($testPhases as $testPhase)
                @if(($testPhase->id) == ($test-> test_phase_id))
                    <td>{{$testPhase->description}}</td>
                @endif
            @endforeach
            <td>
                <div class="d-inline-flex p-1 bd-highlight">

                    <a href="{{url('/tests/'.$test->id.'/edit')}}" type="button" class="btn btn-primary"><i
                            class="bi bi-pencil-square"></i></a>
                </div>
                <div class="d-inline-flex p-1 bd-highlight">
                    <form action="{{url('tests/' . $test->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                    <button type="submit" class="btn btn-outline-dark"><i class="bi bi-trash3-fill"></i></button>
                    </form>
                </div>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

{{$tests -> links()}}
<br>
