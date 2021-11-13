@extends("core")
@section('title', $title.' - CodeBuilder, Inc.')
@section('description', $description)


@section("content")

    {!! $html !!}

    @if($ajax)
        <script type="text/javascript">
            document.title = "{{$title}} - CodeBuilder, Inc.";
			
            //Scroll totop
            //-----------------------------------------------
            $(window).scroll(function() {
                if($(this).scrollTop() != 0) {
                    $(".scrollToTop").fadeIn();
                } else {
                    $(".scrollToTop").fadeOut();
                }
            });
    
            $(".scrollToTop").click(function() {
                $("body,html").animate({scrollTop:0},800);
            });
            
            
            // Animations
            //-----------------------------------------------
            if ($("[data-animation-effect]").length>0) {
                $("[data-animation-effect]").each(function() {
                    if(Modernizr.csstransitions) {
                        var waypoints = $(this).waypoint(function(direction) {
                            var appearDelay = $(this.element).attr("data-effect-delay"),
                            animatedObject = $(this.element);
                            setTimeout(function() {
                                animatedObject.addClass('animated object-visible ' + animatedObject.attr("data-animation-effect"));
                            }, appearDelay);
                            this.destroy();
                        },{
                            offset: '95%'
                        });
                    } else {
                        $(this).addClass('object-visible');
                    }
                });
            };
    
            // Text Rotators
            //-----------------------------------------------
            if ($(".text-rotator").length>0) {
                $(".text-rotator").each(function() {
                    var tr_animationEffect = $(this).attr("data-rotator-animation-effect");
                    $(this).Morphext({
                        animation: ""+tr_animationEffect+"", // Overrides default "bounceIn"
                        separator: ",", // Overrides default ","
                        speed: 3000 // Overrides default 2000
                    });
                });
            };
            
            $(document).ready(function() {
            });
            
            $(document).ready(function(){
                $('[data-toggle="tooltip"]').tooltip();
            });
        </script>
    @endif
		
	
    @push("scripts")
        <script type="text/javascript">
            $(document).ready(function(){
                $('[data-toggle="tooltip"]').tooltip();
            });
        </script>
    @endpush

			
@endsection