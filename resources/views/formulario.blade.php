<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Via CEP</title>
</head>

<body>
    <div class="container">
        <div class="d-flex justify-content-center align-items-center  border p-5" style="flex-direction: column">

            <h1 class="mb-3">Dados retornado do VIA-CEP</h1>


            <form method="get">
                @csrf
                <div class="row">
                    <div class="form-group col">
                        <label for="logradouro">Logradouro</label>
                        <input type="text" class="form-control" id="logradouro" name="logradouro"
                            value="{{ $response['logradouro'] }}" readonly>
                    </div>
                    <div class="form-group col">
                        <label for="bairro">Bairro</label>
                        <input type="bairro" class="form-control" id="bairro" name="bairro"
                            value="{{ $response['bairro'] }}" readonly>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col">
                        <label for="localidade">Localidade</label>
                        <input type="localidade" class="form-control" id="localidade" name="localidade"
                            value="{{ $response['localidade'] }}" readonly>
                    </div>
                    <div class="form-group col">
                        <label for="uf">UF</label>
                        <input type="uf" class="form-control" id="uf" name="uf" value="{{ $response['uf'] }}"
                            readonly>
                    </div>
                    <div class="form-group col">
                        <label for="cep">CEP</label>
                        <input type="text" class="form-control" id="cep" name="cep" value="{{ $response['cep'] }}"
                            readonly>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-1">
                        <label for="ddd">DDD</label>
                        <input type="ddd" class="form-control" id="ddd" name="ddd" value="{{ $response['ddd'] }}"
                            readonly>
                    </div>

                    <div class="form-group col-5">
                        <label for="celular">Celular</label>
                        <input type="celular" class="form-control" id="celular" name="celular" value="" readonly>
                    </div>

                    <div class="form-group col-1">
                        <label for="ddd">DDD</label>
                        <input type="ddd" class="form-control" id="ddd" name="ddd" value="{{ $response['ddd'] }}"
                            readonly>
                    </div>

                    <div class="form-group col-5 ">
                        <label for="telefone">Telefone</label>
                        <input type="telefone" class="form-control" id="telefone" name="telefone" value="" readonly>
                    </div>
                </div>


                <div class="row justify-content-center mt-3 ">
                    <div class="form-group ">
                        <button type="submit" class="btn btn-primary col-3 form-control">Salvar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    {{--  --}}

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
    -->
</body>

</html>
