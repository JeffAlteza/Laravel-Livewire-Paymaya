    <!-- Modal -->
    <div wire:ignore.self class="modal fade" id="addStudentModals" tabindex="-1" data-backdrop="static" data-keyboard="false" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add New Student</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                </div>
                <div class="modal-body">
                    <form wire:submit.prevent="add_student">
                        <div class="form-group mb-2">
                            <label for="name" >Name</label>
                                <input type="text" id="name" placeholder="Enter Fullname" class="form-control" data="" wire:model="add_name" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="email">Email</label>
                                <input type="email" id="email" placeholder="Enter Email" class="form-control" data="" wire:model="add_email" required>
                            @if(session()->has('error_email'))
                                <span class="text-danger"> {{ session()->get('error_email') }}</span>
                            @endif
                        </div>
                            
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Add Student</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
