<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 16: Preço com Desconto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Exercício 16: Preço com Desconto</h1>
        <p>Crie um formulário que permita ao usuário inserir um preço e um percentual de desconto. O script PHP deve calcular o preço com desconto e exibir o resultado.</p>

        <form action="{{ route('exercicio16.handle') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="preco" class="form-label">Preço Original (R$):</label>
                <input type="number" step="0.01" class="form-control" id="preco" name="preco" required>
            </div>
            <div class="mb-3">
                <label for="desconto" class="form-label">Percentual de Desconto (%):</label>
                <input type="number" step="any" class="form-control" id="desconto" name="desconto" required>
            </div>
            <button type="submit" class="btn btn-primary">Calcular Desconto</button>
        </form>

        @if(isset($preco_final))
            <div class="alert alert-success mt-4">
                O preço com desconto é: <strong>R$ {{ number_format($preco_final, 2, ',', '.') }}</strong>
            </div>
        @endif
    </div>
</body>
</html>