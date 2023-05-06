<div class="container pt-3">
    <div class="container">
        <p>Observação 01 - Não coloque cabeçalhos no excel. Certifique-se que o excel está convertido para CSV, e tem os dados na seguinte ordem:</p>
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Localidade</th>
                <th scope="col">Data de Nascimento</th>
                <th scope="col">Email</th>
                <th scope="col">Telefone</th>
                <th scope="col">ID da Turma</th>
            </tr>
            </thead>
        </table>
        <br>

        <p >Obervação 02 - Exemplo de um arquivo excel:</p>
        <img class="img-exemplo-csv"  src="../../../images/excel-example.png" alt="">

        <br>
        <br>
        <form method="POST" action="{{ url('import') }}" enctype="multipart/form-data">
            @csrf   <!--Metodo de segurança para envio de forms-->
            <div class="form-group">
                <label for="import-form">File</label>
                <input
                    type="file"
                    id="import-form"
                    name="import-form"
                    autocomplete="import-form"
                    class="form-control  pt-1
            @error('import-form') is-invalid @enderror"
                    value= "{{old('import-form')}}"
                    required>
                @error('import-form')
                <span class="invalid-feedback" role="alert">
            <strong>{{$message}} </strong>
        </span>
                @enderror
            </div>
            <br>
            <button type="submit" class="btn btn-primary mb-2">Importar</button>
            <a type="button"  href="{{ URL::previous() }}" id="back-btn" class="btn mb-2 ">Cancelar</a>
        </form>

    </div>

</div>

