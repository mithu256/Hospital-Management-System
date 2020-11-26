
@extends('blade-scafolding.layout.content')

@section('content')

<style type="text/css">
  body {
    background-image:url('<?php echo url('/'); ?>/images/background/patHistory.jpg');
  }

</style>
<div id="patHistory" class="container">

    <div class="text-center" style="padding-top: 20px;"><h1>My Records</h1></div>
    @include('blade-scafolding.tableLayer.patientHistryTable')
</div>
    
</div>

@endsection
