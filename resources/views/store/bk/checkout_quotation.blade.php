@extends('layouts.front')

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

                        <h4 class="mb-3">Detalhes da cotação</h4>

                        <div class="my-3">
                            <strong>Total Cotação: </strong> R$ {{number_format($total, 2 , ',', '.')}}
                        </div>

                        <div class="row gy-3 mb-4">
                            <div class="col-md-12">
                                <label for="cc-message" class="form-label">Observação:</label>
                                <textarea class="form-control" id="cc-message" rows="5"
                                          placeholder="Observação:"></textarea>
                            </div>
                        </div>

                        <button class="w-50 btn btn-success btn-lg process-checkout-q-disable sr-only" type="button"
                                disabled>
                            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                            <span>Processando...</span>
                        </button>

                        <button class="w-100 btn btn-success btn-lg process-checkout-q-quotation" type="submit">Finalizar
                            Cotação
                        </button>
                    </form>
                </div>
            </div>
        </main>
    </div>
@endsection

@section('scripts')
    <script src="{{asset('assets/bk/js/jquery.ajax.js')}}"></script>
    <script>
        let submitButton = document.querySelector('button.process-checkout-q-quotation');

        submitButton.addEventListener('click', function (event) {
            event.preventDefault();
            process();
        });

        function process() {

            let data = {
                message: document.querySelector('#cc-message').value,
                _token: '{{csrf_token()}}'
            };

            $.ajax({
                type: 'POST',
                url: '{{route('checkout.quotation.process')}}',
                data: data,
                dataType: 'json',
                beforeSend: function () {
                    document.querySelector('.process-checkout-q-disable').classList.remove('sr-only')
                    document.querySelector('.process-checkout-q-quotation').classList.add('sr-only')
                },
                success: function (response) {
                    window.location.href = '{{route('checkout.quotation.thanks')}}?order=' + response.data.order;
                },
                error: function (error) {
                    document.querySelector('.process-checkout-q-disable').classList.add('sr-only')
                    document.querySelector('.process-checkout-q-quotation').classList.remove('sr-only')
                    console.log(error)
                }
            });
        }

    </script>
@endsection

