/*global $*/
/*Table Content
==========================
    # Nice Scroll    
  
*/

/* client slider
===============================*/
$(document).ready(function () {
    
    "use strict";
    $("#courses").owlCarousel({
        loop: true,
        nav: true,
        navigationText: ["<i class='fa fa-angle-right'></i>", "<i class='fa fa-angle-left'></i>"],
        items : 4,
        itemsDesktop : [1000, 4],
        itemsDesktopSmall : [900, 2],
        itemsTablet: [600, 2],
        itemsMobile : [480, 1],
        navigation : true,
        pagination : false
    });
    $("#lecturers").owlCarousel({
        loop: true,
        nav: true,
        navigationText: ["<i class='fa fa-angle-right'></i>", "<i class='fa fa-angle-left'></i>"],
        items : 5,
        itemsDesktop : [1000, 4],
        itemsDesktopSmall : [900, 3],
        itemsTablet: [600, 2],
        itemsMobile : [480, 1],
        navigation : true,
        pagination : false
    });
    $("#blogs").owlCarousel({
        loop: true,
        nav: true,
        navigationText: ["<i class='fa fa-angle-right'></i>", "<i class='fa fa-angle-left'></i>"],
        items :4,
        itemsDesktop : [1000, 4],
        itemsDesktopSmall : [900, 2],
        itemsTablet: [600, 2],
        itemsMobile : [480, 1],
        navigation : true,
        pagination : false
    });
     $("#clients").owlCarousel({
        loop: true,
        nav: false,
        navigationText: ["<i class='fa fa-angle-right'></i>", "<i class='fa fa-angle-left'></i>"],
        items :2,
        itemsDesktop : [1000, 2],
        itemsDesktopSmall : [900, 2],
        itemsTablet: [600, 2],
        itemsMobile : [480, 1],
        navigation :false,
        pagination :true
    });

    $('[data-toggle="tooltip"]').tooltip(); 

});

/*Lighbox text
=========================*/
$(document).ready(function () {
    "use strict";
    $('.popup-text').magnificPopup({
        removalDelay: 500,
        closeBtnInside: true,
        callbacks: {
            beforeOpen: function () {
                this.st.mainClass = this.st.el.attr('data-effect');
            }
        },
        midClick: true
    });
});

/*Menu Toggle
============================*/
$(document).ready(function () {
    
    "use strict";
    
    function menuContToggle() {
        
        var menuItem = $("ul.navbar-nav > li.submenu > a");
        
        if (($(window).width()) < 992) {
            
            $(menuItem).next().css("display", "none");
            
            $(menuItem).click(function (e) {
                
                e.preventDefault();
                
                $(this).next().slideToggle(500);
                
            });
        } else {
            
            $(menuItem).next().css("display", "block");
            
        }
        
    }
    
    menuContToggle();
    
    $(window).on('resize', function () {
        
        menuContToggle();
        
	});
    
	});
    
/* Mix It Up
=============================*/
$(document).ready(function () {
    "use strict";
    $('.lecturers-fliter-items').mixItUp();
    
});

/* Timer Counter
===============================*/
var v_count = '0';
    
$(window).scroll(function () {
    
    'use strict';
    
    $('.timer').each(function () {

        var imagePos = $(this).offset().top,

            topOfWindow = $(window).scrollTop();

        if (imagePos < topOfWindow + 500 && v_count === '0') {

            $(function ($) {
                
                function count(options) {
                      
                    v_count = '1';
                    options = $.extend({}, options || {}, $(this).data('countToOptions') || {});
                    $(this).countTo(options);
                }
                
                // start all the timers
                $('.timer').each(count);
            });
        }
    });
    
});

var $star_rating = $(".star-rating .fa"),
    SetRatingStar = function() {
        return $star_rating.each(function() {
            return parseInt($star_rating.siblings("input.rating-value").val()) >= parseInt($(this).data("rating")) ? $(this).addClass("colorstar") : 0 == $(this).data("rating") ? $(".return-rate").removeClass("colorstar") : $(this).removeClass("colorstar")
        })
    };
$star_rating.on("click", function() {
    return $star_rating.siblings("input.rating-value").val($(this).data("rating")), $("#starn").text("5/" + $(this).data("rating")), $(this).data("rating") > 2 ? ($("#starn").removeClass("bg-red").addClass("bg-green"), $(".star-rating").removeClass("bg-red").addClass("bg-green")) : ($("#starn").removeClass("bg-green").addClass("bg-red"), $(".star-rating").removeClass("bg-green").addClass("bg-red")), SetRatingStar()
}), SetRatingStar();



    /***************************************************************************
     * login instractor 
     **************************************************************************/
 
     $('.loginBTN').click(function(){
        
            var form= $(this).closest('form')
           var action =form.attr('action');

        $.ajax({
            url: action,
            type:'POST',
            data:form.serialize(),
            success:function(data)
            {
                toastr.error(data.msg, 'Inconceivable!');
            }

        });
    })


    /***************************************************************************
     * register instractor 
     **************************************************************************/
 
     $('.registerLoginBTN').click(function(){

            var form= $(this).closest('form')
           var action =form.attr('action');

        $.ajax({
            url: action,
            type:'POST',
            data:form.serialize(),
            success:function(data)
            {
                if(data.status=='error')
                {
                 $('.msg').addClass('alert alert-danger');
                }else{
                 $('.msg').addClass('alert alert-success');
                 location.reload();
                }
                

                
                $('.msg').html(data.msg);
               

            }

        });
    })
     /***************************************************************************
      * join course 
      **************************************************************************/

      toastr.options = {
        "closeButton": false,
        "debug": false,
        "newestOnTop": false,
        "progressBar": false,
        "positionClass": "toast-bottom-full-width",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
      }

      $('.joinCourse').click(function(){            
        var action =$(this).attr('data-action');

         $.ajax({
             url: action,
             type:'GET',
             success:function(data)
             {
                 if(data.status=='error')
                 {
                  toastr.error(data.msg);

                 }else{

                  toastr.success(data.msg);
                 }                

             }

         });
     });

     /***************************************************************************
      * add comment
      **************************************************************************/

       $('.addComment').click(function(){    
          var form= $(this).closest('form')        
         var action =form.attr('action');

          $.ajax({
              url: action,
              type:'POST',
              data:form.serialize(),
              success:function(data)
              {
                  if(data.status=='error')
                  {
                   toastr.error(data.msg);

                  }else{

                   toastr.success(data.msg);
                  }                

              }

          });
      });
     