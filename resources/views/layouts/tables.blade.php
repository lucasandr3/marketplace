@extends('layouts.app')

@section('title', 'Planos')

@section('breadcrumb')
    <div class="col-md-5 col-12 align-self-center">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="{{route('hub')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Planos</li>
        </ol>
    </div>
@endsection

@section('content')
    <div class="widget-content searchable-container list">
        <div class="card card-body mb-0">
            <div class="row">
                <div class="col-md-4">
                    <form>
                        <input type="text" class="form-control product-search" id="input-search" placeholder="Pesquisar Planos...">
                    </form>
                </div>
                <div class="col-md-8 text-right d-flex justify-content-md-end justify-content-center mt-3 mt-md-0">
                    <a href="javascript:void(0)" id="btn-add-contact" class="btn btn-info"><i class="mdi mdi-folder-plus font-16 mr-1"></i> Novo Plano</a>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="addContactModal" tabindex="-1" role="dialog" aria-labelledby="addContactModalTitle" aria-hidden="true" style="display: none;">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Contact</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="add-contact-box">
                            <div class="add-contact-content">
                                <form id="addContactModalTitle">
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <div class="contact-name">
                                                <input type="text" id="c-name" class="form-control" placeholder="Name">
                                                <span class="validation-text" style="display: none;"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="contact-email">
                                                <input type="text" id="c-email" class="form-control" placeholder="Email">
                                                <span class="validation-text" style="display: none;"></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <div class="contact-occupation">
                                                <input type="text" id="c-occupation" class="form-control" placeholder="Occupation">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="contact-phone">
                                                <input type="text" id="c-phone" class="form-control" placeholder="Phone">
                                                <span class="validation-text" style="display: none;"></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-md-12">
                                            <div class="contact-location">
                                                <input type="text" id="c-location" class="form-control" placeholder="Location">
                                            </div>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button id="btn-add" class="btn btn-success">Add</button>
                        <button id="btn-edit" class="btn btn-success" style="display: none;">Save</button>
                        <button class="btn btn-danger" data-dismiss="modal"> Discard</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="card card-body pt-0">
            <div class="table-responsive">
                <table class="table table-striped search-table v-middle">
                    <thead class="header-item">
                    <tr><th>
                            <div class="n-chk align-self-center text-center">
                                <div class="checkbox checkbox-info">
                                    <input type="checkbox" class="material-inputs" id="contact-check-all">
                                    <label class="" for="contact-check-all" style="margin-bottom: 0 !important;"></label>
                                    <span class="new-control-indicator"></span>
                                </div>
                            </div>
                        </th>
                        <th class="text-dark font-weight-bold">Name</th>
                        <th class="text-dark font-weight-bold">Email</th>
                        <th class="text-dark font-weight-bold">Location</th>
                        <th class="text-dark font-weight-bold">Phone</th>
                        <th class="text-center">
                            <div class="action-btn">
                                <a href="javascript:void(0)" class="delete-multiple  text-danger"><i class="fas fa-trash font-20 font-medium"></i> Excluir Selecionados</a>
                            </div>
                        </th>
                    </tr></thead>
                    <tbody>
                    @foreach($plans as $plan)
                        <!-- row -->
                        <tr class="search-items">
                            <td>
                                <div class="n-chk align-self-center text-center">
                                    <div class="checkbox checkbox-info">
                                        <input type="checkbox" class="material-inputs contact-chkbox" id="checkbox1">
                                        <label class="" for="checkbox1"></label>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="../assets/images/users/1.jpg" alt="avatar" class="rounded-circle" width="35">
                                    <div class="ml-2">
                                        <div class="user-meta-info">
                                            <h5 class="user-name mb-0" data-name="Emma Adams">Emma Adams</h5>
                                            <span class="user-work text-muted" data-occupation="Web Developer">Web Developer</span>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <span class="usr-email-addr" data-email="adams@mail.com">adams@mail.com</span>
                            </td>
                            <td>
                                <span class="usr-location" data-location="Boston, USA">Boston, USA</span>
                            </td>
                            <td>
                                <span class="usr-ph-no" data-phone="+1 (070) 123-4567">+91 (070) 123-4567</span>
                            </td>
                            <td class="text-center">
                                <div class="action-btn">
                                    <a href="javascript:void(0)" class="text-info edit"><i class="mdi mdi-pen font-20"></i></a>
                                    <a href="javascript:void(0)" class="text-danger delete ml-2"><i class="mdi mdi-delete font-20"></i></a>
                                </div>
                            </td>
                        </tr>
                        <!-- /.row -->
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
