<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/template/header.php');
?>

<main class="container steps">
    <div class="">
        <h1 class="text-center">Поздравляю! Осталось кое что ещё.</h1>

        <div class="quote">
            Раскроем тебе один секрет, когда ты подельшься с человеком своей целью,
            то тебе сложнее будет отказаться от нее. Теперь о ней знают и,
            что бы не выглядеть не целеустремленным отказаться от цели сложнее.
        </div>
        <div class="quote">
            Подпиши своих друзей, мы будем уведомлять их о твои достижениях.</b>
        </div>



        <div class="form-row">
            <div class="col-md-6 offset-md-3 col-12">
                <form action="personal.php" method="post" class="needs-validation">

                    <div class="form-group">
                        <label>E-mail друга</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user-friends"></i></span>
                            </div>
                            <input type="email" class="form-control" value="" required name="email[]" placeholder="my-friend@email.com">
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

                </form>
            </div>

        </div>

    </div>
</main>

<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/template/footer.php');
?>
