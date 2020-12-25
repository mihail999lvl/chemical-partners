$(document).ready(function() {

  // Menu for mobile

  let isMenuOpen = false;

  $('.header__burger').on('click', function() {

    if (!isMenuOpen) {
      $(this).addClass('active');
      $('.header__nav').addClass('active');
      updatePaddingLock(true, $('body'), $('.header'), $('.mobile-menu'), $('.price-list'));
      $('html').addClass('lock');
      isMenuOpen = true;
    } else {
      $(this).removeClass('active');
      $('.header__nav').removeClass('active');
      $('html').removeClass('lock');
      updatePaddingLock(false, $('body'), $('.header'), $('.mobile-menu'), $('.price-list'));
      isMenuOpen = false;
    }

  });

  // Dynamic position menu for mobile

  const setPosElem = () => {
    setOffsets();
    positionMobMenu();
  };

  setPosElem();

  $(window).on('resize', setPosElem);


  function setOffsets() {
    const heightHeader = $('.header').height();

    $('.offset-from-header').css('margin-top', heightHeader + 'px');
    $('.offset-from-mobmn').css('margin-bottom', getHeightBottomElems() + 'px');
  }

  function positionMobMenu() {
    const heightHeader = $('.header').height();

    $('.header__nav').css({
      'top': heightHeader - 1 + 'px',
      'height': `calc(100% - ${heightHeader + getHeightBottomElems() - 1}px)`,
    });
  }

  function getHeightBottomElems() {
    let height = $('.price-list').height();

    if (window.matchMedia('(max-width: 480px)').matches) {
      height += $('.mobile-menu').height();
    }

    return height;
  }

  // Fixed top main menu

  let scrollTop = pageYOffset;

  $(window).on('scroll', () => {
    if (window.matchMedia('(min-width: 768px)').matches) {
      if (pageYOffset > scrollTop && !$('.header').hasClass('fixed') &&
        !$('.header').hasClass('disabled') && pageYOffset >= $('.header').height()) {
        $('.header').addClass('fixed disabled');
        $('.header__top-wrapper').slideUp(500);

        setTimeout(() => { $('.header').removeClass('disabled'); }, 500);
      } else if (pageYOffset < scrollTop && $('.header').hasClass('fixed') &&
        !$('.header').hasClass('disabled')) {
        $('.header').removeClass('fixed').addClass('disabled');
        $('.header__top-wrapper').slideDown(500);

        setTimeout(() => { $('.header').removeClass('disabled'); }, 500);
      }

      scrollTop = pageYOffset;

      setTimeout(positionMobMenu, 600);
    }
  });

  // If top menu hide on tablett show
  $(window).on('resize', () => {
    if (window.matchMedia('(max-width: 768px)').matches &&
      $('.header').hasClass('fixed')) {
      $('.header').removeClass('fixed');
      $('.header__top-wrapper').slideDown(500);
    }
  });

  // Tabs

  bindTabs($('.catalog__header'), '.catalog__header-item', $('.catalog__body'));
  bindTabs($('.productions__menu-inner'), '.productions__menu-item', $('.productions__content-item'));

  function bindTabs(parentMenu, menuSelector, content, defaultActive = 0) {

    const menu = $(menuSelector);

    const hideTabs = () => {
      menu.removeClass('active');
      content.removeClass('active');
    };

    const showTab = index => {
      const menuActive = $(menu[index]),
        contentActive = $(content[index]);

      if (menuActive.hasClass('active') || contentActive.hasClass('active'))
        return;

      hideTabs();

      $(menuActive).addClass('active');
      $(contentActive).addClass('active');
    };

    showTab(defaultActive);

    parentMenu.on('click', e => {

      // For dislabled links
      e.preventDefault();

      const parent = $(e.target).closest(menuSelector);

      if (parent.length > 0)
        showTab(parent.index());

    });

  }

  // Off scroll on open modals fancybox
  $('[data-fancybox]').fancybox({
    beforeShow: () => {
      updatePaddingLock(true, $('body'), $('.header'), $('.mobile-menu'), $('.price-list'));
      $('html').addClass('lock');
    },
    afterClose: () => {
      $('html').removeClass('lock');
      updatePaddingLock(false, $('body'), $('.header'), $('.mobile-menu'), $('.price-list'));
    },
  });

  // Tab on mobile in section customers about info
  $('.customers__task-open').on('click', function() {
    $(this).toggleClass('active');
    $('.customers__task-additionally').slideToggle(500);
    // For update adaptive height on slider
    setTimeout(() => {
      $('.customers__slider').slick('setPosition');
    }, 550);
  });


  // Protection for map
  const eventsProtectionMap = {
    mouseover: function() {
      $(this).addClass('active');
    },
    mouseout: function() {
      $(this).removeClass('active');
    },
  };

  $('.map-protection')
    .bind('mouseover', eventsProtectionMap.mouseover)
    .bind('mouseout', eventsProtectionMap.mouseout)
    .bind('touchstart', eventsProtectionMap.mouseover)
    .on('click', function() {
      $(this).hide();

      $(this).unbind('mouseover', eventsProtectionMap.mouseover);
      $(this).unbind('mouseout', eventsProtectionMap.mouseout);
    });


  // Page catalog update structur for menu
  updateStructCatalogMn();

  $(window).on('resize', updateStructCatalogMn);

  function updateStructCatalogMn() {
    const menu = $('.product__menu-inner');

    if (window.matchMedia('(max-width: 992px)').matches) {
      $('.product__mob-selection-body').append(menu);
    } else {
      $('.product__menu').append(menu);
    }
  }

  $('.product__mob-selection-header').on('click', () => {
    $('.product__mob-selection-body').slideToggle(500);
    $('.product__mob-selection').toggleClass('active');
  });

  $('.productions__mob-selection').on('click', function() {
    $(this).toggleClass('active');
    $('.productions__menu').slideToggle(500);
  });

  // Sliders
  $('.customers__slider').slick({
    speed: 1000,
    prevArrow: '<button class="slick-prev"><img data-src="img/icons/arrow-left-blue.svg" alt="left" class="lazyload" src="data:image/gif;base64,R0lGODlhHgA4AIAAAP///wAAACH5BAEAAAEALAAAAAAeADgAAAIojI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvdfAQA7"></button>',
    nextArrow: '<button class="slick-next"><img data-src="img/icons/arrow-right-blue.svg" alt="right" class="lazyload" src="data:image/gif;base64,R0lGODlhHgA4AIAAAP///wAAACH5BAEAAAEALAAAAAAeADgAAAIojI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvdfAQA7"></button>',
    infinite: false,
    adaptiveHeight: true,
    dots: true,
    responsive: [{
      breakpoint: 480,
      settings: {
        arrows: false,
      }
    }],
  });

  $('.customers__task-slider').slick({
    slidesToShow: 3,
    slidesToScroll: 3,
    infinite: false,
    prevArrow: '<button class="slick-prev slick-blackout"><img data-src="img/icons/arrow-left-white.svg" alt="left" class="lazyload" src="data:image/gif;base64,R0lGODlhGgAwAIAAAP///wAAACH5BAEAAAEALAAAAAAaADAAAAIijI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNdbAQA7"></button>',
    nextArrow: '<button class="slick-next slick-blackout"><img data-src="img/icons/arrow-right-white.svg" alt="right" class="lazyload" src="data:image/gif;base64,R0lGODlhGgAwAIAAAP///wAAACH5BAEAAAEALAAAAAAaADAAAAIijI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNdbAQA7"></button>',
    responsive: [{
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        }
      }
    ],
  });

  $('.customers__task-slider-certificates').slick({
    slidesToShow: 5,
    slidesToScroll: 3,
    infinite: false,
    dots: true,
    prevArrow: '<button class="slick-prev slick-blackout"><img src="img/icons/arrow-slider.png" alt="left" class="lazyload"></button>',
    nextArrow: '<button class="slick-next slick-blackout"><img src="img/icons/arrow-slider-right.png" alt="right" class="lazyload"></button>',
    responsive: [{
      breakpoint: 768,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
      }
    },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        }
      }
    ],
  });

  $('.reviews__top-slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    infinite: false,
    speed: 1000,
    arrows: false,
    swipe: false,
    adaptiveHeight: true,
    responsive: [{
      breakpoint: 480,
      settings: {
        speed: 300,
      }
    }],
  });

  $('.reviews__bottom-slider').slick({
    slidesToShow: 5,
    slidesToScroll: 5,
    infinite: false,
    dots: true,
    adaptiveHeight: true,
    prevArrow: '<button class="slick-prev"><img data-src="img/icons/arrow-left-blue.svg" alt="left" class="lazyload" src="data:image/gif;base64,R0lGODlhHgA4AIAAAP///wAAACH5BAEAAAEALAAAAAAeADgAAAIojI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvdfAQA7"></button>',
    nextArrow: '<button class="slick-next"><img data-src="img/icons/arrow-right-blue.svg" alt="right" class="lazyload" src="data:image/gif;base64,R0lGODlhHgA4AIAAAP///wAAACH5BAEAAAEALAAAAAAeADgAAAIojI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvdfAQA7"></button>',
    responsive: [{
        breakpoint: 992,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          asNavFor: '.reviews__top-slider',
        }
      }
    ],
  });

  $('.video-reviews__top-slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    infinite: false,
    speed: 1000,
    arrows: false,
    swipe: false,
    adaptiveHeight: true,
    responsive: [{
      breakpoint: 480,
      settings: {
        speed: 300,
      }
    }],
  });

  $('.video-reviews__bottom-slider').slick({
    slidesToShow: 5,
    slidesToScroll: 5,
    infinite: false,
    dots: true,
    prevArrow: '<button class="slick-prev"><img data-src="img/icons/arrow-left-blue.svg" alt="left" class="lazyload" src="data:image/gif;base64,R0lGODlhHgA4AIAAAP///wAAACH5BAEAAAEALAAAAAAeADgAAAIojI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvdfAQA7"></button>',
    nextArrow: '<button class="slick-next"><img data-src="img/icons/arrow-right-blue.svg" alt="right" class="lazyload" src="data:image/gif;base64,R0lGODlhHgA4AIAAAP///wAAACH5BAEAAAEALAAAAAAeADgAAAIojI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvdfAQA7"></button>',
    responsive: [{
        breakpoint: 992,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 4,
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
        }
      }
    ],
  });


  bindTwoSlider($('.reviews__bottom-slider'), '.reviews__bottom-item', $('.reviews__top-slider'));
  bindTwoSlider($('.video-reviews__bottom-slider'), '.video-reviews__bottom-item', $('.video-reviews__top-slider'));

  function bindTwoSlider(main, mainSlideSelector, additional) {

    main.on('click', e => {
      const slideEvent = $(e.target).closest(mainSlideSelector),
        index = slideEvent.index();

      if (slideEvent.length <= 0 || slideEvent.hasClass('active')) return;

      additional.slick('slickGoTo', index);

      if (additional.slick('slickCurrentSlide') === index) {
        const mainSlides = $(mainSlideSelector);
        main.find(mainSlideSelector + '.active').removeClass('active');
        $(mainSlides[index]).addClass('active');
      }

    });

  }

  bindModalWindow($('.header__btn'), $('.feedback__popup'), $('.feedback__close'));
  bindModalWindow($('.mobile-menu__request-price'), $('.feedback__popup'), $('.feedback__close'));
  bindModalWindow($('.btn-price-js'), $('.popup-price'), $('.popup-price__close'));
  bindModalWindow(null, $('.popup-message'), $('.popup-message__close'));
  bindModalWindow($('.btn-policy'), $('.popup-policy'), $('.popup-policy__close'));

  function bindModalWindow(open, modal, close) {

    if (open) {
      open.on('click', e => {
        // For links
        e.preventDefault();

        // close all modals windows 
        $('.popup').removeClass('active');

        $(modal).addClass('active');
        $('.overlay').fadeIn(500);
        updatePaddingLock(true, $('body'), $('.header'), $('.mobile-menu'), $('.price-list'));
        $('html').addClass('lock');
      });
    }

    close.on('click', closeModalWindow);

    modal.on('click', e => {
      if ($(e.target).hasClass('popup-content'))
        closeModalWindow();
    });

    $(document).on('keydown', e => {
      if (e.key === 'Escape' && modal.hasClass('active'))
        closeModalWindow();
    });

    function closeModalWindow() {

      if (!$('.header__nav').hasClass('active')) {
        $('html').removeClass('lock');
        updatePaddingLock(false, $('body'), $('.header'), $('.mobile-menu'), $('.price-list'));
      }

      $(modal).removeClass('active');
      $('.overlay').fadeOut(800);
    }

  }

  function getWindthScroll() {
    const div = document.createElement('div');

    $(div).css({
      'width': '100px',
      'height': '100px',
      'overflow-y': 'scroll',
      'position': 'absolute',
      'top': '0',
      'left': '0',
      'visibility': 'hidden',
    });

    $('body').append(div);

    const widthScroll = div.offsetWidth - div.clientWidth;

    div.remove();

    return widthScroll;
  }

  function updatePaddingLock(set, ...elems) {
    let offset = 0;

    if (set) offset = getWindthScroll();


    elems.forEach(item => {
      item.css('padding-right', offset + 'px');
    });
  }

  // Lazyload for maps
  bindMapLoad($('#point-load-map'), $('.contacts__map'), '<iframe class="contacts__map-iframe" src="https://yandex.ru/map-widget/v1/?um=constructor%3A78a68266f30a0c0544a05599c38222bbcebe590e870ab4544a8ebe999de4ebe9&amp;source=constructor"></iframe>');
  bindMapLoad($('#point-load-map'), $('.warehouses__map'), '<iframe class="warehouses__map-iframe" src="https://yandex.ru/map-widget/v1/?um=constructor%3A3b4a147e6eac45fad9f8e24e12a5be0b0726ad87a8ee3389c812559984e27433&amp;source=constructor"></iframe>');
  bindMapLoad($('#point-load-map'), $('.panorama'), '<iframe class="panorama-iframe" src="https://www.google.com/maps/embed?pb=!4v1598687840780!6m8!1m7!1s7K67sbV1aZOwIkA5qpdCVA!2m2!1d55.72903068236712!2d37.63035513463834!3f59.90006667797836!4f-1.008500863664949!5f0.7820865974627469"></iframe>');

  function bindMapLoad(pointer, where, code) {

    $(window).on('scroll', loadMap);

    function loadMap() {
      if (pointer.length === 0) return;

      const offsetFromPoint = pointer.offset().top,
        windowScroll = $(this).scrollTop();

      if (windowScroll > offsetFromPoint) {
        where.append(code);
        $(window).unbind('scroll', loadMap);
      }
    }

  }

  $('input, textarea').on('blur change', function(e) {
    e.preventDefault();

    checkingFields($(this));
  });

  $('form').on('submit', function(e) {

    e.preventDefault();

    const form = $(this);

    if (form.attr('data-no-send')) return;

    if (checkingFields($(this).find('input, textarea'))) {

      const buttonSubmit = form.find('button'),
        loader = document.createElement('img');

      loader.src = 'img/icons/loading.gif';
      $(loader).css({
        'height': buttonSubmit[0].getBoundingClientRect().height + 'px',
        'margin': '0 auto',
      });
      form.append(loader);

      buttonSubmit.hide();

      const showMessage = (title = 'Произошла ошибка!', text = 'Попробуйте повторить попытку позже') => {
        const popup = $('.popup-message').addClass('active');
        popup.find('.popup-message__title').text(title);
        popup.find('.popup-message__text').text(text);

        $('.overlay').fadeIn(500);
        updatePaddingLock(true, $('body'), $('.header'), $('.mobile-menu'), $('.price-list'));
        $('html').addClass('lock');
      };

      $.ajax({
        type: $(this).attr('method'),
        url: $(this).attr('action'),
        data: new FormData(this),
        contentType: false,
        cache: false,
        processData: false,
        success: function(data) {

          if (data) {
            form[0].reset();

            form.find('input, textarea').each((i, item) => {
              $(item).removeClass('valid');
            });

            if (form.hasClass('popup-price__form-step-one')) {
              $('.popup-price__step-one').hide();
              $('.popup-price__step-two').fadeIn(500);
            } else {

              if (form.hasClass('popup-price__form-step-two')) {
                $('.popup-price__step-one').show();
                $('.popup-price__step-two').hide();
              }

              showMessage('Ваша заяка успешно отправлена!', 'Наши специалисты скоро свяжутся с Вами');
            }
          } else {
            showMessage();
          }

        },
        error: function() {
          showMessage();

          $('.popup').each((i, modal) => {
            if (!$(modal).hasClass('popup-message'))
              $(modal).removeClass('active');
          });
        },
        complete: function() {

          // Close all modals window, except message about send
          if (!form.attr('data-no-events')) {
            $('.popup').each((i, modal) => {
              if (!$(modal).hasClass('popup-message'))
                $(modal).removeClass('active');
            });
          }

          buttonSubmit.show();
          loader.remove();

        }
      });
    }

  });

  function checkingFields(fields) {

    let isValid = true;

    fields.each((i, field) => {

      const $field = $(field);

      if ($field.attr('data-no-validate')) return;

      $field.next().text('');
      $field.removeClass('error valid');

      const showError = text => {
        $field.next().text(text);
        $field.addClass('error');
        isValid = false;
      };

      const type = $field.attr('type'),
        value = $field.val(),
        messagesValidate = {
          empty: 'Заполните это поле!',
          email: 'Некорректно введён email!',
          phone: 'Некорректно введён телефон!',
        };

      if (/^\s*$/.test(value)) {
        showError(messagesValidate.empty);
      } else if (type === 'email' &&
        !/^([a-z0-9_-]+\.)*[a-z0-9_-]+@[a-z0-9_-]+(\.[a-z0-9_-]+)*\.[a-z]{2,6}$/.test(value)) {
        showError(messagesValidate.email);
      } else if (type === 'tel' &&
        !/^(\s*)?(\+)?([- _():=+]?\d[- _():=+]?){10,14}(\s*)?$/.test(value)) {
        showError(messagesValidate.phone);
      } else {
        $field.addClass('valid');
      }

    });

    return isValid;

  }
  $(".masked-group__phone").mask("(999) 999-9999");
  $('.product-slider ul li').on('click', function (e) {
      e.preventDefault()
      if($(this).hasClass('active')) {
        return false;
      } else {
        $('.product-slider ul li.active').removeClass('active')
        $(this).addClass('active')
        let src = $(this).attr('data-fullSrc')
        $('.product-slider .photo-full img').attr('src', src)
      }
  })
});


$(window).on('load', () => {
  setTimeout(() => {
    $('html').removeClass('lock');
    $('.preloader').fadeOut(800);
  }, 1500);
});


// Polyfills

// .remove()
(function(arr) {
  arr.forEach(function(item) {
    if (item.hasOwnProperty('remove')) {
      return;
    }
    Object.defineProperty(item, 'remove', {
      configurable: true,
      enumerable: true,
      writable: true,
      value: function remove() {
        this.parentNode.removeChild(this);
      }
    });
  });
})([Element.prototype, CharacterData.prototype, DocumentType.prototype]);


// .getBoundingClientRect()
(function() {
  Element.prototype._getBoundingClientRect = Element.prototype.getBoundingClientRect;
  Element.prototype.getBoundingClientRect = function() {
    const rect = Element.prototype._getBoundingClientRect.call(this);
    rect.x = rect.left;
    rect.y = rect.top;
    return rect;
  }
})();