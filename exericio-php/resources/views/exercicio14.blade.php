<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 14: Quilômetros para Milhas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Exercício 14: Quilômetros para Milhas</h1>
        <p>Crie um formulário que permita ao usuário inserir um valor em quilômetros. O script PHP deve converter esse valor para milhas (1 quilômetro = 0.621371 milhas) e exibir o resultado.</p>

        <form action="{{ route('exercicio14.handle') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="km" class="form-label">Valor em Quilômetros (km):</label>
                <input type="number" step="any" class="form-control" id="km" name="km" required>
            </div>
            <button type="submit" class="btn btn-primary">Converter</button>
        </form>

        @if(isset($milhas))
            <div class="alert alert-success mt-4">
                O resultado da conversão é: <strong>{{ number_format($milhas, 2, ',', '.') }} milhas</strong>
            </div>
        @endif
    </div>
</body>
</html>