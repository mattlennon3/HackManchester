<div class="bs-example">
    <div class="panel-group" id="accordion">
        <div class="panel panel-default">





            @foreach($challenges as $chal)
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">{{ $chal->Email }}</a>
                </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse in">
                <div class="panel-body">
                    <p>HTML stands for HyperText Markup Language. HTML is the main markup language for describing the structure of Web pages. <a href="http://www.tutorialrepublic.com/html-tutorial/" target="_blank">Learn more.</a></p>
                </div>
            </div>
            @endforeach
        </div>

        
    </div>
</div>

{!! HTML::script('js/byyou.js') !!}