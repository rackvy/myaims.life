<?php
$TITLE = 'Конструктор постановки цели';
require_once($_SERVER['DOCUMENT_ROOT'] . '/template/header.php');
?>
<form method="post">

    <div class="steps-tab">
        <div class="container">
            <ul>
                <li class="js-tab-setp1 active-step" data-step="1">
                    Шаг 1
                </li>
                <li class="js-tab-setp2 disabled-tab" data-step="2">
                    Шаг 2
                </li>
                <li class="js-tab-setp3 disabled-tab" data-step="3">
                    Шаг 3
                </li>
                <li class="js-tab-setp4 disabled-tab"data-step="4">
                    Шаг 4
                </li>
            </ul>
        </div>
    </div>
<main class="container steps step1 js-step1">
    <div class="">
        <h1 class="text-center">Привет! Это первый шаг к твоей цели!</h1>
        <div class="quote">
            Назови свою цель, придумай имя и подробно опиши её.
        </div>


        <div class="form-row">
            <div class="col-md-6 offset-md-3 col-12">

                    <div class="form-group">
                        <label for="name">Назови свою цель</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="far fa-dot-circle"></i></span>
                            </div>
                            <input type="text" class="form-control" id="name" placeholder="Пример: новая машина" value="" name="name" aria-describedby="nameHelp">
                        </div>
                        <small id="nameHelp" class="form-text text-muted">Локаничное название вашей цели без подробного описания</small>
                    </div>

                    <div class="form-group">
                        <label for="description">Опиши свою цель</label>
                        <textarea class="form-control" id="description" rows="3" name="description"  aria-describedby="descHelp"></textarea>
                        <small id="descHelp" class="form-text text-muted">Подробно опиши конечную цель, все подробности, каждую мелочь. Цель должна быть четкой и ясной</small>
                    </div>

                    <div class="form-group">
                        <div class="custom-control custom-toggle">
                            <input type="checkbox" id="priceCheckbox" name="price-checked" class="custom-control-input js-priceCheckbox">
                            <label class="custom-control-label" for="priceCheckbox">Добавить цену (если у цели есть цена)</label>
                        </div>
                    </div>

                    <div class="form-group js-field-price" style="display: none;">
                        <label for="price">Стоимость</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="far fa-money-bill-alt"></i></span>
                            </div>
                            <input type="number" class="form-control" id="price" placeholder="100 000" value=""  name="price" aria-describedby="priceHelp">
                        </div>
                        <small id="priceHelp" class="form-text text-muted">Если цель материальна, то скорее всего у неё есть цена</small>

                    </div>

                    <div class="form-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="customFile">
                            <label class="custom-file-label" id="js-custom-file-label" for="customFile">Добавить фото</label>
                        </div>
                    </div>

                    <button class="btn btn-outline-success btn-pill btn-block js-step1-go-step2" type="button">Следущий шаг <i class="fas fa-angle-right"></i></button>

            </div>

        </div>
    </div>
</main>
<main class="container steps step2 js-step2">
    <div class="">
        <h1 class="text-center">Отлично! Теперь реши, когда крайний срок.</h1>

        <div class="quote">Дедлайн&nbsp;&mdash; важный мотиватор, ты&nbsp;должен четко понимать, когда к&nbsp;какому числу цель должна быть&nbsp;достигнута</div>


        <div class="form-row">
            <div class="col-md-6 offset-md-3 col-12">

                    <div class="form-group">
                        <label for="date">Выбрать дату</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="far fa-calendar-check"></i></span>
                            </div>
                            <input type="text" class="form-control js-datepicker" id="date"  value=""  name="date" aria-describedby="dateHelp">
                        </div>
                        <small id="nameHelp" class="form-text text-muted">Важно рассчитать свои силы и указать реальный срок.</small>
                    </div>

                    <button class="btn btn-outline-success btn-pill btn-block js-step2-go-step3" type="button">Следущий шаг <i class="fas fa-angle-right"></i></button>

            </div>

        </div>
    </div>
</main>
<main class="container steps step3 js-step3">
    <div class="">
        <h1 class="text-center">Теперь разбей весь путь к цели на шаги</h1>

        <div class="quote">
            Одна из&nbsp;основных причин, по&nbsp;которой люди откладывают свои цели&nbsp;&mdash; это то, что они не&nbsp;знают, как действовать и&nbsp;с&nbsp;чего начать. Поэтому вы&nbsp;должны четко знать, что делать.
            <br><b>То&nbsp;есть, разбить её&nbsp;на&nbsp;маленькие шаги.</b>
        </div>

        <div class="form-row">
            <div class="col-md-6 col-12">
                <label for="step1">Шаг 1. Назови его</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="far fa-dot-circle"></i></span>
                    </div>
                    <input type="text" class="form-control" id="step1" placeholder="Пример: Первые накопления" value=""  name="step[1][name]">
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="form-group">
                    <label for="date-step1">Выберите дату</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="far fa-calendar-check"></i></span>
                        </div>
                        <input type="text" class="form-control js-datepicker" id="date-step1"  value="" name="step[1][date]">
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="form-group">
                    <label for="repeatstep1">Повторение</label>
                    <select class="custom-select" id="repeatstep1" name="step[1][repeatstep]">
                        <option value="0" selected>Не повторять</option>
                        <option value="1">Каждый день</option>
                        <option value="2">Раз в неделю</option>
                        <option value="3">Раз в месяц</option>
                    </select>
                </div>
            </div>
            <div class="col-12 mb-4">
                <div class="form-group">
                    <label for="description1">Описание</label>
                    <textarea class="form-control" id="description1" name="step[1][description]"></textarea>
                </div>
            </div>

            <div class="col-md-6 col-12">
                <label for="step1">Шаг 2. Назови его</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="far fa-dot-circle"></i></span>
                    </div>
                    <input type="text" class="form-control" id="step1" placeholder="Пример: Первые накопления" value=""  name="step[2][name]">
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="form-group">
                    <label for="date-step1">Выберите дату</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="far fa-calendar-check"></i></span>
                        </div>
                        <input type="text" class="form-control js-datepicker" id="date-step1"  value="" name="step[2][date]">
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="form-group">
                    <label for="repeatstep1">Повторение</label>
                    <select class="custom-select" id="repeatstep1" name="step[2][repeatstep]">
                        <option value="0" selected>Не повторять</option>
                        <option value="1">Каждый день</option>
                        <option value="2">Раз в неделю</option>
                        <option value="3">Раз в месяц</option>
                    </select>
                </div>
            </div>
            <div class="col-12 mb-4">
                <div class="form-group">
                    <label for="description1">Описание</label>
                    <textarea class="form-control" id="description1" name="step[2][description]"></textarea>
                </div>
            </div>

            <div class="col-12">
                <div class="js-add-more-steps row" data-id="2">

                </div>
            </div>

            <div class="col-md-3 col-12 mb-4">
                <button class="btn btn-outline-info btn-pill btn-block js-add-steps-button" type="button">Добавить ещё шаг <i class="fas fa-plus"></i></button>
            </div>
            <div class="col-12"></div>
            <div class="col-md-6 offset-md-3 col-12">
                <button class="btn btn-outline-success btn-pill btn-block js-step3-go-step4" type="button">Следущий шаг <i class="fas fa-angle-right"></i></button>
            </div>
        </div>
    </div>
</main>
<main class="container steps  step4 js-step4">
    <div class="">
        <h1 class="text-center">Поздравляю! Осталось кое что ещё.</h1>

        <div class="quote">
            Раскроем тебе один секрет, когда ты подельшься с человеком своей целью,
            то тебе сложнее будет отказаться от нее. Теперь о ней знают и,
            что бы не выглядеть не целеустремленным отказаться от цели сложнее.
        </div>
        <div class="quote">
            Подпиши своих друзей, мы будем уведомлять их о твои достижениях.
        </div>



        <div class="form-row">
            <div class="col-md-6 offset-md-3 col-12">

                    <div class="form-group">
                        <label>E-mail друга</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user-friends"></i></span>
                            </div>
                            <input type="email" class="form-control" value=""  name="email[]" placeholder="my-friend@email.com">
                        </div>
                    </div>
                    <div class="js-add-more-friends">

                    </div>



                    <div class="row">
                        <div class="col-md-6 col-12 xs-mb-1">
                            <div class="form-group">
                                <button class="btn btn-outline-info btn-pill btn-block js-add-friends-button" type="button">Добавить ещё друга <i class="fas fa-plus"></i></button>
                            </div>
                        </div>
                    </div>


                    <button class="btn btn-success btn-pill btn-block" type="submit">Поставить цель <i class="far fa-dot-circle"></i></button>

            </div>

        </div>

    </div>
</main>
</form>
<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/template/footer.php');
?>