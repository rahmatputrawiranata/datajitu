@extends('layouts.index')

@section('content')


              <div class="panel panel-primary">
                <div class="panel-heading p15 black font">
                  <div class="panel-title">
                    <h3>HASIL KELUARAN TOGEL HONGKONG</h3>
                  </div>
                </div>

                <div class="panel-body">
                @foreach ($sorted->slice(0, 5) as $hongkong)
                <?php

                    $satu = substr("$hongkong->number",0,1);
                    $dua = substr("$hongkong->number",1,1);
                    $tiga = substr("$hongkong->number",2,1);
                    $empat = substr("$hongkong->number",3,1);
                 ?>
                  <div class="col-xs-12" style="margin-top:15px;">
              <h3 class="josefin">TOGEL HONGKONG</h3>
              <div class="resultBox shorter centred hidden-sm hidden-xs">
                <div class="sideHeader thunderball">
                  <div class="col-xs-5">
                    <img width="100%" src="images/hk.png">
                  </div>
                  <div class="col-xs-7">
                    
                    <h3 style="color: #FFF;"><span class="smallerHeading">Hasil Keluaran </span><br>{{ $hongkong->hari }} <br><span class="smallerHeading">{{ Carbon\Carbon::parse($hongkong->tanggal)->format('d-m-Y') }}</span></h3>
                  </div>
                </div><!-- sideheader -->
                <div style=" padding: 12px 2px 0 0;" class="floatRight centred">
                  <div class="result medium thunderball-ball"><?php  echo $satu; ?></div>
                  <div class="result medium thunderball-ball"><?php  echo $dua; ?></div>
                  <div class="result medium thunderball-ball"><?php  echo $tiga; ?></div>
                  <div class="result medium thunderball-ball"><?php  echo $empat; ?></div>
             
                  <br><br>
          
                  <a class="button-blue" title="Lottery Results - Lotto" href="{{ url('/hasilhongkong') }}">Hasil Lengkap</a>
                </div>
              </div>
              <div class="resultBox shorter centred visible-xs visible-sm" style="width: 100%;">
                <div class="sideHeader thunderball" style="height: 150px; width: 100%; padding-top:0px; padding-bottom: 0px;">
                  <div class="col-xs-12">
                    
                    <h3 style="color: #FFF;"><span class="smallerHeading">{{ $hongkong->hari }}</span> <br><span class="smallerHeading">{{ $hongkong->tanggal }}</span></h3>
                  </div>
                  <div class="result medium thunderball-ball"><?php  echo $satu; ?></div>
                  <div class="result medium thunderball-ball"><?php  echo $dua; ?></div>
                  <div class="result medium thunderball-ball"><?php  echo $tiga; ?></div>
                  <div class="result medium thunderball-ball"><?php  echo $empat; ?></div>
                  <a class="button-blue-mobile" title="Lottery Results - Lotto" href="{{ url('/hasilhongkong') }}">Hasil Lengkap</a>
                </div><!-- sideheader -->
                <br><br>
</div><!-- end resultbox -->
            </div><!-- end col-xs-12 -->
            @endforeach

            




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
