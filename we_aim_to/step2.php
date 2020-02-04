<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/template/header.php');
?>
<main class="container steps">
    <div class="">
        <h1 class="text-center">Отлично! Теперь реши, когда крайний срок.</h1>

        <div class="quote">Дедлайн&nbsp;&mdash; важный мотиватор, ты&nbsp;должен четко понимать, когда к&nbsp;какому числу цель должна быть&nbsp;достигнута</div>


        <div class="form-row">
            <div class="col-md-6 offset-md-3 col-12">
                <form action="step3.php" method="post" class="needs-validation">

                    <div class="form-group">
                        <label for="date">Выбрать дату</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="far fa-calendar-check"></i></span>
                            </div>
                            <input type="text" class="form-control js-datepicker" id="date"  value="" required name="date" aria-describedby="dateHelp">
                        </div>
                        <small id="nameHelp" class="form-text text-muted">Важно рассчитать свои силы и указать реальный срок.</small>
                    </div>

                    <button class="btn btn-outline-success btn-pill btn-block" type="submit">Следущий шаг <i class="fas fa-angle-right"></i></button>

                </form>
            </div>

        </div>
    </div>
</main>
<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/template/footer.php');
?>
