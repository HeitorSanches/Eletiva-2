<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 13: Metros para Centímetros</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Exercício 13: Metros para Centímetros</h1>
        <p>Crie um formulário que permita ao usuário inserir um valor em metros. O script PHP deve converter esse valor para centímetros e exibir o resultado. </p>

        <form action="{{ route('exercicio13.handle') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="metros" class="form-label">Valor em Metros (m):</label>
                <input type="number" step="any" class="form-control" id="metros" name="metros" required>
            </div>
            <button type="submit" class="btn btn-primary">Converter</button>
        </form>

        @if(isset($centimetros))
            <div class="alert alert-success mt-4">
                O resultado da conversão é: <strong>{{ number_format($centimetros, 2, ',', '.') }} cm</strong>
            </div>
        @endif
    </div>
</body>
</html>