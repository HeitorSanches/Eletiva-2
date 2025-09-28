<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 5: Média de Notas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Exercício 5: Média de Três Notas</h1>
        <p>Crie um formulário que permita ao usuário inserir três notas. O script PHP deve calcular a média das notas e exibir o resultado.</p>

        <form action="{{ route('exercicio5.handle') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nota1" class="form-label">Nota 1:</label>
                <input type="number" step="0.1" class="form-control" id="nota1" name="nota1" required>
            </div>
            <div class="mb-3">
                <label for="nota2" class="form-label">Nota 2:</label>
                <input type="number" step="0.1" class="form-control" id="nota2" name="nota2" required>
            </div>
            <div class="mb-3">
                <label for="nota3" class="form-label">Nota 3:</label>
                <input type="number" step="0.1" class="form-control" id="nota3" name="nota3" required>
            </div>
            <button type="submit" class="btn btn-primary">Calcular Média</button>
        </form>

        @if(isset($media))
            <div class="alert alert-success mt-4">
                                                                                                {{-- Usamos number_format para exibir a média com 2 casas decimais --}}
                A média das notas é: <strong>{{ number_format($media, 2, ',', '.') }}</strong>
            </div>
        @endif
    </div>
</body>
</html>