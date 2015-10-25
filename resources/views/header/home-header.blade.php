<style type="text/css">
    .jumbotron {
        background-color:#8AC007;
    }
    
    .createChallengeButton{
        background-color:#255987;
    }
    .initial, .connect{
        text-align:center;
    }
    
    .initial, .connect, .createTemplate, .nominateFriend, .selectCharity{
        color:#fff;
        min-height:400px;
    }
    
    .connect{
        width:100%;
    }
    
    .connect{
        align-content:center;
    }
    
    #fbButton{
        margin-left: auto !important;
        margin-right:auto !important;
        witdth:100px;
    }
    
    #connectFB{
        padding-top:150px;
    }
</style>
<div class="container-fluid">
  <div class="jumbotron">
      <div class="initial">
        @include('header.initial')
      </div>
      <div class="connect">
          @include('header.connect-social')
      </div>
      <div class="createTemplate">
          @include('header.create-challenge')
      </div>
      <div class="nominateFriend">
          @include('header.nominate-friend')
      </div>
      <div class="selectCharity">
          @include('header.select-charity')
      </div>
  </div>
</div>

{{-- Need to wrap in bootstap carousel --}}

{{-- @include('header.connect');

@include('header.create-challenge');

@include('header.nominate-friend');

@include('header.select-charity');--}}
