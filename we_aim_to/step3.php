<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/template/header.php');
?>

<main class="container steps">
    <div class="">
        <h1 class="text-center">Теперь разбей весь путь к цели на шаги</h1>

        <div class="quote">
            Одна из&nbsp;основных причин, по&nbsp;которой люди откладывают свои цели&nbsp;&mdash; это то, что они не&nbsp;знают, как действовать и&nbsp;с&nbsp;чего начать. Поэтому вы&nbsp;должны четко знать, что делать.
            <br><b>То&nbsp;есть, разбить её&nbsp;на&nbsp;маленькие шаги.</b>
        </div>


        <form action="step4.php" method="post" class="needs-validation form-row">
            <div class="col-md-6 col-12">
                <label for="step1">Шаг 1. Назвони его</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="far fa-dot-circle"></i></span>
                    </div>
                    <input type="text" class="form-control" id="step1" placeholder="Пример: Первые накопления" value="" required name="step1">
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="form-group">
                    <label for="date-step1">Выберите дату</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="far fa-calendar-check"></i></span>
                        </div>
                        <input type="text" class="form-control js-datepicker" id="date-step1"  value="" required name="date-step1">
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="form-group">
                    <label for="repeatstep1">Повторение</label>
                    <select class="custom-select" id="repeatstep1" name="repeatstep1">
                        <option value="0" selected>Не повторять</option>
                        <option value="1">Каждый день</option>
                        <option value="2">Раз в неделю</option>
                        <option value="3">Раз в месяц</option>
                    </select>
                </div>
            </div>

            <div class="col-md-6 col-12">
                <label for="step2">Шаг 2. Назвони его</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="far fa-dot-circle"></i></span>
                    </div>
                    <input type="text" class="form-control" id="step2" placeholder="Пример: Первые накопления" value="" required name="step2">
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="form-group">
                    <label for="date-step2">Выберите дату</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="far fa-calendar-check"></i></span>
                        </div>
                        <input type="text" class="form-control js-datepicker" id="date-step2"  value="" required name="date-step2">
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="form-group">
                    <label for="repeatstep2">Повторение</label>
                    <select class="custom-select" id="repeatstep2" name="repeatstep2">
                        <option value="0" selected>Не повторять</option>
                        <option value="1">Каждый день</option>
                        <option value="2">Раз в неделю</option>
                        <option value="3">Раз в месяц</option>
                    </select>
                </div>
            </div>

            <div class="col-12">
                <div class="js-add-more-steps" data-id="2">

                </div>
            </div>

            <div class="col-md-3 col-12 xs-mb-2">
                <button class="btn btn-outline-info btn-pill btn-block js-add-steps-button" type="button">Добавить ещё шаг <i class="fas fa-plus"></i></button>
            </div>
            <div class="col-12"></div>
            <div class="col-md-6 offset-md-3 col-12">
                <button class="btn btn-outline-success btn-pill btn-block" type="submit">Следущий шаг <i class="fas fa-angle-right"></i></button>
            </div>
        </form>
    </div>
</main>

<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/template/footer.php');
?>
