<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 15: Cálculo de IMC</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Exercício 15: Cálculo de IMC</h1>
        <p>Crie um formulário que permita ao usuário inserir seu peso (em kg) e altura (em metros). O script PHP deve calcular o IMC (peso / altura²) e exibir o resultado.</p>

        <form action="{{ route('exercicio15.handle') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="peso" class="form-label">Peso (kg):</label>
                <input type="number" step="any" class="form-control" id="peso" name="peso" placeholder="Ex: 70.5" required>
            </div>
            <div class="mb-3">
                <label for="altura" class="form-label">Altura (m):</label>
                <input type="number" step="any" class="form-control" id="altura" name="altura" placeholder="Ex: 1.75" required>
            </div>
            <button type="submit" class="btn btn-primary">Calcular IMC</button>
        </form>

        @if(isset($imc))
            <div class="alert alert-success mt-4">
                O seu IMC é: <strong>{{ number_format($imc, 2, ',', '.') }}</strong>
            </div>
        @endif
    </div>
</body>
</html>