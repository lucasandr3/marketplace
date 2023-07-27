<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link href="{{url('assets/css/style.min.css')}}" rel="stylesheet"/>
    <link rel="stylesheet" href="{{url('assets/css/custom.css')}}">
    <title>Items</title>
    <style>
        body {
            background-color: white;
        }
    </style>
</head>
<body>
<div class="row">
    <div class="">
        <div class="">
            <div class="row col-lg-12">

                <table align="center" width="100%">
                    <tbody><tr>
                        <td width="15%">
                            <img src="{{url("assets/images/{$process->unit->logo}")}}" width="120"/>
                        </td>
                        <td width="70%" align="center">
                            <b>
                                <font size="+1">
                                    <h1 class="text-dark mb-0">{{$process->unit->name}}</h1>
                                    <h3 class="text-dark">{{$process->modality->type}} Nº {{$process->my_number}}</h3>
                                    <h5 class="text-dark">Relação de Itens / Lotes</h5>
                                </font>
                            </b>
                        </td>
                        <td align="center">
                            <img src="{{url('assets/images/logo_nome.png')}}" width="120"/>
                        </td>
                    </tr>
                    </tbody></table>
            </div>
            <div class="papper-a4-pdf">
                <div class="papper-body-pdf">
                    <table class="table table-striped search-table v-middle table-bordered mt-5 font-rel">
                        <thead class="header-item">
                        <tr>
                            <th class="text-dark font-weight-bold">Item</th>
                            <th class="text-dark font-weight-bold">Nome</th>
                            <th class="text-dark font-weight-bold">Valor</th>
                            <th class="text-dark font-weight-bold">Und</th>
                            <th class="text-dark font-weight-bold">Quantidade</th>
                            <th class="text-dark font-weight-bold">Total</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($items as $item)
                            <!-- row -->
                            <tr class="search-items">
                                <td class="text-dark font-weight-bold">
                                    <b>{{$item->item_number}}</b>
                                </td>
                                <td class="text-dark">
                                   {{$item->item}}
                                </td>
                                <td class="text-dark">
                                    {{$item->value}}
                                </td>
                                <td class="text-dark">
                                    {{$item->unit}}
                                </td>
                                <td class="text-dark">
                                    {{$item->quantity}}
                                </td>
                                <td class="text-dark">
                                    {{$item->total}}
                                </td>
                            </tr>
                            <!-- /.row -->
                        @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <td colspan="6" align="right">
                                <p class="font-weight-bold text-dark font-14">Total: {{$totalItems}}</p>
                            </td>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>

