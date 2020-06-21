
$(document).ready(function () {
  'use strict';

  /*-----------------------------------
  Navbar
  -----------------------------------*/
  $('.dropdown-menu a.dropdown-toggle').on('click', function (e) {
    var $el = $(this);
    var $parent = $(this).offsetParent(".dropdown-menu");
    if (!$(this).next().hasClass('show')) {
      $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
    }
    var $subMenu = $(this).next(".dropdown-menu");
    $subMenu.toggleClass('show');

    $(this).parent("li").toggleClass('show');

    $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function (e) {
      $('.dropdown-menu .show').removeClass("show");
    });

    if (!$parent.parent().hasClass('navbar-nav')) {
      $el.next().css({ "top": $el[0].offsetTop, "left": $parent.outerWidth() - 4 });
    }

    return false;
  });

  if ($(window).width() < 1200) {
    $(document).on('click', function (event) {
      var clickover = $(event.target);
      var _opened = $('#navbarSupportedContent').hasClass('show');
      if (_opened === true && !(clickover.is('.navbar-nav li, .navbar-nav .dropdown *, .listing-browse-dropdown, .listing-browse-dropdown .listing-browse-dropdown-toggle, .listing-browse-dropdown .dropdown-menu, .listing-browse-dropdown .dropdown-menu .browse-search, .listing-browse-dropdown *'))) {
        $('button.navbar-toggler').trigger('click');
      }
    });
  }

  /*--------------------------------------------
  Navbar Search Button
  --------------------------------------------*/

  $('.nav-search-toggle').on('click', function (e) {
    e.preventDefault();
    $('.nav-search form').slideToggle();
  })

  /*--------------------------------------------
  Wicked Picker
  --------------------------------------------*/

  $('.set-time').wickedpicker();
  $('.selector').wickedpicker({

    // current time
    now: new Date(),

    // 12- or 24-hour format
    twentyFour: false,

    // CSS classes
    upArrow: 'wickedpicker__controls__control-up',
    downArrow: 'wickedpicker__controls__control-down',
    close: 'wickedpicker__close',
    hoverState: 'hover-state',

    // title

    title: 'Timepicker'

  });


  /*--------------------------------------------
  Image Uploader
  --------------------------------------------*/

  $('div').on('click', '.closeDiv', function () {
    $(this).parents('.divThumbnail').remove();
    $('#upload-input').val("");
  });

  var fileInput = document.getElementById("upload-input");

  if (fileInput) {
    fileInput.addEventListener("change", function (e) {
      var filesVAR = this.files;
      showThumbnail(filesVAR);
    }, false);
  }


  function showThumbnail(files) {
    var file = files[0]
    var $thumbnail = $('#thumbnail').get(0);

    var $image = $("<img>", {
      class: "imgThumbnail img-fluid"
    });
    var $pDiv = $("<div>", {
      class: "divThumbnail"
    });
    var $div = $("<div>", {
      class: "closeDiv"
    }).html('<span class="ti-close"></span>');

    $pDiv.append($image, $div).appendTo($thumbnail);
    var reader = new FileReader()
    reader.onload = function (e) {
      $image[0].src = e.target.result;
    }
    var ret = reader.readAsDataURL(file);
    var canvas = document.createElement("canvas");
    $image.on('load', function () {
      // ctx.drawImage($image[0], 100, 100);
    })
  }


  /*--------------------------------------------
  Listing View Controller
  --------------------------------------------*/

  $('.search-result-view-control .view-change').on('click', function (e) {
    e.preventDefault();
    $('.search-result-view-control .view-change').removeClass('active');
    $(this).addClass('active');

    if ($('.search-result-view-control .grid-view').hasClass('active')) {

      $('.listing-result-block .row .result-item').removeClass('col-12').addClass('col-md-6');
      $('.result-item .lrn-listing-wrap').removeClass('listing-list');

      $('.listing-result-block .row .map-top-result-item').removeClass('col-12').addClass('col-lg-4 col-md-6');
      $('.map-top-result-item .lrn-listing-wrap').removeClass('listing-list');

    } else if ($('.search-result-view-control .list-view').hasClass('active')) {

      $('.listing-result-block .row .result-item').removeClass('col-md-6').addClass('col-12');
      $('.result-item .lrn-listing-wrap').addClass('listing-list');

      $('.listing-result-block .row .map-top-result-item').removeClass('col-lg-4 col-md-6').addClass('col-12');
      $('.map-top-result-item .lrn-listing-wrap').addClass('listing-list');
    }
  })

  /*--------------------------------------------
  Add Socail Field
  --------------------------------------------*/

  $(document).on('click', '.social-network-block .delete', function () {
    $(this).parents('.form-group').remove();
  })

  $('.social-networks .add-field-button').on('click', function (e) {
    e.preventDefault();

    var formGroup = document.createElement('div');
    formGroup.setAttribute('class', 'form-group');
    var slct = `
                          <select class="form-control add-social-link" name="social_key[]">
                            <option value="">Select Network</option>
                            <option value="fb">Facebook</option>
                            <option value="twitter">Twitter</option>
                            <option value="instagram">Instagram</option>
                          </select>
    `;
    var npt = '<input type="text" placeholder="Enter Link" name="social_value[]" class="form-control social-link-input">';
    var dlt = '<div class="delete"><i class="far fa-trash-alt"></i></div>';

    var cln = slct + npt + dlt;

    $(formGroup).append(cln);
    $('.social-network-block').append(formGroup);
    $(".social-network-block .add-social-link").select2({
      theme: "bootstrap"
    });
  })

  /*--------------------------------------------
  Select Category
  --------------------------------------------*/

  function selectFun() {
    $(".select-category").select2({
      theme: "bootstrap"
    });

    $(".add-social-link").select2({
      theme: "bootstrap"
    });

    $(".sort-by").select2({
      theme: "bootstrap"
    });

    $(".nav-search-category").select2({
      theme: "bootstrap"
    });
  }

  selectFun();

  /*-------------------------------------
  Window Scroll
  -------------------------------------*/

  $(window).on('resize orientationchange', function () {
    selectFun();
  });

  if (typeof tinymce !== 'undefined') {
    tinymce.init({
      selector: '.description-box',
      height: 120,
      menubar: false,
      theme: 'modern',
      mobile: {
        theme: 'mobile',
        plugins: ['autosave', 'lists', 'autolink']
      },
      plugins: [
        'advlist autolink lists link image charmap print preview anchor',
        'searchreplace visualblocks code fullscreen',
        'insertdatetime media table contextmenu paste code'
      ],
      toolbar: 'bold underline italic | bullist numlist | alignleft aligncenter alignright alignjustify | link',
    });
  }


  const vplyr = new Plyr('#video-player');


})


$(window).on('load', function () {
  $(".preloader").delay(200).fadeOut();
});