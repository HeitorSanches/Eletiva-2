<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 10: Perímetro do Retângulo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Exercício 10: Perímetro do Retângulo</h1>
        <p>Crie um formulário que permita ao usuário inserir a largura e a altura de um retângulo. O script PHP deve calcular o perímetro do retângulo e exibir o resultado.</p>

        <form action="{{ route('exercicio10.handle') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="largura" class="form-label">Largura:</label>
                <input type="number" step="any" class="form-control" id="largura" name="largura" required>
            </div>
            <div class="mb-3">
                <label for="altura" class="form-label">Altura:</label>
                <input type="number" step="any" class="form-control" id="altura" name="altura" required>
            </div>
            <button type="submit" class="btn btn-primary">Calcular Perímetro</button>
        </form>

        @if(isset($perimetro))
            <div class="alert alert-success mt-4">
                O perímetro do retângulo é: <strong>{{ number_format($perimetro, 2, ',', '.') }}</strong>
            </div>
        @endif
    </div>
</body>
</html>