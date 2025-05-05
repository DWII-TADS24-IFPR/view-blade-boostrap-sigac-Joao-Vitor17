<div>
    <h1>Criar Nível</h1>
    
    <form action="{{ route('nivels.store') }}" method="post">
        @csrf
        <div>
            <label for="nome">Nome do Nível:</label>
            <input type="text" name="nome" required>
        </div>
        <button type="submit">Criar</button>
    </form>
</div>
