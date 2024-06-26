<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>

<data>
@foreach($registros as $item)
    <item>
        <titulo>{{ $item->titulo }}</titulo>
        <autor>{{ $item->autor }}</autor>
        <ano_publicacao>{{ $item->ano_publicacao }}</ano_publicacao>
        <genero>{{ $item->genero }}</genero>
        <preco>{{ $item->preco }}</preco>
        <disponivel>{{ $item->disponivel ? 'Sim' : 'Não' }}</disponivel>
    </item>
@endforeach
</data>
