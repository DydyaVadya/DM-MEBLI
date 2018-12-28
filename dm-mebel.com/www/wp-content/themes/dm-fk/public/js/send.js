// Маска для номера телефона
!function(a){"function"==typeof define&&define.amd?define(["jquery"],a):a("object"==typeof exports?require("jquery"):jQuery)}(function(a){var b,c=navigator.userAgent,d=/iphone/i.test(c),e=/chrome/i.test(c),f=/android/i.test(c);a.mask={definitions:{9:"[0-9]",a:"[A-Za-z]","*":"[A-Za-z0-9]"},autoclear:!0,dataName:"rawMaskFn",placeholder:"_"},a.fn.extend({caret:function(a,b){var c;if(0!==this.length&&!this.is(":hidden"))return"number"==typeof a?(b="number"==typeof b?b:a,this.each(function(){this.setSelectionRange?this.setSelectionRange(a,b):this.createTextRange&&(c=this.createTextRange(),c.collapse(!0),c.moveEnd("character",b),c.moveStart("character",a),c.select())})):(this[0].setSelectionRange?(a=this[0].selectionStart,b=this[0].selectionEnd):document.selection&&document.selection.createRange&&(c=document.selection.createRange(),a=0-c.duplicate().moveStart("character",-1e5),b=a+c.text.length),{begin:a,end:b})},unmask:function(){return this.trigger("unmask")},mask:function(c,g){var h,i,j,k,l,m,n,o;if(!c&&this.length>0){h=a(this[0]);var p=h.data(a.mask.dataName);return p?p():void 0}return g=a.extend({autoclear:a.mask.autoclear,placeholder:a.mask.placeholder,completed:null},g),i=a.mask.definitions,j=[],k=n=c.length,l=null,a.each(c.split(""),function(a,b){"?"==b?(n--,k=a):i[b]?(j.push(new RegExp(i[b])),null===l&&(l=j.length-1),k>a&&(m=j.length-1)):j.push(null)}),this.trigger("unmask").each(function(){function h(){if(g.completed){for(var a=l;m>=a;a++)if(j[a]&&C[a]===p(a))return;g.completed.call(B)}}function p(a){return g.placeholder.charAt(a<g.placeholder.length?a:0)}function q(a){for(;++a<n&&!j[a];);return a}function r(a){for(;--a>=0&&!j[a];);return a}function s(a,b){var c,d;if(!(0>a)){for(c=a,d=q(b);n>c;c++)if(j[c]){if(!(n>d&&j[c].test(C[d])))break;C[c]=C[d],C[d]=p(d),d=q(d)}z(),B.caret(Math.max(l,a))}}function t(a){var b,c,d,e;for(b=a,c=p(a);n>b;b++)if(j[b]){if(d=q(b),e=C[b],C[b]=c,!(n>d&&j[d].test(e)))break;c=e}}function u(){var a=B.val(),b=B.caret();if(o&&o.length&&o.length>a.length){for(A(!0);b.begin>0&&!j[b.begin-1];)b.begin--;if(0===b.begin)for(;b.begin<l&&!j[b.begin];)b.begin++;B.caret(b.begin,b.begin)}else{for(A(!0);b.begin<n&&!j[b.begin];)b.begin++;B.caret(b.begin,b.begin)}h()}function v(){A(),B.val()!=E&&B.change()}function w(a){if(!B.prop("readonly")){var b,c,e,f=a.which||a.keyCode;o=B.val(),8===f||46===f||d&&127===f?(b=B.caret(),c=b.begin,e=b.end,e-c===0&&(c=46!==f?r(c):e=q(c-1),e=46===f?q(e):e),y(c,e),s(c,e-1),a.preventDefault()):13===f?v.call(this,a):27===f&&(B.val(E),B.caret(0,A()),a.preventDefault())}}function x(b){if(!B.prop("readonly")){var c,d,e,g=b.which||b.keyCode,i=B.caret();if(!(b.ctrlKey||b.altKey||b.metaKey||32>g)&&g&&13!==g){if(i.end-i.begin!==0&&(y(i.begin,i.end),s(i.begin,i.end-1)),c=q(i.begin-1),n>c&&(d=String.fromCharCode(g),j[c].test(d))){if(t(c),C[c]=d,z(),e=q(c),f){var k=function(){a.proxy(a.fn.caret,B,e)()};setTimeout(k,0)}else B.caret(e);i.begin<=m&&h()}b.preventDefault()}}}function y(a,b){var c;for(c=a;b>c&&n>c;c++)j[c]&&(C[c]=p(c))}function z(){B.val(C.join(""))}function A(a){var b,c,d,e=B.val(),f=-1;for(b=0,d=0;n>b;b++)if(j[b]){for(C[b]=p(b);d++<e.length;)if(c=e.charAt(d-1),j[b].test(c)){C[b]=c,f=b;break}if(d>e.length){y(b+1,n);break}}else C[b]===e.charAt(d)&&d++,k>b&&(f=b);return a?z():k>f+1?g.autoclear||C.join("")===D?(B.val()&&B.val(""),y(0,n)):z():(z(),B.val(B.val().substring(0,f+1))),k?b:l}var B=a(this),C=a.map(c.split(""),function(a,b){return"?"!=a?i[a]?p(b):a:void 0}),D=C.join(""),E=B.val();B.data(a.mask.dataName,function(){return a.map(C,function(a,b){return j[b]&&a!=p(b)?a:null}).join("")}),B.one("unmask",function(){B.off(".mask").removeData(a.mask.dataName)}).on("focus.mask",function(){if(!B.prop("readonly")){clearTimeout(b);var a;E=B.val(),a=A(),b=setTimeout(function(){B.get(0)===document.activeElement&&(z(),a==c.replace("?","").length?B.caret(0,a):B.caret(a))},10)}}).on("blur.mask",v).on("keydown.mask",w).on("keypress.mask",x).on("input.mask paste.mask",function(){B.prop("readonly")||setTimeout(function(){var a=A(!0);B.caret(a),h()},0)}),e&&f&&B.off("input.mask").on("input.mask",u),A()})}})});
jQuery(function ($) {
    $('input[type="tel"]').focus(function () {
        // $('#error-msg').remove();
        $(this).val('+380(');
        $(this).mask("+38(999)999-99-99");
    });
    $(document).ready(function () {
        $('input[type="tel"]').keypress(function (e) {
            if (!(e.which == 8 || e.which == 44 || e.which == 45 || e.which == 46 || (e.which > 47 && e.which < 58))) return false;
        });
    });

    // $('input[type="tel"]').on('keyup', function(event) {
    //     console.log($(this).val().length);
    //     console.log($(this).val());
       // if($(this).val.length = 17) {
       //     $(this).addClass("sex");
       //     $(this).removeClass("error");
       //     $(this).css({
       //         'border-top-color': '#2fcc46',
       //         'border-right-color': '#2fcc46',
       //         'border-bottom-color': '#2fcc46',
       //         'border-left-color': '#2fcc46',
       //     });
       //
       // }else{
       //     $(this).addClass("error");
       // }

    // });
});
(function(wiondow, $){

    $(document).ready(function (jQuery) {

        $('#callback-modal form').submit(function(e){

            var target = e.currentTarget.parentNode;
            e.preventDefault();

            let formData = {
                name_callback: $("#name-callback").val(),
                tel_callback : $("#tel-callback").val(),
                textarea     : $(this).find('textarea').val(),
                type         : 'backcall',
            }

            if(formData.tel_callback.length < 17){
                // $(target).append( "<p id='error-msg' style='color: red; display: none;'>Введите корректный номер телефона!!</p>" );
                $(target).find('#error-msg').css({
                    'display': 'block',

                });
                $('input[type="tel"]').css({
                                'border-top-color': '#ec9c9c',
                                'border-right-color': '#ec9c9c',
                                'border-bottom-color': '#ec9c9c',
                               'border-left-color': '#ec9c9c',
                            });
                // alert("Введите корректный номер телефона!");
                return false;
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
                    $(target).find('#error-msg').css({
                        'display': 'none',

                    });

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

            var target = e.currentTarget.parentNode;
            e.preventDefault();
            let formData = {
                name_callback: $("#name-consultation").val(),
                tel_callback : $("#tel-consultation").val(),
                type         : 'consultation',
            }
            // if(formData.tel_callback.length < 17){
            //     alert("Введите номер!");
            //     return false;
            // }
            if(formData.tel_callback.length < 17){
                $(target).find('#error-msg').css({
                    'display': 'block',

                });
                // $(target).append( "<p id='error-msg' style='color: red;'>Введите корректный номер телефона!!</p>" );
                $('input[type="tel"]').css({
                    'border-top-color': '#ec9c9c',
                    'border-right-color': '#ec9c9c',
                    'border-bottom-color': '#ec9c9c',
                    'border-left-color': '#ec9c9c',
                });
                // alert("Введите корректный номер телефона!");
                return false;
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
                    $(target).find('#error-msg').css({
                        'display': 'none',

                    });

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
            var target = e.currentTarget.parentNode;
            e.preventDefault();

            let formData = {
                // tel_callback  : $("#tel-consultation").val(),
                tel_callback : $(this).find('.detail-tel').val(),
                name_callback : $(this).find('.detail-name').val(),
                img_callback  : $(this).find('.detail-img').val(),
                dasc_callback : $(this).find('.detail-desc').val(),
                type         : 'call',
            }
            if(formData.tel_callback.length < 17){
                $(target).find('#error-msg').css({
                    'display': 'block',

                });
                // $(target).append( "<p id='error-msg' style='color: red;'>Введите корректный номер телефона!!</p>" );
                $('input[type="tel"]').css({
                    'border-top-color': '#ec9c9c',
                    'border-right-color': '#ec9c9c',
                    'border-bottom-color': '#ec9c9c',
                    'border-left-color': '#ec9c9c',
                });
                return false;
            }
            console.log(formData);
            $.post('https://' + location.hostname + '/send/message.php', formData, function(data){
                $(target).find('#error-msg').css({
                    'display': 'none',

                });
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
