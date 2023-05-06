<br>
<div class="container">
    <form method="POST" action="{{ url('groups') }}">
        @csrf
        <div class="form-group">
            <label for="edition">Nome da turma</label>
            <input
                type="text"
                id="edition"
                name="edition"
                class="form-control"
                placeholder="Ex: WMD0622"
                value="{{old('edition')}}"
                required
            >

        </div>
        <br>
        <div class="form-group">
            <label for="course_id">Escolha o curso:</label>
            <select name="course_id" id="course_id">
                <option value="" disabled selected hidden>Curso</option>
                @foreach($courses as $course)
                    <option value="{{ $course->id}}">{{ $course->name}} </option>
                @endforeach
            </select>
        </div>


        <button type="submit" class="btn btn-primary mb-2">Criar turma</button>
        <a type="button"  href="{{ URL::previous() }}" id="back-btn" class="btn mb-2 ">Cancelar</a>
    </form>
</div>


