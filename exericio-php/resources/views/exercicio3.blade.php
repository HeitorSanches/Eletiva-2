<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3: Multiplicação</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Exercício 3: Multiplicação de Dois Números</h1>
        <p>Crie um formulário que permita ao usuário inserir dois números. O script PHP deve multiplicar esses números e exibir o resultado.</p>

        <form action="{{ route('exercicio3.handle') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="num1" class="form-label">Número 1:</label>
                <input type="number" class="form-control" id="num1" name="num1" required>
            </div>
            <div class="mb-3">
                <label for="num2" class="form-label">Número 2:</label>
                <input type="number" class="form-control" id="num2" name="num2" required>
            </div>
            <button type="submit" class="btn btn-primary">Multiplicar</button>
        </form>

        @if(isset($resultado))
            <div class="alert alert-success mt-4">
                O resultado da multiplicação é: <strong>{{ $resultado }}</strong>
            </div>
        @endif
    </div>
</body>
</html>