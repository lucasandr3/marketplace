<div class="row">
    <div class="col-sm-12 col-md-3">
        <div class="form-group">
            <label class="control-label col-form-label">CEP: <small class="text-primary">( obrigatório )</small></label>
            <input type="text" class="form-control" id="zipcode" value="{{$address->zipcode ?? old('zipcode')}}" name="zipcode" placeholder="Informe o cep">
        </div>
    </div>
    <div class="col-sm-12 col-md-9">
        <div class="form-group">
            <label class="control-label col-form-label">Logradouro: <small class="text-primary">( obrigatório )</small></label>
            <input type="tel" class="form-control" name="street" id="street" value="{{$address->street ?? old('street')}}"
                   placeholder="Informe o logradouro">
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12 col-md-4">
        <div class="form-group">
            <label class="control-label col-form-label">Cidade: <small class="text-primary">( obrigatório )</small></label>
            <input type="text" class="form-control" name="city" id="city" value="{{$address->city ?? old('city')}}"
                   placeholder="Informe o cidade">
        </div>
    </div>
    <div class="col-sm-12 col-md-4">
        <div class="form-group">
            <label class="control-label col-form-label">Estado: <span
                    class="text-info">(*)</span></label>
            <select name="uf" id="uf" class="form-control select2" style="width: 100%;">
                <option value="{{$address->uf ?? ''}}">{{$address->uf ?? 'Selecione o estado'}}</option>
                <option value="AC">AC</option>
                <option value="AL">AL</option>
                <option value="AM">AM</option>
                <option value="AP">AP</option>
                <option value="BA">BA</option>
                <option value="CE">CE</option>
                <option value="DF">DF</option>
                <option value="ES">ES</option>
                <option value="GO">GO</option>
                <option value="MA">MA</option>
                <option value="MG">MG</option>
                <option value="MS">MS</option>
                <option value="MT">MT</option>
                <option value="PA">PA</option>
                <option value="PB">PB</option>
                <option value="PE">PE</option>
                <option value="PI">PI</option>
                <option value="PR">PR</option>
                <option value="RJ">RJ</option>
                <option value="RN">RN</option>
                <option value="RO">RO</option>
                <option value="RR">RR</option>
                <option value="RS">RS</option>
                <option value="SC">SC</option>
                <option value="SE">SE</option>
                <option value="SP">SP</option>
                <option value="TO">TO</option>
            </select>
        </div>
    </div>
    <div class="col-sm-12 col-md-4">
        <div class="form-group">
            <label class="control-label col-form-label">Bairro: <small class="text-primary">( obrigatório )</small></label>
            <input type="text" class="form-control" name="neighborhood" value="{{$address->neighborhood ?? old('neighborhood')}}"
                   placeholder="Informe o bairro" id="neighborhood">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-12 col-md-6">
        <div class="form-group">
            <label class="control-label col-form-label">Número: <small class="text-primary">( obrigatório )</small></label>
            <input type="text" class="form-control" name="number" value="{{$address->number ?? old('number')}}"
                   placeholder="Informe o número">
        </div>
    </div>
    <div class="col-sm-12 col-md-6">
        <div class="form-group">
            <label class="control-label col-form-label">Complemento:</label>
            <input type="text" class="form-control" name="complement" id="complement" value="{{$address->complement ?? old('complement')}}"
                   placeholder="Informe o complemento">
        </div>
    </div>
</div>

@once
    @push('scripts')
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>

            $(document).ready(function() {

                function limpa_formulário_cep() {
                    // Limpa valores do formulário de cep.
                    $("#street").val("");
                    $("#neighborhood").val("");
                    $("#city").val("");
                    $("#uf").val("");
                    $("#complement").val("");
                }

                //Quando o campo cep perde o foco.
                $("#zipcode").blur(function() {

                    //Nova variável "cep" somente com dígitos.
                    var cep = $(this).val().replace(/\D/g, '');

                    //Verifica se campo cep possui valor informado.
                    if (cep != "") {

                        //Expressão regular para validar o CEP.
                        var validacep = /^[0-9]{8}$/;

                        //Valida o formato do CEP.
                        if(validacep.test(cep)) {

                            //Preenche os campos com "..." enquanto consulta webservice.
                            $("#street").val("...");
                            $("#neighborhood").val("...");
                            $("#city").val("...");
                            $("#uf").val("...");
                            $("#complement").val("...");

                            //Consulta o webservice viacep.com.br/
                            $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {
                                if (!("erro" in dados)) {
                                    //Atualiza os campos com os valores da consulta.
                                    $("#street").val(dados.logradouro);
                                    $("#neighborhood").val(dados.bairro);
                                    $("#city").val(dados.localidade);
                                    $("#uf").val(dados.uf).trigger('change.select2');
                                    $("#complement").val(dados.complemento);
                                } //end if.
                                else {
                                    //CEP pesquisado não foi encontrado.
                                    limpa_formulário_cep();
                                    Swal.fire(
                                        'Aviso',
                                        'CEP não encontrado.',
                                        'warning'
                                    )
                                }
                            });
                        } //end if.
                        else {
                            //cep é inválido.
                            limpa_formulário_cep();
                            Swal.fire(
                                'Aviso',
                                'Formato de CEP inválido.',
                                'warning'
                            )
                        }
                    } //end if.
                    else {
                        //cep sem valor, limpa formulário.
                        limpa_formulário_cep();
                    }
                });
            });

        </script>
    @endpush
@endonce
