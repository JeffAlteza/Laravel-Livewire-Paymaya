
<div class="d-flex justify-content-center mt-5">
<form wire:submit.prevent="submit" class="card" style="width: 25rem;">
<div class="card-header">
    <h4>Register</h4>
    @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif
  </div>
    <div class="card-body">
    <div class="mb-3">
    <label for="fullname" class="form-label">Fullname</label>
    <input required type="text" class="form-control" id="fullname" placeholder="Enter fullname" wire:model="name">
    @error('name') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
    <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input required type="email" class="form-control" id="email" placeholder="Enter Email" wire:model="email">
    @error('email') <span class="text-danger">{{ $message }}</span> @enderror
    @if(session()->has('error_email'))
        <span class="text-danger"> {{ session()->get('error_email') }}</span>
    @endif
    </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input required type="password" class="form-control" id="password" placeholder="***************" wire:model="password">
    @error('password') <span class="text-danger">{{ $message }}</span> @enderror
  </div>
  </div>
  <div class="card-footer text-end">
    <button type="button" class="btn btn-primary" wire:click.prevent = "back">Back </button>
    <button type="submit" class="btn btn-primary ">Submit</button>
  </div>
</form>
</div>
