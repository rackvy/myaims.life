$(document).ready(function () {
    $('.js-priceCheckbox').on('click', function () {
        if($(this).prop("checked")){
            $('.js-field-price').show();
        }else{
            $('.js-field-price').hide();
        }


       //return false;
    });

	$('.js-menu-open').on('click', function(){
		$('body').addClass('overflow-hidden');
		$('.js-xs-menu').css('left', '0px');
		return false;
	});
	$('.js-menu-close').on('click', function(){
		$('body').removeClass('overflow-hidden');
		$('.js-xs-menu').css('left', '-100vw');
		return false;
	});



    $('.js-datepicker').datepicker({
        format: "dd.mm.yyyy",
        weekStart: 1,
        language: "ru",
    });

    $('.js-add-steps-button').on('click', function () {
        var id = $('.js-add-more-steps').data('id');
        id++;
        $('.js-add-more-steps').data('id', id);


        var htmlTemlete = '<div class="col-md-6 col-12">\n' +
            '                <label for="step1">Шаг '+ id +'. Назови его</label>\n' +
            '                <div class="input-group">\n' +
            '                    <div class="input-group-prepend">\n' +
            '                        <span class="input-group-text"><i class="far fa-dot-circle"></i></span>\n' +
            '                    </div>\n' +
            '                    <input type="text" class="form-control" id="step1" placeholder="Пример: Первые накопления" value=""  name="step['+ id +'][name]">\n' +
            '                </div>\n' +
            '            </div>\n' +
            '            <div class="col-md-3 col-6">\n' +
            '                <div class="form-group">\n' +
            '                    <label for="date-step1">Выберите дату</label>\n' +
            '                    <div class="input-group">\n' +
            '                        <div class="input-group-prepend">\n' +
            '                            <span class="input-group-text"><i class="far fa-calendar-check"></i></span>\n' +
            '                        </div>\n' +
            '                        <input type="text" class="form-control js-datepicker" id="date-step1"  value="" name="step['+ id +'][date]">\n' +
            '                    </div>\n' +
            '                </div>\n' +
            '            </div>\n' +
            '            <div class="col-md-3 col-6">\n' +
            '                <div class="form-group">\n' +
            '                    <label for="repeatstep1">Повторение</label>\n' +
            '                    <select class="custom-select" id="repeatstep1" name="step['+ id +'][repeatstep]">\n' +
            '                        <option value="0" selected>Не повторять</option>\n' +
            '                        <option value="1">Каждый день</option>\n' +
            '                        <option value="2">Раз в неделю</option>\n' +
            '                        <option value="3">Раз в месяц</option>\n' +
            '                    </select>\n' +
            '                </div>\n' +
            '            </div>\n' +
            '            <div class="col-12 mb-4">\n' +
            '                <div class="form-group">\n' +
            '                    <label for="description1">Описание</label>\n' +
            '                    <textarea class="form-control" id="description1" name="step['+ id +'][description]"></textarea>\n' +
            '                </div>\n' +
            '            </div>';

        $('.js-add-more-steps').append(htmlTemlete);

        $('#date-step'+id).datepicker({
            format: "dd.mm.yyyy",
            weekStart: 1,
            language: "ru",
        });

        return false;
    });

    $('.js-add-friends-button').on('click', function () {



        var htmlTemlete = '<div class="form-group">\n' +
            '                        <label>E-mail друга</label>\n' +
            '                        <div class="input-group">\n' +
            '                            <div class="input-group-prepend">\n' +
            '                                <span class="input-group-text"><i class="fas fa-user-friends"></i></span>\n' +
            '                            </div>\n' +
            '                            <input type="email" class="form-control" value="" required name="email[]" placeholder="my-friend@email.com">\n' +
            '                        </div>\n' +
            '                    </div>';

        $('.js-add-more-friends').append(htmlTemlete);


        return false;
    });

    $('.js-step1-go-step2').on('click', function () {
        var nameGoal, descGoal, priceGoal, countErrors = 0;
        $('input').removeClass('is-invalid');
        $('textarea').removeClass('is-invalid');

        nameGoal = $('input[name="name"]').val();
        descGoal = $('textarea[name="description"]').val();

        if($('.js-priceCheckbox').prop("checked")){
            priceGoal = $('input[name="price"]').val();
        }else{
            priceGoal = '';
        }

        if(nameGoal.length == 0){
            $('input[name="name"]').addClass('is-invalid');
            countErrors++;
        }
        if(descGoal.length == 0){
            $('textarea[name="description"]').addClass('is-invalid');
            countErrors++;
        }
        if($('.js-priceCheckbox').prop("checked") && priceGoal.length == 0){
            $('input[name="price"]').addClass('is-invalid');
            countErrors++;
        }

        if(countErrors == 0){
            $('.js-step1').hide();
            $('.js-step2').show();

            $('.js-tab-setp1').removeClass('active-step');
            $('.js-tab-setp1').addClass('complete-tab');

            $('.js-tab-setp2').addClass('active-step');
            $('.js-tab-setp2').removeClass('disabled-tab');

        }
        return false;
    });

    $('.js-step2-go-step3').on('click', function () {
        var dateGoal;
        $('input').removeClass('is-invalid');
        $('textarea').removeClass('is-invalid');

        dateGoal = $('input[name="date"]').val();

        if(dateGoal.length == 0){
            $('input[name="date"]').addClass('is-invalid');
        }else{
            $('.js-step2').hide();
            $('.js-step3').show();

            $('.js-tab-setp2').removeClass('active-step');
            $('.js-tab-setp2').addClass('complete-tab');

            $('.js-tab-setp3').addClass('active-step');
            $('.js-tab-setp3').removeClass('disabled-tab');
        }
        return false;
    });

    $('.js-step3-go-step4').on('click', function () {
        var countErrors = 0;
        $('input').removeClass('is-invalid');
        $('textarea').removeClass('is-invalid');

        $('.js-step3 input').each(function () {
            if($(this).val().length === 0)
            {
                $(this).addClass('is-invalid');
                countErrors++;
            }
        });
        if(countErrors == 0){
            $('.js-step3').hide();
            $('.js-step4').show();

            $('.js-tab-setp3').removeClass('active-step');
            $('.js-tab-setp3').addClass('complete-tab');

            $('.js-tab-setp4').addClass('active-step');
            $('.js-tab-setp4').removeClass('disabled-tab');

        }
        return false;
    });

    $(document).on('click', '.complete-tab', function () {
        var step = $(this).data('step');
        $('li.active-step').addClass('complete-tab');
        $('li.active-step').removeClass('active-step');
        $(this).addClass('active-step');
        $(this).removeClass('complete-tab');

        $('.steps').hide();
        $('.js-step'+step).show();

        return false;
    });

    // $('.js-step3-go-step4').on('click', function () {
    //
    // });


});