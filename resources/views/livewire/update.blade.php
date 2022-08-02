    <!-- Modal -->
    <div wire:ignore.self class="modal fade" id="updateStudentModals" tabindex="-1" data-backdrop="static" data-keyboard="false" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Update Student</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                </div>
                <div class="modal-body">
                    <form wire:submit.prevent="update_student">
                    <div class="form-group mb-2">
                                <input type="hidden" id="ids" placeholder="Enter id" class="form-control" wire:model="ids">
                        </div>
                        <div class="form-group mb-2">
                            <label for="name" >Name</label>
                                <input type="text" id="name" placeholder="Enter Fullname" class="form-control" wire:model="name" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="email">Email</label>
                                <input type="email" id="email" placeholder="Enter Email" class="form-control" wire:model="email" required>
                            @if(session()->has('error_email'))
                                <div class="alert alert-danger mt-3">
                                    {{ session()->get('error_email') }}
                                </div>
                        
                            @endif
                        </div>
                      
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- <div wire:ignore.self class="modal fade" id="successUpdate" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Success</h5>
            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="swal2-icon swal2-success swal2-animate-success-icon" style="display: flex;">
              <div class="swal2-success-circular-line-left" style="background-color: rgb(255, 255, 255);"></div>
              <span class="swal2-success-line-tip"></span>
              <span class="swal2-success-line-long"></span>
              <div class="swal2-success-ring"></div>
              <div class="swal2-success-fix" style="background-color: rgb(255, 255, 255);"></div>
              <div class="swal2-success-circular-line-right" style="background-color: rgb(255, 255, 255);"></div>
            </div>
            <h5>
              <center>Record Updated successfully!</center>
              </h5>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div> -->