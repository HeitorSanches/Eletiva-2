<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 4: Divisão</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Exercício 4: Divisão de Dois Números</h1>
        <p>Crie um formulário que permita ao usuário inserir dois números. O script PHP deve dividir o primeiro número pelo segundo e exibir o resultado. Inclua uma verificação para evitar divisão por zero.</p>

        <form action="{{ route('exercicio4.handle') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="num1" class="form-label">Primeiro Número (Dividendo):</label>
                <input type="number" class="form-control" id="num1" name="num1" required>
            </div>
            <div class="mb-3">
                <label for="num2" class="form-label">Segundo Número (Divisor):</label>
                <input type="number" class="form-control" id="num2" name="num2" required>
            </div>
            <button type="submit" class="btn btn-primary">Dividir</button>
        </form>

        {{-- Exibe a caixa de SUCESSO se a variável $resultado existir --}}
        @if(isset($resultado))
            <div class="alert alert-success mt-4">
                O resultado da divisão é: <strong>{{ $resultado }}</strong>
            </div>
        @endif

        {{-- Exibe a caixa de ERRO se a variável $erro existir --}}
        @if(isset($erro))
            <div class="alert alert-danger mt-4">
                <strong>{{ $erro }}</strong>
            </div>
        @endif
    </div>
</body>
</html>