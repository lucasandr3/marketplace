@extends('layouts.store')

@section('content')
    <div class="container mb-5">
        <main>
            <div class="row g-5">
                {{--                <div class="col-md-5 col-lg-4 order-md-last">--}}
                {{--                    <h4 class="d-flex justify-content-between align-items-center mb-3">--}}
                {{--                        <span class="text-primary">Seu Carrinho</span>--}}
                {{--                        <span class="badge bg-primary rounded-pill">{{count(session()->get('cart'))}}</span>--}}
                {{--                    </h4>--}}
                {{--                    <ul class="list-group mb-3">--}}
                {{--                        <li class="list-group-item d-flex justify-content-between lh-sm">--}}
                {{--                            <div>--}}
                {{--                                <h6 class="my-0">Product name</h6>--}}
                {{--                                <small class="text-body-secondary">Brief description</small>--}}
                {{--                            </div>--}}
                {{--                            <span class="text-body-secondary">$12</span>--}}
                {{--                        </li>--}}
                {{--                        <li class="list-group-item d-flex justify-content-between lh-sm">--}}
                {{--                            <div>--}}
                {{--                                <h6 class="my-0">Second product</h6>--}}
                {{--                                <small class="text-body-secondary">Brief description</small>--}}
                {{--                            </div>--}}
                {{--                            <span class="text-body-secondary">$8</span>--}}
                {{--                        </li>--}}
                {{--                        <li class="list-group-item d-flex justify-content-between lh-sm">--}}
                {{--                            <div>--}}
                {{--                                <h6 class="my-0">Third item</h6>--}}
                {{--                                <small class="text-body-secondary">Brief description</small>--}}
                {{--                            </div>--}}
                {{--                            <span class="text-body-secondary">$5</span>--}}
                {{--                        </li>--}}
                {{--                        <li class="list-group-item d-flex justify-content-between bg-body-tertiary">--}}
                {{--                            <div class="text-success">--}}
                {{--                                <h6 class="my-0">Promo code</h6>--}}
                {{--                                <small>EXAMPLECODE</small>--}}
                {{--                            </div>--}}
                {{--                            <span class="text-success">−$5</span>--}}
                {{--                        </li>--}}
                {{--                        <li class="list-group-item d-flex justify-content-between">--}}
                {{--                            <span>Total (USD)</span>--}}
                {{--                            <strong>$20</strong>--}}
                {{--                        </li>--}}
                {{--                    </ul>--}}

                {{--                    <form class="card p-2">--}}
                {{--                        <div class="input-group">--}}
                {{--                            <input type="text" class="form-control" placeholder="Promo code">--}}
                {{--                            <button type="submit" class="btn btn-secondary">Redeem</button>--}}
                {{--                        </div>--}}
                {{--                    </form>--}}
                {{--                </div>--}}
                <div class="col-md-7 col-lg-8">
                    {{--                    <h4 class="mb-3">Billing address</h4>--}}
                    <form class="needs-validation" novalidate="">
                        {{--                        <div class="row g-3">--}}
                        {{--                            <div class="col-sm-6">--}}
                        {{--                                <label for="firstName" class="form-label">First name</label>--}}
                        {{--                                <input type="text" class="form-control" id="firstName" placeholder="" value="" required="">--}}
                        {{--                                <div class="invalid-feedback">--}}
                        {{--                                    Valid first name is required.--}}
                        {{--                                </div>--}}
                        {{--                            </div>--}}

                        {{--                            <div class="col-sm-6">--}}
                        {{--                                <label for="lastName" class="form-label">Last name</label>--}}
                        {{--                                <input type="text" class="form-control" id="lastName" placeholder="" value="" required="">--}}
                        {{--                                <div class="invalid-feedback">--}}
                        {{--                                    Valid last name is required.--}}
                        {{--                                </div>--}}
                        {{--                            </div>--}}

                        {{--                            <div class="col-12">--}}
                        {{--                                <label for="username" class="form-label">Username</label>--}}
                        {{--                                <div class="input-group has-validation">--}}
                        {{--                                    <span class="input-group-text">@</span>--}}
                        {{--                                    <input type="text" class="form-control" id="username" placeholder="Username" required="">--}}
                        {{--                                    <div class="invalid-feedback">--}}
                        {{--                                        Your username is required.--}}
                        {{--                                    </div>--}}
                        {{--                                </div>--}}
                        {{--                            </div>--}}

                        {{--                            <div class="col-12">--}}
                        {{--                                <label for="email" class="form-label">Email <span class="text-body-secondary">(Optional)</span></label>--}}
                        {{--                                <input type="email" class="form-control" id="email" placeholder="you@example.com">--}}
                        {{--                                <div class="invalid-feedback">--}}
                        {{--                                    Please enter a valid email address for shipping updates.--}}
                        {{--                                </div>--}}
                        {{--                            </div>--}}

                        {{--                            <div class="col-12">--}}
                        {{--                                <label for="address" class="form-label">Address</label>--}}
                        {{--                                <input type="text" class="form-control" id="address" placeholder="1234 Main St" required="">--}}
                        {{--                                <div class="invalid-feedback">--}}
                        {{--                                    Please enter your shipping address.--}}
                        {{--                                </div>--}}
                        {{--                            </div>--}}

                        {{--                            <div class="col-12">--}}
                        {{--                                <label for="address2" class="form-label">Address 2 <span class="text-body-secondary">(Optional)</span></label>--}}
                        {{--                                <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">--}}
                        {{--                            </div>--}}

                        {{--                            <div class="col-md-5">--}}
                        {{--                                <label for="country" class="form-label">Country</label>--}}
                        {{--                                <select class="form-select" id="country" required="">--}}
                        {{--                                    <option value="">Choose...</option>--}}
                        {{--                                    <option>United States</option>--}}
                        {{--                                </select>--}}
                        {{--                                <div class="invalid-feedback">--}}
                        {{--                                    Please select a valid country.--}}
                        {{--                                </div>--}}
                        {{--                            </div>--}}

                        {{--                            <div class="col-md-4">--}}
                        {{--                                <label for="state" class="form-label">State</label>--}}
                        {{--                                <select class="form-select" id="state" required="">--}}
                        {{--                                    <option value="">Choose...</option>--}}
                        {{--                                    <option>California</option>--}}
                        {{--                                </select>--}}
                        {{--                                <div class="invalid-feedback">--}}
                        {{--                                    Please provide a valid state.--}}
                        {{--                                </div>--}}
                        {{--                            </div>--}}

                        {{--                            <div class="col-md-3">--}}
                        {{--                                <label for="zip" class="form-label">Zip</label>--}}
                        {{--                                <input type="text" class="form-control" id="zip" placeholder="" required="">--}}
                        {{--                                <div class="invalid-feedback">--}}
                        {{--                                    Zip code required.--}}
                        {{--                                </div>--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}

                        {{--                        <hr class="my-4">--}}

                        {{--                        <div class="form-check">--}}
                        {{--                            <input type="checkbox" class="form-check-input" id="same-address">--}}
                        {{--                            <label class="form-check-label" for="same-address">Shipping address is the same as my billing address</label>--}}
                        {{--                        </div>--}}

                        {{--                        <div class="form-check">--}}
                        {{--                            <input type="checkbox" class="form-check-input" id="save-info">--}}
                        {{--                            <label class="form-check-label" for="save-info">Save this information for next time</label>--}}
                        {{--                        </div>--}}

                        {{--                        <hr class="my-4">--}}

                        <h4 class="mb-3">Pagamento</h4>

                        <div class="my-3">
                            <div class="form-check">
                                <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked=""
                                       required="">
                                <label class="form-check-label" for="credit">Cartão de crédito</label>
                            </div>
                            <div class="form-check">
                                <input id="paypal" name="paymentMethod" type="radio" class="form-check-input"
                                       required="">
                                <label class="form-check-label" for="paypal">Boleto</label>
                            </div>
                        </div>

                        <div class="row gy-3">
                            <div class="col-md-6">
                                <label for="cc-name" class="form-label">Nome no cartão</label>
                                <input type="text" class="form-control" id="cc-name" placeholder="" required="">
                                <small class="text-body-secondary">Full name as displayed on card</small>
                                <div class="invalid-feedback">
                                    Name on card is required
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="cc-number" class="form-label">Número do cartão <span
                                        class="brand"></span></label>
                                <input type="text" class="form-control" id="cc-number" name="card_number" placeholder=""
                                       required="">
                                <div class="invalid-feedback">
                                    Credit card number is required
                                </div>
                                <input type="hidden" id="cc-brand">
                            </div>

                            <div class="col-md-2">
                                <label for="cc-expiration" class="form-label">Exp. Mês</label>
                                <input type="text" class="form-control" id="cc-expiration-month" value="12" placeholder=""
                                       required="">
                                <div class="invalid-feedback">
                                    Expiration date required
                                </div>
                            </div>

                            <div class="col-md-2">
                                <label for="cc-expiration" class="form-label">Exp. Ano</label>
                                <input type="text" class="form-control" id="cc-expiration-year" value="2030" placeholder=""
                                       required="">
                                <div class="invalid-feedback">
                                    Expiration date required
                                </div>
                            </div>

                            <div class="col-md-2">
                                <label for="cc-cvv" class="form-label">CVV</label>
                                <input type="text" class="form-control" id="cc-cvv" value="123" placeholder="" required="">
                                <div class="invalid-feedback">
                                    Security code required
                                </div>
                            </div>
                        </div>

                        <div class="row gy-3 mt-3">
                            <div class="col-md-8 installments">

                            </div>
                        </div>

                        <hr class="my-4">

                        <button class="w-100 btn btn-success btn-lg process-checkout-disable sr-only" type="button" disabled>
                            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                            <span>Processando...</span>
                        </button>

                        <button class="w-100 btn btn-success btn-lg process-checkout" type="submit">Finalizar Compra
                        </button>
                    </form>
                </div>
            </div>
        </main>
    </div>
@endsection

@section('scripts')
    <script
        src="https://stc.sandbox.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.directpayment.js"></script>
    <script src="{{asset('assets/js/jquery.ajax.js')}}"></script>
    <script>
        const sessionId = '{{session()->get('pg_session_code')}}'
        PagSeguroDirectPayment.setSessionId(sessionId)
    </script>

    <script>
        let amountTransaction = '{{$total}}';
        let cardNumber = document.querySelector('input[name=card_number]');
        let spanBrand = document.querySelector('span.brand');

        cardNumber.addEventListener('keyup', function () {
            if (cardNumber.value.length > 6) {
                PagSeguroDirectPayment.getBrand({
                    cardBin: cardNumber.value.substring(0, 6),
                    success: function (response) {
                        let imgFlag = `<img src="https://stc.pagseguro.uol.com.br/public/img/payment-methods-flags/68x30/${response.brand.name}.png" class="img-fluid" />`
                        spanBrand.innerHTML = imgFlag;
                        getInstallments(amountTransaction, response.brand.name)
                        document.querySelector('#cc-brand').value = response.brand.name
                    },
                    error: function (error) {
                        console.log(error)
                    },
                    // complete: function (response) {
                    //     console.log(response)
                    // }
                });
            }
        });

        let submitButton = document.querySelector('button.process-checkout');

        submitButton.addEventListener('click', function (event) {
            event.preventDefault();
            PagSeguroDirectPayment.createCardToken({
                cardNumber: document.querySelector('#cc-number').value,
                brand: document.querySelector('#cc-brand').value,
                cvv: document.querySelector('#cc-cvv').value,
                expirationMonth: document.querySelector('#cc-expiration-month').value,
                expirationYear: document.querySelector('#cc-expiration-year').value,
                success: function (response) {
                    processPayment(response.card.token)
                },
                error: function (error) {
                    console.log(error)
                }
            })
        });

        function processPayment(token) {

            let data = {
                card_token: token,
                card_name: document.querySelector('#cc-name').value,
                hash: PagSeguroDirectPayment.getSenderHash(),
                installment: document.querySelector('select.select_installments').value,
                _token: '{{csrf_token()}}'
            };
            console.log(data)
            $.ajax({
                type: 'POST',
                url: '{{route('checkout.process')}}',
                data: data,
                dataType: 'json',
                beforeSend: function(){
                    document.querySelector('.process-checkout-disable').classList.remove('sr-only')
                    document.querySelector('.process-checkout').classList.add('sr-only')
                },
                success: function (response) {
                    window.location.href = '{{route('checkout.thanks')}}?order=' + response.data.order;
                },
                error: function (error) {
                    document.querySelector('.process-checkout-disable').classList.add('sr-only')
                    document.querySelector('.process-checkout').classList.remove('sr-only')
                    console.log(error)
                }
            });
        }

        function getInstallments(amount, brand) {
            PagSeguroDirectPayment.getInstallments({
                amount: amount,
                brand: brand,
                maxInstallmentNoInterest: 0,
                success: function (response) {
                    let selectInstallments = drawSelectInstallments(response.installments[brand]);
                    document.querySelector('div.installments').innerHTML = selectInstallments;
                },
                error: function (error) {

                }
            })
        }

        function drawSelectInstallments(installments) {
            let select = '<label>Opções de Parcelamento:</label>';

            select += '<select class="form-control select_installments">';

            for (let l of installments) {
                select += `<option value="${l.quantity}|${l.installmentAmount}">${l.quantity}x de ${l.installmentAmount} - Total fica ${l.totalAmount}</option>`;
            }

            select += '</select>';
            return select;
        }
    </script>
@endsection

