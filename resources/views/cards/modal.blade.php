<div class="modal fade" id="insert-data" data-backdrop="static" tabindex="-1" role="dialog"
    aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="insert-data">Informações</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <div class="modal-body">

                <div class="card card-custom">
                    <!--begin::Form-->
                    <form method="POST" action="{{ route('OrderInsert') }}" enctype="multipart/form-data" class="needs-validation" novalidate>
                        @csrf
                        <input type="hidden" name="order-id" value="{{ $order->order_id }}" />
                        
                        @include('cards.components.'. $card_front->model.'__front_modal')
                        
                        @if($order->id_back > 0)
                            @include('cards.components.'. $card_back->model.'__back_modal')
                        @endif

                    <div class="modal-footer">
                        <button type="button" class="btn btn-light-primary font-weight-bold"
                            data-dismiss="modal">Fechar</button>
                        <button type="submit" class="btn btn-primary font-weight-bold">Enviar</button>
                    </div>
                </div>
                </form>
                <!--end::Form-->
            </div>

        </div>
    </div>
</div>