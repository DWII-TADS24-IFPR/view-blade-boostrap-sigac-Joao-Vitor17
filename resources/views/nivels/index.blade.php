<div>
    <h1>Nivels: </h1>
    @foreach ($nivels as $nivel)
        <div>
            <h2>Nome do nível: {{ $nivel->nome }}</h2>
        </div>
    @endforeach
</div>
