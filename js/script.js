// event pada saat di link
$('.nav-link').on('click',function(){

	//ambil isi href
	var tujuan = $(this).attr('href');
	// tangkap elemen ybs
	var elemenTujuan = $(tujuan);
	console.log(elemenTujuan.offset().top);

});

// function setParallaxPosition($doc, multiplier, $object){
//         var offset = getOffSet();
//         var from_top = $doc.scrollTop(),
//           bg_css = 'center ' +(multiplier * from_top - offset) + 'px';
//         $object.css({"background-position" : bg_css });
//       }

//   Parallax function
         
//       var background_image_parallax = function($object, multiplier, forceSet){
//         multiplier = typeof multiplier !== 'undefined' ? multiplier : 0.5;
//         multiplier = 1 - multiplier;
//         var $doc = $(document);
//         // $object.css({"background-attatchment" : "fixed"});

//         if(forceSet) {
//           setParallaxPosition($doc, multiplier, $object);
//         } else {
//           $(window).scroll(function(){          
//             setParallaxPosition($doc, multiplier, $object);
//           });
//         }
//       };



$(window).scroll(function () {
    var wScroll = $(this).scrollTop();

    $('.carousel-inner img').css ({
        'transform' : 'translate(0px, '+ wScroll/4 +'%)'


    });

    $('.carousel-inner h1').css ({
        'transform' : 'translate(0px, '+ wScroll/2 +'%)'


    });

    $('.carousel-inner p').css ({
        'transform' : 'translate(0px, '+ wScroll/1.2 +'%)'


    });

    //nama-dokter
    if (wScroll > $('.nama-dokter') .offset(). top -250 ) {
        $('.nama-dokter .thumbnail').addClass('muncul');
    }
});

// search


  // function itsfunction() {
  //   var input, filter, ul, li, a, i, txtValue;
  //   input = document.getElementById('search');
  //   filter = input.value.toUpperCase();
  //   ul = document.getElementById('nama');
  //   li = ul.getElementsByTagName('li');

  //   for(i = 0; i < li.length; i++) {
  //     a = li[i].getElementsByTagName("a")[0];
  //     txtValue = a.textContent || a.innerText;
  //     if (txtValue.toUpperCase().indexOf(filter) > -1) {
  //       li[i].style.display = "";
  //     }else{
  //       li[i].style.display = "none";
  //     }
  //   }
  // }


// scroll

$(window).scroll(function() {    

    var scroll = $(window).scrollTop();

    if (scroll >= 200) {
        $(".navbar").addClass("scroll");
    } else {
        $(".navbar").removeClass("scroll")    
    }
});

// animals

// function setPagination() {
    
//         var SettingsPagesOnItems = function(){
//             var itemsLength = $container.children(itemSelector).length;
//             var pages = Math.ceil(itemsLength / itemsPerPage);
//             var item = 1;
//             var page = 1;
//             var selector = itemSelector;
//             var exclusives = [];
                
//                 if(currentFilter != '*') {
//                     exclusives.push(selector + '.' + currentFilter);
//                 }                

                // smash all values back together for 'and' filtering
                // filterValue = exclusives.length ? exclusives.join('') : '*';
                
                // find each child element with current filter values
                // $container.children(filterValue).each(function(){
                    // increment page if a new one is needed
                    // if( item > itemsPerPage ) {
                    //     page++;
                    //     item = 1;
                    // }
                    // add page number to element as a class
                    // wordPage = page.toString();
                    
                    // var classes = $(this).attr('class').split(' ');
                    // var lastClass = classes[classes.length-1];
                    // // last class shorter than 4 will be a page number, if so, grab and replace
                    // if(lastClass.length < 4){
                    //     $(this).removeClass();
                    //     classes.pop();
                    //     classes.push(wordPage);
                    //     classes = classes.join(' ');
                    //     $(this).addClass(classes);
                    // } else {
                        // if there was no page number, add it
        //                $(this).addClass(wordPage); 
        //             }
        //             item++;
        //         });
        //     currentNumberPages = page;
        // }();



//pagenation
// var table = $('#paging').DataTable();
 
// $('#pageNext').on( 'click', function () {
//     table.page( 'next' ).draw( 'page' );
// } );
 
// $('#pagePrevious').on( 'click', function () {
//     table.page( 'previous' ).draw( 'page' );
// } );

     