<?php

namespace App\Http\Livewire;


use Livewire\Component;
use Illuminate\Support\Facades\Http;

class ClienteCadastro extends Component
{
    public $estado;
    public function render()
    {
        $estados = json_decode(
            Http::get('http://servicodados.ibge.gov.br/api/v1/localidades/estados',
            ['orderBy' => 'name']
        )->body()
        );
        
        $municipios = [];

        if ($this->estado) {
            $municipios = json_decode(
                Http::get('https://servicodados.ibge.gov.br/api/v1/localidades/estados/{$this->estado}/municipios'
                )->body()
            );
        }

        return view('livewire.cliente-cadastro',[
            'estados' => $estados,
            'municipios' => $municipios
        ]);
    }
}
