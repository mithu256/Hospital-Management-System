@extends('blade-scafolding.layout.master')

@section('content1')

<div id="home" class="form" style="background-image:url('<?php echo url('/'); ?>/images/slider-bg1.png">
        <div class="container">
            <div id="home-row" class="row justify-content-center align-items-center">

                <div id="home-column" class="col-md-6">
                    <div id="home-box" class="col-md-12">
                        <form id="home-form" class="form" method="post" style="margin-top: 100px;">

                            <div class="form-group">
                                <label for="" class="text-info">Specialization:</label><br>
                                <select id="inputState" class="form-control">
                                    <option selected>any</option>
                                    <option> </option>
                                    <option> </option>
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <label for="date" class="date-info">Date:</label><br>
                                <input type="date" name="date" id="date" class="form-control">
                            </div>
                            
                        </form>

                            <div id="home-button">
                                <!-- <input type="submit" class="button" name=""> -->
                                <button class="btn btn-left" type="submit" data-toggle="modal" data-target="#exampleModalCenter">SEARCH</button>
                            </div>
                    </div>
                </div>

            </div>
            <!-- Modal -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h2 class="text-center" class="modal-title" id="exampleModalLongTitle">Choose Your Doctor</h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                        <div id="table" class="table-responsive">
                            <table id="doctor_data" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th width="60%">Doctor name</th>
                                        <th width="20%">Time</th>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td><button class="btn print">book</button></td>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </div>
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
