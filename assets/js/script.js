// jQuery(document).ready(function ($) {
//     $('.melli_slider_carousel').slick({
//         infinite: true,
//         slidesToShow: 6,
//         slidesToScroll: 1,
//         swipeToSlide: true,
//         // autoplay: true,
//         autoplaySpeed: 5000,
//         speed:1000,
//         arrows: false,
//         prevArrow:"<button type='button' class='slick-prev pull-left'><i class='fa fa-angle-left' aria-hidden='true'></i></button>",
//         nextArrow:"<button type='button' class='slick-next pull-right'><i class='fa fa-angle-right' aria-hidden='true'></i></button>",

//         responsive: [{
//             breakpoint: 1200,
//             settings: {
//                 slidesToShow: 1,
//                 slidesToScroll: 1,
//                 // centerMode: true,

//             }

//         }, {
//             breakpoint: 992,
//             settings: {
//                 slidesToShow: 1,
//                 slidesToScroll: 1,

//                 infinite: true,

//             }


//         }, {
//             breakpoint: 768,
//             settings: {
//                 slidesToShow: 1,
//                 slidesToScroll: 1,
//                 infinite: true,

//             }
//         }, {
//             breakpoint: 480,
//             settings: {
//                 slidesToShow: 1,
//                 slidesToScroll: 1,
//                 infinite: true,
//                 autoplay: true,
//                 autoplaySpeed: 2000,
//             }
//         }]
//     });
// });

jQuery(document).ready(function($){
    
    const firstItemActiveClass = document.querySelector(".melli_slider_container .melli-single-pricing-cards");

    $(".melli_slider_container .flex-col .plan__type--premium").on("click", function(){
        alert('This is upcoming plan!')
    });
        
    if(firstItemActiveClass){
        firstItemActiveClass.classList.add("active");

        const melliProductId = $('.melli-single-pricing-cards').attr('data-id');
        const regularPrice = $('.melli-single-pricing-cards').attr('data-rprice');
        const salePrice = $('.melli-single-pricing-cards').attr('data-sprice');
        const savedPrice = $('.melli-single-pricing-cards').attr('data-savedprice');

        if('0' != salePrice ){
            $("#salePrice").html('$' + salePrice);
        }
        $("#regularPrice").html('$' +regularPrice);
        $("#youSaved").html('$' + savedPrice);

        $("#melliAddtoCart").attr('href', '?add-to-cart=' + melliProductId);
        $("#melliAddtoCart").attr('data-product_id', melliProductId);
    }
    
    $(".melli_slider_container .melli-single-pricing-cards").on("click", function(){
        $(".melli_slider_container .melli-single-pricing-cards.active").removeClass("active");
      

        const melliProductId = $(this).attr('data-id');
        const regularPrice = $(this).attr('data-rprice');
        const salePrice = $(this).attr('data-sprice');
        const savedPrice = $(this).attr('data-savedprice');

        $(this).addClass("active");

        // $("#salePrice").html('$' + salePrice);
//          $("#salePrice").html('$' + salePrice);
// 		$("#regularPrice").html('$' + regularPrice);
// 		$("#youSaved").html('$' + savedPrice);
		
        if('0' != salePrice ){
            $("#salePrice").html('$' + salePrice);
            $("#regularPrice").html('$' + regularPrice);
            $("#youSaved").html('$' + savedPrice);
        }else{
            $("#salePrice").html('$' + regularPrice);
            $("#regularPrice").html('');
            $("#youSaved").html('');
            $(".price__bottom").html(`<i class="fa fa-check"></i>You Saved <span id="youSaved">0</span>`);
        }

        // Buy now button fill with id
        $("#melliAddtoCart").attr('href', '?add-to-cart=' + melliProductId);
        $("#melliAddtoCart").attr('data-product_id', melliProductId);
    });

    // Plan type body is active class 
    $(".melli_slider_container .flex-col .plan__type").on("click", function(){
        $(".melli_slider_container .flex-col .plan__type.is-active").removeClass("is-active")

        $(this).addClass("is-active")
    });


    // Faqs 
    $(".question").on("click", function(){
        $(this).toggleClass("is-expanded")
    });

	
    $(".question .question__btn").on("click", function(){
        $(this).toggleClass("is-active");
		
    });

});