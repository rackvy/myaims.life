<?php
$TITLE = 'Регистрация нового пользователя';
require_once($_SERVER['DOCUMENT_ROOT'] . '/template/header.php');
?>

    <main class="container steps">
        <div class="">
            <h1 class="text-center">Регистрация нового пользователя</h1>

            <div class="quote">
                Мы рады приветствовать тебя. Мы поможем достигнуть любых твоих целей. Грамотно ее сформулировать и поставить.
            </div>



            <div class="form-row">
                <div class="col-md-6 offset-md-3">
                    <form action="index.php" method="post" class="needs-validation">

                        <div class="form-group">
                            <label for="email">E-mail <span class="color-red">*</span></label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                </div>
                                <input type="email" class="form-control" id="email" value="" required name="login" placeholder="my-account@email.com">
                            </div>
                            <small class="form-text text-muted">Ваш электронный адрес будет использоваться как логин при авторизации.</small>

                        </div>
                        <div class="form-group">
                            <label for="password">Пароль <span class="color-red">*</span></label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-unlock"></i></span>
                                </div>
                                <input type="password" class="form-control" id="password" value="" required name="password" minlength="6">
                            </div>
                            <small class="form-text text-muted">Минимальная длина 6 символов.</small>

                        </div>

                        <div class="form-group">
                            <label for="name">Имя и фамилия</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                </div>
                                <input type="text" class="form-control" id="name" value="" required name="name">
                            </div>
                            <small class="form-text text-muted">Не является обязательным.</small>

                        </div>



                        <br>
                        <button class="btn btn-outline-success btn-pill btn-block" type="submit">Зарегистрировать <i class="far fa-dot-circle"></i></button>

                    </form>
                </div>

            </div>

        </div>
    </main>

<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/template/footer.php');
?>
