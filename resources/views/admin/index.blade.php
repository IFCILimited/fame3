
   <!-- Nav Bar Ends here -->
   @extends('layouts.admin.master')
   @section('title')
   Admin - Dashboard
@endsection

@push('styles')
  
@endpush
@section('content')
<div class="page-body">
  <div class="container-fluid">
    <div class="page-title">
      <div class="row">
        <div class="col-6">
          <h4>Default</h4>
        </div>
        <div class="col-6"> 
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">                                       
                <svg class="stroke-icon">
                  <use href="admin/svg/icon-sprite.svg#stroke-home"></use>
                </svg></a></li>
            <li class="breadcrumb-item">Dashboard</li>
            <li class="breadcrumb-item active">Default</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <!-- Container-fluid starts-->
  <div class="container-fluid"> 
    <div class="row size-column">
    </div>
  </div>
  <!-- Container-fluid Ends-->
</div>
@endsection