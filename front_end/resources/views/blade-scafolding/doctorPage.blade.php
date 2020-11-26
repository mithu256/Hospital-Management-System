
@extends('blade-scafolding.layout.content')

@section('content')

<style type="text/css">
  body {
    background-image:url('<?php echo url('/'); ?>/images/background/docpage.jpg');
  }

</style>
<div id="docpage" class="container">
    <div class="right">
        <a href="/addPrscptn"><button class="btn btn right">Prescription</button></a>
        <button type="button" data-toggle="modal" data-target="#exampleModalCenter" class="btn btn right">My Details</button>
    </div>

    <div class="text-center" style="padding-top: 100px;"><h1>Working Period</h1></div>
        <div class="container" class="text-center">
            <div class="table-responsive" style="margin-top: 10px;">
                <table id="doctor_data" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th width="30%">Date</th>
                            <th width="30%">Time</th>
                            <th width="20%">No of Appoinments</th>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </thead>
                 </table>
            </div>
        </div>
    </div>
        
    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h2 class="text-center" class="modal-title" id="exampleModalLongTitle">My Details</h2>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
                <div class="">
                    <label for="username" class="text-info">Name:</label>
                    <a class="" href=""></a>
                </div>
                <div class="">
                    <label for="username" class="text-info">Address:</label>
                    <a class="" href=""></a>
                </div>
                <div class="">
                    <label for="username" class="text-info">Specialization:</label>
                    <a class="" href=""></a>
                </div>
                <div class="">
                    <label for="username" class="text-info">ID:</label>
                    <a class="" href=""></a>
                </div>
              </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>

    
</div>

@endsection

<script src='https://code.jquery.com/jquery-3.3.1.slim.min.js'></script>
<!-- Popper JS -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js'></script>
<!-- Bootstrap JS -->
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script> 

