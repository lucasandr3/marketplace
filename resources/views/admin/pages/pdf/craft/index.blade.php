<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="stylesheet" href="{{url('assets/css/custom.css')}}">
    <title>Ofício - {{$craft->number}}</title>
</head>
<body>
<div class="row">
    <div class="col-lg-12">
        <div class="papper-pdf">
            <div class="papper-a4-pdf">
                <div class="papper-body-pdf">
                    {!! $craft->craft !!}
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>

