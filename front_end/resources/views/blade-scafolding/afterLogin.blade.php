
@extends('blade-scafolding.layout.content')

@section('content')
<style type="text/css">
  body {
    background-image:url('<?php echo url('/'); ?>/images/background/appo.jpg');
  }
</style>
<div class="right-header" style="margin-right: 50px;">
    <button>My Records</button>
</div>
<div id="home" class="form">
        <div class="container">
            <div id="home-row" class="row justify-content-center align-items-center">
                <div id="home-column" class="col-md-6">
                    <div id="home-box" class="col-md-12">
                        <form id="home-form" class="form" action="/specialization" method="post">
                            <div class="form-group">
                                <label for="" class="text-info" style="color: white;">Specialization:</label><br>
                                <select id="inputState" class="form-control">
                                    <option selected>any</option>
                                    <option> </option>
                                    <option> </option>
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <label for="date" class="date-info" style="color: white;">Date:</label><br>
                                <input type="date" name="date" id="date" class="form-control">
                            </div>

                            <div class="form-group clearfix" style="margin-top: 30px; margin-bottom: 20px;">
                                <button type="submit" class="button pull-right m-t-10" href="/booking" id="search" />SEARCH</button>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    
</div>

@endsection 

<div class="btn-group-toggle" data-toggle="buttons">
  <label class="btn btn-secondary active">
    <input type="checkbox" checked autocomplete="off"> Checked
  </label>
</div>