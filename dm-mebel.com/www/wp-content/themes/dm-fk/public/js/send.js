(function(wiondow, $){

    $(document).ready(function (jQuery) {

        $('#callback-modal form').submit(function(e){

            e.preventDefault();

            let formData = {
                name_callback: $("#name-callback").val(),
                tel_callback : $("#tel-callback").val(),
                textarea     : $(this).find('textarea').val(),
                type         : 'backcall',
            }
            $.post('https://' + location.hostname + '/send/message.php', formData, function(data){
                $server = JSON.parse(data);

                if($server['result']){

                    $('#discuss-modal .modal-content').html(`<div class="modal-container">
                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="38" height="38" viewBox="0 0 38 38" style="enable-background:new 0 0 38 38;" xml:space="preserve">
                                <rect x="2" y="2" fill="none" stroke="#FFFFFF" stroke-width="4" width="34" height="34"></rect>
                                <polygon fill="#FFFFFF" points="28,13.3 25.7,11 19,17.7 12.3,11 10,13.3 16.7,20 10,26.7 12.3,29 19,22.3 25.7,29 28,26.7 21.3,20"></polygon>
                            </svg>
                        </button>
                        <h3><b>Ваше сообщение отправлено!</b></h3>
                        <p class="success-message">В ближайшее время с вами свяжется наш специалист</p>
                        <div class="row">
                            <div class="col-sm-7"><p>Если вам не терпится, позвоните нам:</p></div>
                            <div class="col-sm-5 align-self-center"><a href="tel:+380936666666" target="_blank" title="(093) 190 38 41">(093) 190 38 41</a></div>
                        </div>
                    </div>`);

                }else{


                    $('#discuss-modal .modal-content').html(`<div class="modal-container">
                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="38" height="38" viewBox="0 0 38 38" style="enable-background:new 0 0 38 38;" xml:space="preserve">
                                <rect x="2" y="2" fill="none" stroke="#FFFFFF" stroke-width="4" width="34" height="34"></rect>
                                <polygon fill="#FFFFFF" points="28,13.3 25.7,11 19,17.7 12.3,11 10,13.3 16.7,20 10,26.7 12.3,29 19,22.3 25.7,29 28,26.7 21.3,20"></polygon>
                            </svg>
                        </button>
                        <h3><b>Ваше сообщение не отправлено</b></h3>
                        <p class="success-message">Ваше сообщение не отправлено попробуйте через несколько минут</p>
                        <div class="row">
                            <div class="col-sm-7"><p>Или позвоните нам сами:</p></div>
                            <div class="col-sm-5 align-self-center"><a href="tel:+380936666666" target="_blank" title="(093) 190 38 41">(093) 190 38 41</a></div>
                        </div>
                    </div>`);

                }

                $('#callback-modal').find('.btn-close').trigger('click');

                $('#discuss-modal').modal('show');

            });

        });

        /**
         * В БЛИЖАЙШЕЕ ВРЕМЯ С ВАМИ СВЯЖЕТСЯ НАШ СПЕЦИАЛИСТ, ЧТОБЫ ОБСУДИТЬ РЕАЛИЗАЦИЮ ЖЕЛАЕМОГО ДИВАНА
         *
         */
        $('#get-consultation-modal form').submit(function(e){

            e.preventDefault();

            let formData = {
                name_callback: $("#name-consultation").val(),
                tel_callback : $("#tel-consultation").val(),
                type         : 'consultation',
            }

            $.post('https://' + location.hostname + '/send/message.php', formData, function(data){
                $server = JSON.parse(data);

                if($server['result']){

                    $('#discuss-modal .modal-content').html(`<div class="modal-container">
                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="38" height="38" viewBox="0 0 38 38" style="enable-background:new 0 0 38 38;" xml:space="preserve">
                                <rect x="2" y="2" fill="none" stroke="#FFFFFF" stroke-width="4" width="34" height="34"></rect>
                                <polygon fill="#FFFFFF" points="28,13.3 25.7,11 19,17.7 12.3,11 10,13.3 16.7,20 10,26.7 12.3,29 19,22.3 25.7,29 28,26.7 21.3,20"></polygon>
                            </svg>
                        </button>
                        <h3><b>Ваше сообщение отправлено!</b></h3>
                        <p class="success-message">В ближайшее время с вами свяжется наш специалист</p>
                        <div class="row">
                            <div class="col-sm-7"><p>Если вам не терпится, позвоните нам:</p></div>
                            <div class="col-sm-5 align-self-center"><a href="tel:+380931903841" target="_blank" title="(093) 666 - 66 - 66">(093) 190 38 41</a></div>
                        </div>
                    </div>`);

                }else{


                    $('#discuss-modal .modal-content').html(`<div class="modal-container">
                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="38" height="38" viewBox="0 0 38 38" style="enable-background:new 0 0 38 38;" xml:space="preserve">
                                <rect x="2" y="2" fill="none" stroke="#FFFFFF" stroke-width="4" width="34" height="34"></rect>
                                <polygon fill="#FFFFFF" points="28,13.3 25.7,11 19,17.7 12.3,11 10,13.3 16.7,20 10,26.7 12.3,29 19,22.3 25.7,29 28,26.7 21.3,20"></polygon>
                            </svg>
                        </button>
                        <h3><b>Ваше сообщение не отправлено</b></h3>
                        <p class="success-message">Ваше сообщение не отправлено попробуйте через несколько минут</p>
                        <div class="row">
                            <div class="col-sm-7"><p>Если вам не терпится приступить к сборке дивана, позвоните нам::</p></div> 
                            <div class="col-sm-5 align-self-center"><a href="tel:+380931903841" target="_blank" title="(093) 666 - 66 - 66">(093) 190 38 41</a></div>
                        </div>
                    </div>`);

                }

                $('#get-consultation-modal').find('.btn-close').trigger('click');

                $('#discuss-modal').modal('show');

            });

        });

        $('.order_call').submit(function(e){

            e.preventDefault();

            let formData = {
                // tel_callback  : $("#tel-consultation").val(),
                tel_callback : $(this).find('.detail-tel').val(),
                name_callback : $(this).find('.detail-name').val(),
                img_callback  : $(this).find('.detail-img').val(),
                dasc_callback : $(this).find('.detail-desc').val(),
                type         : 'call',
            }
            // console.log(formData);
            $.post('https://' + location.hostname + '/send/message.php', formData, function(data){
                console.log(data);
                $server = JSON.parse(data);

                $('.detail-modal').find('.btn-close').trigger('click');

                $('.success-recourse-modal').modal('show');

            });

        });


        $('.onClickProduct').on('click', function(){
            console.log(5);
            $id = $(this).attr('data-tab-product');

            $idElement = $('#' + $id);

            if($idElement.attr('data-view') == 'open'){
                console.log(4);
                $idElement.find('.tab-content-id').css('max-height', '1300px');
                $idElement.attr('data-view', 'ext');
                $(this).html('<span>Показать больше</span>');
            }else{
                console.log(3);
                $idElement.find('.tab-content-id').css('max-height', 'none');
                $idElement.attr('data-view', 'open');
                $(this).html('<span>Скрыть товары</span>');
            }

        });
    });

})(window, jQuery);