@extends('layouts.index')

@section('content')
<div class="panel panel-primary">
  <div class="panel-heading p15 black font">
    <div class="panel-title">
      <h3>HASIL LENGKAP TOGEL SINGAPORE</h3>
    </div>
  </div>
  <div class="panel-body">
		<div style="width:330px; height:373px; left:60px; overflow:hidden;position:relative; margin-bottom:10px; float:left;">
          	<iframe scrolling="no" src="http://livesgp.net/4d" style="border: 0px none; margin-left: -13px; width: 355px; height: 778px;"></iframe>
        </div>
        <div style="width:330px; height:373px; right:60px; overflow:hidden;position:relative; margin-bottom:10px; float:right;">
          <iframe scrolling="no" src="http://livesgp.net/toto/" style="border: 0px none; width: 707px; height: 737px; margin-left: -190px;"></iframe>
        </div>
    </div>
</div>

@endsection

@section('numbergenerator')
              <div class="panel panel-default" style="margin-top:15px;">
                <div class="panel-heading pink">
                  <h3 class="panel-title white">NUMBER GENERATOR</h3>
                </div>
                <div class="panel-body p15">
                  <p class="helvetica" style="text-align:center;">Generate your numbers</p>
                  <br>
                  <a title="Lottery Results - Lotto" class="button-blue"><button style="border:none; background:transparent;">Generate Numbers</button></a><br><br>
                  <div class="group">
                    <div class="reel"></div>
                    <div class="reel"></div>
                    <div class="reel"></div>
                    <div class="reel"></div>
                  </div>
                </div>
              </div>
@endsection
