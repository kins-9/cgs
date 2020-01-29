
   @extends('layouts.appl')
   {{-- @section('title')
       ADMIN DASHBOARD | CGS
   @endsection --}}
   @section('content')

  <div id="page-inner">
                <div class="row">
                    <div class="col-lg-12">
                     <h2>ADMIN DASHBOARD</h2>
                    </div>
                </div>
                 <!-- /. ROW  -->
                  <hr />
                <div class="row">
                    <div class="col-lg-12 ">
                        <div class="alert alert-info">
                             <strong>Welcome {{ Auth::user()->name }}! </strong> You Have No pending Task For Today.
                        </div>

                    </div>
                                      
                    </div>
                  <!-- /. ROW  -->
                   <div class="row">
                    <div class="col-lg-3 ">
                        <div class="alert alert-info">
                             <strong>Welcome {{ Auth::user()->name }}! </strong> You Have No pending Task For Today.
                        </div>

                    </div>
                    <div class="col-lg-3 ">
                        <div class="alert alert-info">
                             <strong>Welcome {{ Auth::user()->name }}! </strong> You Have No pending Task For Today.
                        </div>

                    </div>
                    <div class="col-lg-6 ">
                        <div class="alert alert-info">
                             <strong>Welcome {{ Auth::user()->name }}! </strong> You Have No pending Task For Today.
                        </div>

                    </div>
                                      
                    </div>
                  <!-- /. ROW  -->
   
             <!-- /. PAGE INNER  -->
            </div>
@endsection

