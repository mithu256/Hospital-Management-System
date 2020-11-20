@extends('blade-scafolding.layout.master')

@section('content1')

<div id="home" class="form" style="background-image:url('<?php echo url('/'); ?>/images/slider-bg1.png">
        <div class="container">
            <div id="home-row" class="row justify-content-center align-items-center">
                <div id="home-column" class="col-md-6">
                    <div id="home-box" class="col-md-12">
                        <form id="home-form" class="form" action="/Specialization" method="post" style="margin-top: 100px;">

                            {{csrf_field()}}

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

                            <div class="form-group clearfix" style="margin-top: 30px; margin-bottom: 20px;">
                                <!-- <input type="submit" class="button" name=""> -->
                                <button type="submit" id="ajax-submit">SEARCH</button>
                            </div>
                            
                        </form>
                        <div class="table-responsive" style=" margin-top: 300px;">
                            <table id="doctor_data" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th width="60%">Doctor name</th>
                                        <th width="20%">Time</th>
                                        <th width="20%">Date</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                       <!--  <div class="alert alert-success" style="display: none;"></div>
                        <div id="bookcontent"></div> -->
                    </div>
                </div>
            </div>
        </div>
</div>

@endsection  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- 
<script type="text/javascript" language="javascript">
    
    $(document).ready(function(){
        fill_database();
        function fill_database(filter_special = '', filter_date = '')
        {
            var dataTable = $('#doctor_data').DataTable({
                "processing" : true,
                "serverSide" : true,
                "order" : [],
                "searching" : false,
                "ajax" : {
                    url:"fetch.php",
                    type:"POST",
                    data:{
                        filter_special:filter_special, filter_date:filter_date
                    }
                }
            });
        }

        $('#filter').click(function(){
           var filter_special = $('#filter_special').val();
           var filter_date = $('#filter_date').val();
           if(filter_special != '' && filter_date != '')
           {
            $('#customer_data').DataTable().destroy();
            fill_datatable(filter_special, filter_date);
           }
           else
           {
            alert('Select Both filter option');
            $('#customer_data').DataTable().destroy();
            fill_datatable();
           }
          });

    });

</script> -->
