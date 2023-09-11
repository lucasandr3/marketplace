@extends('layouts.store')

@section('content')
    <h1>Carrinho de Compras</h1>

    <table border="0" width="100%">
        <tr>
            <th width="100">Imagem</th>
            <th>Nome</th>
            <th width="50">Qtd.</th>
            <th width="120">Preço</th>
            <th width="20"></th>
        </tr>
        <?php
        $subtotal = 0;
        ?>
        @foreach($cart as $item)
            @php
            $subtotal += (floatval($item['price']) * intval($item['quantity']));
            @endphp
        <tr>
{{--            <td><img src="{{asset("storage/".$item->images()->first()->image)}}" width="80" /></td>--}}
            <td><img src="{{asset('assets/images/default.png')}}" width="80" /></td>
            <td><?php echo $item['name']; ?></td>
            <td><?php echo $item['quantity']; ?></td>
            <td>R$ <?php echo number_format($item['price'], 2, ',', '.'); ?></td>
            <td><a href=""><img src="{{asset('assets/images/delete.png')}}" width="20"/></a></td>
        </tr>
        <?php endforeach; ?>
        <tr>
            <td colspan="3" align="right">Sub-total:</td>
            <td><strong>R$ <?php echo number_format($subtotal, 2, ',', '.'); ?></strong></td>
        </tr>
        <tr>
{{--            <td colspan="3" align="right">Frete:</td>--}}
            <td>
                @if(isset($item['shipping']))
{{--                <strong>R$ 21,00</strong> (5 dias úteis)--}}
                @else
                Qual seu CEP?<br/>
                <form method="POST">
                    <input type="number" name="cep" /><br/>
                    <input type="submit" value="Calcular" />
                </form>
                @endif
            </td>
        </tr>
        <tr>
            <td colspan="3" align="right">Total:</td>
            <td><strong>R$ <?php
                           if(isset($item['shipping'])) {
                               $frete = floatval(str_replace(',', '.', $item['shipping']));
                           } else {
                               $frete = 0;
                           }
                           $total = $subtotal + $frete;
                           echo number_format($total, 2, ',', '.');
                           ?></strong></td>
        </tr>
    </table>

    <hr/>
    <a href="{{route('cart.cancel')}}" class="button-danger">Cancelar compra</a>

    <form method="POST" action="" style="float:right">
        <select name="payment_type" class="form-control-custom">
            <option value="checkout_transparente">Pagseguro Checkout Transparente</option>
            <option value="mp">Mercado Pago</option>
            <option value="paypal">PayPal</option>
            <option value="boleto">Boleto Bancário</option>
        </select>

        <input type="submit" value="Finalizar Compra" class="addtocart_submit" />
    </form>

@endsection
