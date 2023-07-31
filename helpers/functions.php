<?php

function filterItensByStoreId($items, $store): array
{
    return array_filter($items, function ($item) use ($store) {
        return $item->store_id === $store;
    });
}

function formatPriceToDatabase($price): array|string
{
    return str_replace(['.', ','], ['', '.'], $price);
}

function generateIdentifyOrder(int $qtyCaraceters = 8): string
{
    $smallLetters = str_shuffle('abcdefghijklmnopqrstuvwxyz');

    $numbers = (((date('Ymd') / 12) * 24) + mt_rand(800, 9999));
    $numbers .= 1234567890;

    $characters = $smallLetters . $numbers;

    return strtoupper(substr(str_shuffle($characters), 0, $qtyCaraceters));
}

function formatMoney($number): string
{
    return "R$ " . number_format($number, 2, ',', '.');
}

function formatCnpjCpf($value)
{
    $CPF_LENGTH = 11;
    $cnpj_cpf = preg_replace("/\D/", '', $value);

    if (strlen($cnpj_cpf) === $CPF_LENGTH) {
        return preg_replace("/(\d{3})(\d{3})(\d{3})(\d{2})/", "\$1.\$2.\$3-\$4", $cnpj_cpf);
    }

    return preg_replace("/(\d{2})(\d{3})(\d{3})(\d{4})(\d{2})/", "\$1.\$2.\$3/\$4-\$5", $cnpj_cpf);
}

function telefone($n)
{
    $tam = strlen(preg_replace("/[^0-9]/", "", $n));

    if ($tam == 13) {
        // COM CÓDIGO DE ÁREA NACIONAL E DO PAIS e 9 dígitos
        return "+" . substr($n, 0, $tam - 11) . " (" . substr($n, $tam - 11, 2) . ") " . substr($n, $tam - 9, 5) . "-" . substr($n, -4);
    }
    if ($tam == 12) {
        // COM CÓDIGO DE ÁREA NACIONAL E DO PAIS
        return "+" . substr($n, 0, $tam - 10) . " (" . substr($n, $tam - 10, 2) . ") " . substr($n, $tam - 8, 4) . "-" . substr($n, -4);
    }
    if ($tam == 11) {
        // COM CÓDIGO DE ÁREA NACIONAL e 9 dígitos
        return "(" . substr($n, 0, 2) . ") " . substr($n, 2, 5) . "-" . substr($n, 7, 11);
    }
    if ($tam == 10) {
        // COM CÓDIGO DE ÁREA NACIONAL
        return "(" . substr($n, 0, 2) . ") " . substr($n, 2, 4) . "-" . substr($n, 6, 10);
    }
    if ($tam <= 9) {
        // SEM CÓDIGO DE ÁREA
        return substr($n, 0, $tam - 4) . "-" . substr($n, -4);
    }
}

function daysList($quantityDays, $format, $lastYear = null)
{
    $list = [];

    if ($lastYear) {
        for ($i = $quantityDays; $i > 0; $i--) {
            $list[] = date("{$format}", strtotime("-$i days", strtotime('-1 Year')));
        }
    }

    if ($lastYear === null) {
        for ($i = $quantityDays; $i > 0; $i--) {
            $list[] = date("{$format}", strtotime("-$i days"));
        }
    }

    return $list;
}
