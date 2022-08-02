<div>
<div class="logo-container">
    <div class="logo-name">
        <img src="images\livewire.png" alt="">
        <div class="name">LIVEWIRE</div>
    </div>
    <div class="menu-icon">
      <!-- <button type="button" id="toggleBtn">
      <svg xmlns="http://www.w3.org/2000/svg" 
      xmlns:xlink="http://www.w3.org/1999/xlink" 
      version="1.1" width="24" height="24" viewBox="0 0 24 24"><path d="M3,6H21V8H3V6M3,11H21V13H3V11M3,16H21V18H3V16Z" /></svg>
    </button> -->
    </div>
  </div>
  
  <div class="menu-container">
  <ul class="menu-list">
    <li>
      <a href="{{ url('/dashboard') }}">
      <i class="fa-solid fa-gauge"></i>
        <span class="menu">Dashboard</span>
        <span class="tooltip active">Dashboard</span>
      </a>
    </li>
    <li>
      <a href="{{ url('/main') }}">
        <i class="fa-solid fa-users"></i>
        <span class="menu">Students</span>
        <span class="tooltip active">Students</span>
      </a>
    </li>
    <li>
      <a href="{{ url('/payment_history') }}">
        <i class="fa-solid fa-credit-card"></i>
        <span class="menu">Payment History</span>
        <span class="tooltip active">Payment History</span>
      </a>
    </li>

  </ul>
</div>

<div class="user-container">
  <div class="user-info">
  <i class="fa-solid fa-user"></i>
    <div class="user-name">
      <span class="user">{{Auth::user()->name}}</span>
      <!-- <span class="role">Administrator</span> -->
  </div>
</div>
<div class="logout-icon" >
<button wire:click="logout" type="button">
<i  class="fa-solid fa-right-from-bracket"></i>
</button>

</div>

</div>

</div>

