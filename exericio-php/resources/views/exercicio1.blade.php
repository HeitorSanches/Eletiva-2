<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1: Soma</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Exercício 1: Soma de Dois Números</h1>
        <p>Crie um formulário que permita ao usuário inserir dois números. O script PHP deve somar esses números e exibir o resultado. </p>

        {{-- O formulário envia os dados para a rota 'exercicio1.handle' usando o método POST --}}
        <form action="{{ route('exercicio1.handle') }}" method="POST">
            @csrf  {{-- Token de segurança obrigatório do Laravel --}}
            <div class="mb-3">
                <label for="num1" class="form-label">Número 1:</label>
                <input type="number" class="form-control" id="num1" name="num1" required>
            </div>
            <div class="mb-3">
                <label for="num2" class="form-label">Número 2:</label>
                <input type="number" class="form-control" id="num2" name="num2" required>
            </div>
            <button type="submit" class="btn btn-primary">Somar</button>
        </form>

        {{-- Esta seção só será exibida se a variável $resultado existir --}}
        @if(isset($resultado))
            <div class="alert alert-success mt-4">
                O resultado da soma é: <strong>{{ $resultado }}</strong>
            </div>
        @endif
    </div>
</body>
</html>