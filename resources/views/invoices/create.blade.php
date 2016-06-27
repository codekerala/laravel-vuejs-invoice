@extends('layouts.master')

@section('content')
    <div id="invoice">
        <div class="panel panel-default" v-cloak>
            <div class="panel-heading">
                <div class="clearfix">
                    <span class="panel-title">Create Invoice</span>
                    <a href="{{route('invoices.index')}}" class="btn btn-default pull-right">Back</a>
                </div>
            </div>
            <div class="panel-body">
                @include('invoices.form')
            </div>
            <div class="panel-footer">
                <a href="{{route('invoices.index')}}" class="btn btn-default">CANCEL</a>
                <button class="btn btn-success" @click="create" :disabled="isProcessing">CREATE</button>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="/js/vue.min.js"></script>
    <script src="/js/vue-resource.min.js"></script>
    <script type="text/javascript">
        Vue.http.headers.common['X-CSRF-TOKEN'] = '{{csrf_token()}}';

        window._form = {
            invoice_no: '',
            client: '',
            client_address: '',
            title: '',
            invoice_date: '',
            due_date: '',
            discount: 0,
            products: [{
                name: '',
                price: 0,
                qty: 1
            }]
        };
    </script>
    <script src="/js/app.js"></script>
@endpush