var $ = jQuery;

$(document).ready(function(){

	$("#sortable").sortable();
/*
  // comman Accordion Js
  $(".ewmac-accordion-div > a").on("click", function() {
      if ($(this).hasClass("active")) {
        $(this).removeClass("active");
        $(this).siblings(".ewmac-content").slideUp(200);
        $('.ewmac-accordion-div .ewmac-accordion-sign').removeClass("opened").addClass("closed");
      } else {
       $('.ewmac-accordion-div .ewmac-accordion-sign').removeClass("opened").addClass("closed");
       $(this).find(".ewmac-accordion-sign").removeClass("closed").addClass("opened");
        $(".ewmac-accordion-div > a").removeClass("active");
        $(this).addClass("active");
        $(".ewmac-content").slideUp(200);
        $(this).siblings(".ewmac-content").slideDown(200);
      }
  });
*/
}); 


(function( $ ) {

    $.support.touch = typeof Touch === 'object';

    if (!$.support.touch) {
        return;
    }

    var proto =  $.ui.mouse.prototype,
    _mouseInit = proto._mouseInit;

    $.extend( proto, {
        _mouseInit: function() {
            this.element
            .bind( "touchstart." + this.widgetName, $.proxy( this, "_touchStart" ) );
            _mouseInit.apply( this, arguments );
        },

        _touchStart: function( event ) {
            if ( event.originalEvent.targetTouches.length != 1 ) {
                return false;
            }

            this.element
            .bind( "touchmove." + this.widgetName, $.proxy( this, "_touchMove" ) )
            .bind( "touchend." + this.widgetName, $.proxy( this, "_touchEnd" ) );

            this._modifyEvent( event );

            $( document ).trigger($.Event("mouseup")); //reset mouseHandled flag in ui.mouse
            this._mouseDown( event );

            return false;           
        },

        _touchMove: function( event ) {
            this._modifyEvent( event );
            this._mouseMove( event );   
        },

        _touchEnd: function( event ) {
            this.element
            .unbind( "touchmove." + this.widgetName )
            .unbind( "touchend." + this.widgetName );
            this._mouseUp( event ); 
        },

        _modifyEvent: function( event ) {
            event.which = 1;
            var target = event.originalEvent.targetTouches[0];
            event.pageX = target.clientX;
            event.pageY = target.clientY;
        }

    });

})( jQuery );