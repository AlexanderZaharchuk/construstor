
$(document).ready(function() {

  $('#video-gallery').slick();

  /* ФОТО ГАЛЕРЕЯ */
  $('.main-gallery__wrapper-items').magnificPopup({
    type: 'image',
    gallery: {
      enabled: true,
      removalDelay: 300,
      mainClass: 'mfp-fade'
    }
  });
  /*_________________________
   ФОТО ГАЛЕРЕЯ*/
// =================================================================================================

  /* НАГРАДЫ */
  $('#hall-fame').slick({
    centerMode: true,
    centerPadding: '60px',
    slidesToShow: 5,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 3
        }
      },
      {
        breakpoint: 480,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 1
        }
      }
    ]
  });
  /*_________________________
   НАГРАДЫ*/

// =================================================================================================
  /* НОВОСТИ */
    $('.page-content__wrappers-news-content').slick({
      centerMode: true,
      centerPadding: '60px',
      slidesToShow: 3,
      responsive: [
        {
          breakpoint: 768,
          settings: {
            arrows: false,
            centerMode: true,
            centerPadding: '40px',
            slidesToShow: 3
          }
        },
        {
          breakpoint: 480,
          settings: {
            arrows: false,
            centerMode: true,
            centerPadding: '40px',
            slidesToShow: 1
          }
        }
      ]
    });
  /*_________________________
   НОВОСТИ*/







  $('#slider-partner').slick({
    centerMode: true,
    centerPadding: '30px',
    slidesToShow: 3,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 2
        }
      },
      {
        breakpoint: 480,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 1
        }
      }
    ]
  });

  $('#reviwes').slick({
    centerMode: true,
    centerPadding: '60px',
    slidesToShow: 3,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 3
        }
      },
      {
        breakpoint: 480,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 1
        }
      }
    ]
  });

  $("#title-form, #cross").click(function(){
    $('#form-wrapper').toggle();
  });

  /* ПЛАВНЫЙ ПЕРЕХОД ПО ЯКОРЯМ */
  $('a[href^="#"]').click(function (e) {
    e.preventDefault();
    var el = $(this).attr('href');
    if ($(el).offset() !== undefined) {
      $('html, body').stop().animate({
        scrollTop: $(el).offset().top-200
      }, 500);
      return false;
    }
  });
  /*_________________________
   ПЛАВНЫЙ ПЕРЕХОД ПО ЯКОРЯМ*/


  /* ВАЛИДАЦИЯ ФОРМЫ */

    $('#global-form').validate({
      rules: {
        name: {
          required: true,
          name: true
        },
        email: {
          required: true,
          email: true
        }
      }, //end rules

      messages: {
        name : {
          required: "Введите ваше имя"
        },
        email: {
          required: "Введите адрес электронной почты.",
          email: "Это некорректный адрес электронной почты."
        }
      } // end massages
    });

    $('#form2').validate({
      rules: {
        name: {
          required: true,
          name: true
        },
        email: {
          required: true,
          email: true
        }
      }, //end rules

      messages: {
        name : {
          required: "Введите ваше имя"
        },
        email: {
          required: "Введите адрес электронной почты.",
          email: "Это некорректный адрес электронной почты."
        }
      } // end massages
    })

  /*_________________________
   ВАЛИДАЦИЯ ФОРМikЫ*/

  $('#show-items').click(function () {
    $('.hidden-content').slideToggle( "slow" );
  })



});




