@extends('blade-scafolding.layout.content')

@section('content')

<style type="text/css">
  body {
    background-image:url('<?php echo url('/'); ?>/images/background/book1.jpg');
    
  }
</style>
<div id="booking" class="form" >
	
	<h3 class="text-center text-white pt-5">Welcome Back!</h3>
    <div class="container">

    	<div id="book-row" class="row justify-content-center align-items-center">
            <div id="book-column" class="col-md-6">

                <div id="book-box" class="col-md-12">
                    <form id="book-form" class="form" action="" method="post">

                    	<div id="box" class="form-group">
                                <label for="date" class="date-info">Date:</label>
                                <a class="" href="">ssssssssssssssssssssss</a>
                            </div>
                            <div class="form-group">
                                <label for="date" class="date-info">Doctor Name:</label>
                                <a class="" href="">hfjdjjccj</a>
                            </div>

                            <div class="form-group clearfix" style="margin-top: 10px; margin-bottom: 20px;">
                                <button type="submit" class="btn btn-md btn info pull-right m-t-10" onclick="booking" id="search" />Book Now</button>
                            </div>

                    </form>
                </div>

            </div>
            <div id="book-column" class="col-md-6">

                <div id="book-box" class="col-md-12">
                    <form id="book-form" class="form" action="" method="post">

                    	<div id="box" class="form-group">
                                <label for="date" class="date-info">Date:</label>
                                <a class="" href="">ssssssssssssssssssssss</a>
                            </div>
                            <div class="form-group">
                                <label for="date" class="date-info">Doctor Name:</label>
                                <a class="" href="">hfjdjjccj</a>
                            </div>

                            <div class="form-group clearfix" style="margin-top: 10px; margin-bottom: 20px;">
                                <button type="submit" class="btn btn-md btn info pull-right m-t-10" onclick="booking" id="search" />Book Now</button>
                            </div>

                    </form>
                </div>

            </div>
        </div>

    </div>
</div>

@endsection