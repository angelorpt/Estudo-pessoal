{{-- titulo --}}
<div class="input-field">
    <input type="text" name="titulo" value="{{ isset($registo->titulo) ? $registro->titulo : '' }}">
    <label for="">Título</label>
</div>

{{-- descricao --}}
<div class="input-field">
    <input type="text" name="descricao" value="{{ isset($registo->descricao) ? $registro->titulo : '' }}">
    <label for="">Descrição</label>
</div>

{{-- Valor --}}
<div class="input-field">
    <label for="">Valor</label>
    <input type="text" name="valor" value="{{ isset($registo->valor) ? $registro->valor : '' }}">
</div>

{{-- input file --}}
<div class="file-field input-field">
    <div class="btn blue darken-1">
        <span>Imagem</span>
        <input type="file" name="imagem">
    </div>
    <div class="file-path-wrapper">
        <input class="file-path validate" type="text">
    </div>
</div>

{{-- se a imagem existir --}}
@if (isset($registro->imagem))
    <div class="input-field">
        <img src="{{ asset($registro->imagem) }}">
    </div>    
@endif

{{-- checkbox para publicação --}}
<div class="input-field">
    <p>
        <label>
            <input type="checkbox" name="publicado" id="test5" {{ isset($registro->publicado) && $registro->publicado == 'sim' ? 'checked' : '' }} value="true"/>
            <span>Publicar?</span>
        </label>
    </p>
    <br><br>
</div>
