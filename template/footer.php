<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-6">
                <img src="/images/logo.png" class="logo">
                <br>
                <span class="text-after-logo">my aims life</span>
                <br><br>
                &copy; <?=date('Y');?>
            </div>
            <div class="col-md-3 offset-md-3 col-6">
                <p><a href="#">Как это работает?</a></p>
                <p><a href="#">Для чего это нужно</a></p>
                <p><a href="#">Прайс</a></p>
            </div>
            <div class="col-md-3 col-12">
                <p>Мы в соц. сетях:</p>
                <div class="links-socials">
                    <a href="https://www.facebook.com/" target="_blank" class="ico-facebook"><span class="fab fa-facebook-f"></span></a>
                    <a href="https://vk.com/" target="_blank" class="ico-vk"><span class="fab fa-vk"></span></a>
                    <a href="https://instagram.com/myaims.life" target="_blank" class="ico-instagram"><span class="fab fa-instagram"></span></a>
                </div>

            </div>
        </div>
    </div>
</footer>



<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="auth" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="auth">Авторизация</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="js-form-auth" role="form" method="post" action="/ajax/auth.php" name="lform" id="login-form">
                    <div class="alert alert-danger js-alert-danger" style="display:none;">Пароль не верный.</div>
                    <div class="alert alert-danger js-alert-danger-login " style="display:none;">Такой пользователь не найден.</div>

                    <div class="form-group">
                        <label for="inputPhone" class="control-label user_phone_div_label_hor">E-mail</label>
                        <input type="email" autocomplete="off" class="form-control user_phone" name="USER_LOGIN" id="inputPhone" required="required" value="">
                    </div>
                    <div class="form-group">
                        <label for="inputPassword" class="control-label">Пароль</label>
                        <input type="password" class="form-control" name="USER_PASSWORD" id="inputPassword">
                    </div>
                    <div class="form-group">
                        <div class="custom-control custom-toggle">
                            <input type="checkbox" id="remember_me" name="remember_me" class="custom-control-input" value="Y">
                            <label class="custom-control-label" for="remember_me">Запомнить меня</label>
                        </div>
                    </div>
                    <div class="form-group" style="margin-bottom: 14px;">
                        <div class="">
                            <button type="submit" class="btn btn-success btn-block" name="login">Войти</button>
                        </div>
                    </div>
                    <div class="form-group" style="margin-bottom: 14px;">
                        <div class="">
                            <a href="#">Забыли пароль?</a>
                        </div>
                    </div>
                </form>

                <a class="btn btn-outline-success btn-pill btn-block" href="/registration/">Регистрация <i class="fas fa-angle-right"></i></a>

            </div>
        </div>
    </div>
</div>


<div class="xs-menu js-xs-menu">
    <div class="container">
        <div class="row">
            <div class="col-6 col-md-2 brand-name">
                <img src="/images/logo.png" class="logo">
                <span>my<br>aims<br>life</span>
            </div>
            <div class="col-md-2 col-4 text-right">
                <div class="sign-in">
                    <a href="#" class="btn btn-outline-light btn-pill" data-toggle="modal" data-target="#login">Войти <i class="fas fa-sign-in-alt"></i></a>
                </div>
            </div>
            <div class="col-2 text-right xs-show menu-burger">
                <svg aria-hidden="true" focusable="false" data-prefix="fad" data-icon="ellipsis-v-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192 512" class="js-menu-close"><g class="fa-group"><path fill="#2eb87c" d="M168 80a72 72 0 1 0-72 72 72 72 0 0 0 72-72zm-96 0a24 24 0 1 1 24 24 24 24 0 0 1-24-24zm96 352a72 72 0 1 0-72 72 72 72 0 0 0 72-72zm-96 0a24 24 0 1 1 24 24 24 24 0 0 1-24-24zm96-176a72 72 0 1 0-72 72 72 72 0 0 0 72-72zm-96 0a24 24 0 1 1 24 24 24 24 0 0 1-24-24z" class="fa-secondary"></path><path fill="#e01f5a" d="M120 80a24 24 0 1 0-24 24 24 24 0 0 0 24-24zm0 176a24 24 0 1 0-24 24 24 24 0 0 0 24-24zm0 176a24 24 0 1 0-24 24 24 24 0 0 0 24-24z" class="fa-primary"></path></g></svg>
            </div>
        </div>
        <nav>
            <ul>
                <li><a href="#">Как это работает?</a></li>
                <li><a href="#">Для чего это нужно</a></li>
                <li><a href="#">Прайс</a></li>
            </ul>
        </nav>
        <a class="btn btn-success btn-pill btn-block xs-button-reg-on-menu" href="/registration/">Регистрация <i class="fas fa-angle-right"></i></a>

    </div>
</div>




<script src="https://code.jquery.com/jquery-3.3.1.min.js"   integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="   crossorigin="anonymous"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/less.js/3.7.1/less.min.js" ></script>
<script type="text/javascript">
    var less = { env: "development" };
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js" integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe" crossorigin="anonymous"></script>
<script src="/js/shards.min.js"></script>

<script  src="/js/rellax.min.js"></script>
<script>
    if($('h1').is('.rellax')){
        // Also can pass in optional settings block
        var rellax = new Rellax('.rellax', {
            speed: -6,
            center: false,
            round: true,
        });
    }
</script>


<script src="/js/timeline/js/util.js"></script> <!-- util functions included in the CodyHouse framework -->
<script src="/js/timeline/js/swipe-content.js"></script> <!-- A Vanilla JavaScript plugin to detect touch interactions -->
<script src="/js/timeline/js/main.js"></script>

<script  src="/js/main.js?<?=rand()?>"></script>



<script>
    var file = document.getElementById("customFile");
    file.onchange = function(){
        if(file.files.length > 0)
        {
            document.getElementById('js-custom-file-label').innerHTML = file.files[0].name;
        }
    };

</script>


</body>
</html>