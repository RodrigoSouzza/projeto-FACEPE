<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Pedido;

class NorteController extends Controller
{
    public function index(){

    $pratos = Menu::all();
    
    return view("cardapio")->with(['pratos' => $pratos]);
    
}

    public function guardar(Request $g){

        $novo = new Menu();
        $novo -> nome = $g -> nome;
        $novo -> diaSemana = $g -> diasemana;
        $novo -> categoria = $g -> categoria;
        $novo -> descricao = $g -> descricao;
        $novo -> save();
        return view ("cPronto");

        
    }
    public function guardarP(Request $g){

        $novo = new Pedido();
        $novo -> nome = $g -> nome;
        $novo -> refeicao = $g -> refeicao;
        $novo -> categoria = $g -> categoria;
        $novo -> endereco = $g -> endereco;
        $novo -> formaDePagamento = $g -> pagamento;
        $novo -> save();
        return view ("cPedido");

        
    }
}
