<?php

namespace App\Http\Services;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class FreteCorreiosService
{
    public function calcularFrete(Request $request)
    {
        $cepOrigem = '38408290'; // Substitua pelo CEP de origem desejado
        $cepDestino = $request->input('cep_destino'); // Obtém o CEP de destino do formulário

        $weight = 1; // Peso do produto em kg
        $format = 1; // Formato da encomenda: 1 para caixa/pacote

        $client = new Client();
        $response = $client->get("http://ws.correios.com.br/calculador/CalcPrecoPrazo.aspx", [
            'query' => [
                'nCdEmpresa' => '',
                'sDsSenha' => '',
                'nCdServico' => '41106', // Códigos dos serviços dos Correios (Sedex e PAC, respectivamente)
                'sCepOrigem' => $cepOrigem,
                'sCepDestino' => $cepDestino,
                'nVlPeso' => $weight,
                'nCdFormato' => $format,
                'nVlComprimento' => 20, // Comprimento do produto em cm
                'nVlAltura' => 10, // Altura do produto em cm
                'nVlLargura' => 15, // Largura do produto em cm
                'nVlDiametro' => 0, // Diâmetro do produto em cm
                'sCdMaoPropria' => 'N',
                'nVlValorDeclarado' => 0,
                'sCdAvisoRecebimento' => 'N',
                'StrRetorno' => 'xml'
            ]
        ]);

        $xmlResponse = simplexml_load_string($response->getBody()->getContents());

        // Recupera as informações do XML de resposta
        $valor = (float) $xmlResponse->cServico[0]->Valor;
        $prazo = (int) $xmlResponse->cServico[0]->PrazoEntrega;

        // Retorne os valores ou faça o que for necessário com eles
        return response()->json([
            'valor' => $valor,
            'prazo' => $prazo
        ]);
    }
}
