<div wire:ignore.self class="modal fade" id="PaymentModal" tabindex="-1" data-backdrop="static" data-keyboard="false" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Payment</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                </div>
                <div class="modal-body">
                    <form wire:submit.prevent="checkout">
                    <div class="form-group mb-2">
                                <input type="hidden" id="ids" placeholder="Enter id" class="form-control" wire:model="ids">
                        </div>
                        <div class="form-group mb-2">
                            <label for="name" >Fullname</label>
                                <input type="text" id="name" placeholder="Enter Fullname" class="form-control" wire:model="name" disabled>
                        </div>

                        <div class="form-group mb-3">
                            <label for="email">Email</label>
                                <input type="email" id="email" placeholder="Enter Email" class="form-control" wire:model="email" disabled>
                            @if(session()->has('error_email'))
                                <div class="alert alert-danger mt-3">
                                    {{ session()->get('error_email') }}
                                </div>
                        
                            @endif
                        </div>
                        <div class="form-group mb-2">
                            <label for="name" >Mobile Number</label>
                                <input type="text" id="name" placeholder="Enter Mobile Number" class="form-control" wire:model="mobile_no" required>
                        </div>
                        <div class="form-group mb-2">
                            <label for="name" >Amount</label>
                                <input type="text" id="name" placeholder="Enter Amount" class="form-control" wire:model="amount" required>
                        </div>
                        <div class="form-group mb-2">
                            <label for="name" >Payment For</label>
                                <input type="text" id="name" placeholder="Payment for" class="form-control" wire:model="payment_for" required>
                        </div>
                        <div class="form-group mb-2">
                            <label for="name" >Payment Method</label>
                                <input type="text" id="name" placeholder="Payment Method" class="form-control" wire:model="payment_method" required>
                        </div>
                      
                        <div class="modal-footer">
                            <button type="submit"  class="btn btn-primary">Proceed</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
