<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 12: Potenciação</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Exercício 12: Potenciação</h1>
        <p>Crie um formulário que permita ao usuário inserir uma base e um expoente. O script PHP deve calcular a base elevada ao expoente e exibir o resultado.</p>

        <form action="{{ route('exercicio12.handle') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="base" class="form-label">Base:</label>
                <input type="number" class="form-control" id="base" name="base" required>
            </div>
            <div class="mb-3">
                <label for="expoente" class="form-label">Expoente:</label>
                <input type="number" class="form-control" id="expoente" name="expoente" required>
            </div>
            <button type="submit" class="btn btn-primary">Calcular</button>
        </form>

        @if(isset($resultado))
            <div class="alert alert-success mt-4">
                O resultado é: <strong>{{ number_format($resultado, 2, ',', '.') }}</strong>
            </div>
        @endif
    </div>
</body>
</html>