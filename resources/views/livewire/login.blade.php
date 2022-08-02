
<div class="d-flex justify-content-center  mt-5 ">
<form wire:submit.prevent="submit" class="card" style="width: 25rem;">
<div class="card-header">
    <h4>Login</h4>
    
  </div>
    <div class="card-body ">
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
  
  @if(session()->has('error'))
        <span class="text-danger">{{ session()->get('error') }}</span>
  @elseif (session()->has('success'))
        <span class="text-success">{{ session()->get('success') }}</span>
  @endif
</div>
<!-- button to go to register page -->

<label for="email" class="form-label">Not yet Registered? <a href="register"> CLick Here </a></label>
<label for="email" class="form-label"> <a href="/forgot-password"> Forgot Password? </a></label>
  </div>
  <div class="card-footer text-end">

    <button type="submit" class="btn btn-primary ">Login</button>
  </div>
</form>
</div>

