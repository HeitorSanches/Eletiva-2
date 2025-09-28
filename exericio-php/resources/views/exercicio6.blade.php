<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 6: Celsius para Fahrenheit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Exercício 6: Celsius para Fahrenheit</h1>
        <p>Crie um formulário que permita ao usuário inserir uma temperatura em Celsius. O script PHP deve converter essa temperatura para Fahrenheit e exibir o resultado.</p>

        <form action="{{ route('exercicio6.handle') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="celsius" class="form-label">Temperatura em Celsius (°C):</label>
                <input type="number" step="any" class="form-control" id="celsius" name="celsius" required>
            </div>
            <button type="submit" class="btn btn-primary">Converter</button>
        </form>

        @if(isset($fahrenheit))
            <div class="alert alert-success mt-4">
                O resultado da conversão é: <strong>{{ number_format($fahrenheit, 2, ',', '.') }} °F</strong>
            </div>
        @endif
    </div>
</body>
</html>