<div>
    
    <select>
        <option wire:model="estado" name="uf" class="form_input" selected>{{__('Selecione o Estado')}}></option>
            @foreach ($estados as $estado)
                    <option value="{{ $estado->sigla }}">{{ $estado->nome }}</option>
            @endforeach
    </select>
    

   
    <select>
        <option name="cidade" class="form_input" selected>{{__('Selecione a cidade')}}></option>
            @if ($this->estado)
                @foreach ($municipios as $municipio)
                    <option value="{{ $municipio->id }}">{{ $municipio->nome }}</option>
                @endforeach  
            @endif
    </select>
 
</div>
