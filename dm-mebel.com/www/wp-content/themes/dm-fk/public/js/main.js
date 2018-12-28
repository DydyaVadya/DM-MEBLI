// jQuery no conflict
jQuery.noConflict();

jQuery(document).ready(function (jQuery) {

    // FontFaceObserver
    var sfuidisplay_black = new FontFaceObserver('SFUIDisplay-Black');
    var sfuidisplay_bold = new FontFaceObserver('SFUIDisplay-Bold');
    var sfuidisplay_semibold = new FontFaceObserver('SFUIDisplay-Semibold');
    var sfuidisplay_regular = new FontFaceObserver('SFUIDisplay-Regular');
    var sfuidisplay_light = new FontFaceObserver('SFUIDisplay-Light');

    // FastClick
    jQuery(function () { FastClick.attach(document.body); });

    // object Fit Images
    jQuery(function () { objectFitImages(); });

    // carousel
    jQuery(function () {
        if (jQuery(".carousel").length) {
            var $carousel = jQuery(".carousel");

            $carousel.each(function () {
                var $this = jQuery(this),
                    $carouselPrev = $this.parents('.carousel-section').find('.carousel-prev'),
                    $carouselNext = $this.parents('.carousel-section').find('.carousel-next'),
                    $carouselDots = $this.parents('.carousel-section').find('.carousel-dots');

                $this.slick({
                    fade: true,
                    dots: true,
                    prevArrow: $carouselPrev,
                    nextArrow: $carouselNext,
                    appendDots: $carouselDots,
                    autoplay: true,
                    pauseOnHover: false,
                    autoplaySpeed: 5000,
                    speed: 300,
                    cssEase: 'linear'
                });
            });
        }
    });

    // slider
    jQuery(function () {
        if (jQuery(".slider").length) {
            var $slider = jQuery(".slider");

            $slider.each(function () {
                var $this = jQuery(this),
                    $sliderPrev = $this.parents('.slider-section').find('.slider-prev'),
                    $sliderNext = $this.parents('.slider-section').find('.slider-next'),
                    $sliderDots = $this.parents('.slider-section').find('.slider-dots');

                $this.slick({
                    fade: true,
                    dots: true,
                    prevArrow: $sliderPrev,
                    nextArrow: $sliderNext,
                    appendDots: $sliderDots,
                    speed: 300,
                    adaptiveHeight: true
                });

            });
        }
    });

    // SmoothScroll
    jQuery(function () {
        if (jQuery(".page-nav a[href*=\"#\"]").length) {

            jQuery(document).on('click','.page-nav.show',function(e) {
                if( jQuery(e.target).is('a') ) {
                    jQuery(this).collapse('hide');
                }
            });

            var scroll = new SmoothScroll();

            var smoothScrollWithoutHash = function (selector, settings) {

                var clickHandler = function (event) {
                    var toggle = event.target.closest( selector );
                    if ( !toggle || toggle.tagName.toLowerCase() !== 'a' ) return;
                    var anchor = document.querySelector( toggle.hash );
                    if ( !anchor ) return;

                    event.preventDefault(); // Prevent default click event
                    setTimeout( function () {
                        scroll.animateScroll(anchor, toggle, settings || {});
                    }, 350);
                };

                window.addEventListener('click', clickHandler, false );
            };

            smoothScrollWithoutHash( '[data-scroll]', {header: ".page-header"} );

        }

    });


    jQuery(function () {
        if (jQuery(".scroll-to").length) {
            var scroll = new SmoothScroll('.scroll-to',{
                header: ".page-header"
            });
        }
    });

    // check if input not empty
    jQuery(function () {
        if ( jQuery(".input-row").length ) {
            var $input = jQuery(".input-row input");
            $input.blur(function(){
                var input_val = jQuery(this).val();
                ( input_val == '' ) ? jQuery(this).addClass('empty') : jQuery(this).removeClass('empty');
            });
        }
    });

    // top-scroll
    jQuery(function () {
        if (jQuery('.top-scroll').length) {
            var $topScroll = jQuery('.top-scroll');

            if( jQuery(window).scrollTop() > jQuery(window).height() ) {
                $topScroll.addClass('active');
            } else {
                $topScroll.removeClass('active');
            }

            jQuery(window).on('scroll', function () {
                if( jQuery(window).scrollTop() > jQuery(window).height() ) {
                    $topScroll.addClass('active');
                } else {
                    $topScroll.removeClass('active');
                }
            });

            var scroll = new SmoothScroll( '.top-scroll' );

        }
    });

    // Gallery
    jQuery(function () {
        if (jQuery(".gallery-for").length || jQuery(".gallery-nav").length) {

            var $detailModal = jQuery('.detail-modal');

            var $galleryFor = jQuery('.gallery-for');
            $galleryFor.slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                fade: true,
                infinite: false,
                asNavFor: '.gallery-nav'
            });
            $detailModal.on('shown.bs.modal', function (e) {
                $galleryFor.slick("setPosition", 0);
            });

            var $galleryNav = jQuery('.gallery-nav');
            $galleryNav.each(function () {
                var $this = jQuery(this),
                    $galleryPrev = $this.parents('.gallery-nav-container').find('.gallery-prev'),
                    $gallerylNext = $this.parents('.gallery-nav-container').find('.gallery-next');
                $this.slick({
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    asNavFor: '.gallery-for',
                    infinite: false,
                    focusOnSelect: true,
                    prevArrow: $galleryPrev,
                    nextArrow: $gallerylNext
                });
                $detailModal.on('shown.bs.modal', function (e) {
                    $this.slick("setPosition", 0);
                });
            });

        }
    });

    // add-file
    jQuery(function () {
        if ( jQuery(".form-file").length ) {

            var $formFile = jQuery('.form-file');

            $formFile.each(function () {
                let $this = jQuery(this),
                    $addFile = $this.find(".add-file"),
                    $btnSend = $this;


                $addFile.each(function () {
                    var $this               = jQuery(this),
                        $fileInput          = $this.find('.file-input'),
                        $btnAddFile         = $this.find('.btn-add-file'),
                        $selectedFiles      = $this.find('.selected-files'),
                        $selectedFilesCount = $this.find('.selected-files-count'),
                        files = [];


                    $fileInput.change(function() {
                        var newFiles = [],
                            fileInputLength = $fileInput[0].files.length,
                            index = 0;
                        for( index = 0; index < fileInputLength; index++ ) {
                            var file = $fileInput[0].files[index];
                            newFiles.push(file);
                            files.push(file);
                        }

                        newFiles.forEach( function (file) {

                            var fileElement = jQuery('<div class="selected-files-item"><div class="max-hiden">' + file.name + '</div><a href="#" class="btn-remove">&nbsp;</a></div>'),
                                $btnRemove = fileElement.find('.btn-remove');

                            fileElement.data('fileData', file);

                            $selectedFiles.append(fileElement);

                            $btnRemove.click(function(event) {

                                event.preventDefault();

                                var fileElement = jQuery(this).parent('.selected-files-item');

                                var indexToRemove = files.indexOf(fileElement.data('fileData'));

                                fileElement.remove();

                                files.splice(indexToRemove, 1);

                                $fileInput.val('');

                                $selectedFilesCount.children('i').text( files.length );

                                if( files.length > 1 ){

                                    $this.addClass("multiple-select");

                                } else {

                                    $this.removeClass("multiple-select");

                                }

                            });


                        });

                        $selectedFilesCount.children('i').text( files.length );
                        if( files.length > 1 ){
                            $this.addClass("multiple-select");
                        } else {
                            $this.removeClass("multiple-select");
                        }

                    });

                    $btnAddFile.click(function() {
                        $fileInput.click();
                    });

                });

                $btnSend.submit(function(event) {

                    var target = event.currentTarget;
                    console.log(target);
                    event.preventDefault();
                 

                    $this.find("input").each(function () {
                        var $this =  jQuery(this);
                        val = $this.val();
                        
                    });

                    event.preventDefault();

                    var formData = new FormData();
                    
                    console.log(jQuery(this).find('.type-form').val());                  
                    

                    switch(jQuery(this).find('.type-form').val()){

                        case 'review':
                        //проверка формы
                        if(jQuery(this).find('#tel-review').val().length < 17){
                            // alert("Введите номер!");
                            jQuery(target).find('#error-msg').css({
                                'display': 'block',

                            });
                            return false;
                        }
                            console.log(jQuery(this).find('.type-form').val());
                            formData.append('name', jQuery('#name-review').val());
                            formData.append('tel', jQuery('#tel-review').val());
                            formData.append('city', jQuery('#city-review').val());
                            formData.append('comment', jQuery('#comment-review').val());

                            var newFiles_review = [],
                                files_review = [];

                            $fileInput = document.getElementsByClassName("file-input-review-photo");

                            fileInputLength = $fileInput[0].files.length,
                                index = 0;
                            for( index = 0; index < fileInputLength; index++ ) {
                                let file = $fileInput[0].files[index];
                                newFiles_review.push(file);
                                files_review.push(file);
                            }

                            files_review.forEach(function (file) {
                                formData.append('file_photo', file);
                            });

                            $fileInput = document.getElementsByClassName("file-input-review-received");

                            fileInputLength = $fileInput[0].files.length,
                                index = 0;
                            for( index = 0; index < fileInputLength; index++ ) {
                                let file = $fileInput[0].files[index];
                                newFiles_review.push(file);
                                files_review.push(file);
                            }

                            files_review.forEach(function (file) {
                                formData.append('file_received', file);
                            });

                            $fileInput = document.getElementsByClassName("file-input-review-wanted");

                            fileInputLength = $fileInput[0].files.length,
                                index = 0;
                            for( index = 0; index < fileInputLength; index++ ) {
                                let file = $fileInput[0].files[index];
                                newFiles_review.push(file);
                                files_review.push(file);
                            }

                            files_review.forEach(function (file) {
                                formData.append('file_wanted', file);
                            });

                            var myajax = {"url":'https://' + location.hostname + '/wp-admin/admin-ajax.php'};

                            // var data = {
                            //     action: 'my_action',
                            //     whatever: 1234
                            // };

                            formData.append('action', 'my_action');

                            jQuery.ajax({
                                url: myajax.url,
                                data: formData,
                                type: 'POST',
                                success: function(data) { console.log(data);
                                    jQuery(target).find('#error-msg').css({
                                        'display': 'none',

                                    });},
                                erroro: function(data) { console.log('ERROR !!!'); },
                                cache: false,
                                processData: false,
                                contentType: false
                            });
                            jQuery('.btn-close').click();
                            jQuery('.success-review-modal').modal();

                            url = 'https://' + location.hostname + '/registratsiya-otzyivov/';

                            break;
                        case 'realization':


                        //проверка формы
                        if(jQuery(this).find('#tel-input').val().length < 17){
                                // alert("Введите номер!");
                            jQuery(target).find('#error-msg').css({
                                'display': 'block',

                            });
                                return false;
                            }
                           
                            var newFiles_review = [],
                                files_review = [];
                            $fileInput = document.getElementById("form-realization-file");

                            fileInputLength = $fileInput.files.length,
                                index = 0;
                            for( index = 0; index < fileInputLength; index++ ) {
                                let file = $fileInput.files[index];
                                newFiles_review.push(file);
                                files_review.push(file);
                            }

                            files_review.forEach(function (file) {
                                formData.append('file', file);
                            });

                            // files.forEach(function (file) {
                            //     formData.append('file', file);
                            // });

                            formData.append('phone', jQuery('#tel-input').val());
                            // if(formData.tel_callback.length < 17){
                            //     alert("Введите номер!");
                            //     return false;
                            // }

                            url = 'https://' + location.hostname + '/send/message.php';

                            jQuery.ajax({
                                url: url,
                                data: formData,
                                type: 'POST',
                                success: function(data) {
                                    jQuery('.success-recourse-modal').modal();
                                    jQuery(target).find('#error-msg').css({
                                        'display': 'none',

                                    });
                                },
                                erroro: function(data) { console.log('ERROR !!!'); },
                                cache: false,
                                processData: false,
                                contentType: false
                            });

                            break;

                    }

                });
            });

        }
    });

    // zoom
    jQuery(function () {
        if (jQuery('.zoom').length) {
            var $zoom = jQuery('.zoom');

            $zoom.each(function(i, el) {

                var $zoomContainer = jQuery(el).parents('.gallery-container').find('.zoom-container')[0];
                new Drift(el, {
                    inlinePane: false,
                    zoomFactor: 3,
                    paneContainer: $zoomContainer,
                    inlineOffsetY: -85,
                    containInline: true
                });
            });

        }
    });

    jQuery(function () {
        var $form = jQuery('form');
        $form.each(function () {
            var $this = jQuery(this),
                $success = jQuery(jQuery(this).find('[data-target]').attr('data-target')),
                $modal = $this.parents(".modal");

            $this.parsley({
                successClass: 'success',
                errorClass: 'error',
                errorsWrapper: '',
                errorElem: ''
            }).on('form:success', function() {
                $modal.modal('hide');
                $success.modal();
            }).on('form:submit', function() {
                return false;
            });
        });
    });

    // mask
    // jQuery(function () {
    //     var $tel = jQuery('[type="tel"]');
    //     $tel.inputmask({
    //         mask: ["+38(999)999-99-99"],
    //         keepStatic: true,
    //         showMaskOnHover: false
    //     });
    // });


    // jQuery('form').removeAttr('novalidate');

});







