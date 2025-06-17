<div
    class="modal show"
    id="{{$idModal}}"
    aria-modal="true"
    role="dialog"
>
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content tx-size-sm">
            <div class="modal-body tx-center pd-y-20 pd-x-20">
                <button
                        aria-label="Close"
                        class="close"
                        data-bs-dismiss="modal"
                        type="button"
                    >
                        <span aria-hidden="true">×</span>
                </button>
                <i class="fa fa-bell-o tx-100 tx-info lh-1 mg-t-20 d-inline-block" style="font-size: 70px;"></i>
                <h4 class="tx-info mg-b-20" id="{{$idMessage}}"></h4>
                <button
                    aria-label="Close"
                    class="btn ripple btn-danger pd-x-25"
                    data-bs-dismiss="modal"
                    type="button"
                ><i class="fa fa-times-circle"></i> Salir</button>
            </div>
        </div>
    </div>
</div>