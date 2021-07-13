<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pedidos = Pedido::all();
        return view('pedidos')->with('pedidos', $pedidos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($id_produto)
    {
        $id_usuario = Auth::user()->id;

        $pedido = new Pedido();
        $pedido->id_usuario = $id_usuario;
        $pedido->id_produto = $id_produto;
        $pedido->status = 'Pendente';

        $pedido->save();
        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $pedidos = Pedido::where('id_usuario', '=', Auth::user()->id)->get();
        return view('meus-pedidos')->with('pedidos', $pedidos);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function edit(Pedido $pedido)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * Integer
     * @return \Illuminate\Http\Response
     */
    public function update($id, $acao = null)
    {
        if ($acao === 'pagar') {
            $pedido = Pedido::find($id);
            $pedido->status = 'Pago';
            $pedido->update();
            return redirect()->route('meus-pedidos');
        }

        $pedido = Pedido::find($id);
        $pedido->status = 'Aprovado';
        $pedido->update();
        return redirect()->route('pedidos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * Integer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pedido = Pedido::find($id);

        if (Auth::user()->id !== $pedido->id_usuario && Auth::user()->admin == 0) {
            return redirect()->route('meus-pedidos');
        }

        $pedido->delete();

        if (Auth::user()->admin === 0) {
            return redirect()->route('meus-pedidos');
        }

        return redirect()->route('pedidos');
    }
}
