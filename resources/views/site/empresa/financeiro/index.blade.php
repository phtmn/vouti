@extends('site.painel.dashboard')

@section('painel')

    @include('messages.msg')

    <div class="container" style="margin-top:20px; padding:20px">
        <div class="row row justify-content-center">
            <div class="col-md-12">
                <h4>Resumo Títulos </h4>
                <hr>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="">

                            <div class="table-responsive m-t-20">
                                <table class="table stylish-table">
                                    <thead>
                                    <tr>

                                        <th>Cobrança</th>
                                        <th>Data Vencimento</th>
                                        <th>Valor (R$)</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                   
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


            <br>



        </div>

    </div>
    </div>
    </div>



@stop