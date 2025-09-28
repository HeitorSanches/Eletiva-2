<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 9: Área do Círculo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Exercício 9: Área do Círculo</h1>
        <p>Crie um formulário que permita ao usuário inserir o raio de um círculo. O script PHP deve calcular a área do círculo (πr²) e exibir o resultado.</p>

        <form action="{{ route('exercicio9.handle') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="raio" class="form-label">Raio do Círculo:</label>
                <input type="number" step="any" class="form-control" id="raio" name="raio" required>
            </div>
            <button type="submit" class="btn btn-primary">Calcular Área</button>
        </form>

        @if(isset($area))
            <div class="alert alert-success mt-4">
                A área do círculo é: <strong>{{ number_format($area, 2, ',', '.') }}</strong>
            </div>
        @endif
    </div>
</body>
</html>