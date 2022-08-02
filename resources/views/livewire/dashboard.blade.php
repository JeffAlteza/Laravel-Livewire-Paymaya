<div>
<div class="content mt-5 pt-2">
        <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                  <div class="card-icon">
                  <i class="fa-solid fa-calendar-day"></i>
                  </div>
                  <p class="card-category">Today's Collection</p>
                  <h3  class="card-title"><small>₱</small>{{$today_total}}
                    <small></small>
                  </h3>
                </div>
                <div class="card-footer">
                <i class="icon fa-solid fa-calendar-day"></i>
                  <div class="stats" >
                 
                    {{$today}}
                  </div>

                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                  <i class="fa-solid fa-calendar-days"></i>
                  </div>
                  <p class="card-category">Monthly Collection</p>
                  <h3 class="card-title"><small>₱</small>{{$month_total}}</h3>
                </div>
                
                <div class="card-footer">
                <i class="icon fa-solid fa-calendar-days"></i>
                  <div class="stats">
                    
                  {{$month}}
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-info card-header-icon">
                  <div class="card-icon">
                  <i class="fa-solid fa-sack-dollar"></i>
                  </div>
                  <p class="card-category">Annual Collection</p>
                  <h3 class="card-title"><small>₱</small>{{$year_total}}</h3>
                </div>
                <div class="card-footer">
                <i class="icon fa-solid fa-sack-dollar"></i>
                  <div class="stats">
                  {{$year}}
                  </div>
                </div>
              </div>
            </div>



          </div>

</div>
