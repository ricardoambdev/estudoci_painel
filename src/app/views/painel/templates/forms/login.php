<!-- LOGIN FORM -->
<form action="<?php base_url('users/login'); ?>" method="post" accept-charset="utf-8" novalidate>
    <div id="pane-login" class="panel-body active"><!-- login.panel-body -->

        <h2>Entrar no Sistema</h2><!-- login title -->

        <div class="form-group"><!-- email form-group-->
            <div class="inputer">
                <div class="input-wrapper">
                    <?php echo form_error('email','<div class="login-error login-error-email pull-right">','<i class="fa fa-warning fa-lg"></i></div>');?>
                    <input type="email" class="form-control" name="email" id="email" placeholder="E-mail" autocomplete="off">
                </div>
            </div>
        </div><!-- end email form-group-->

        <div class="form-group"><!-- senha form-group -->
            <div class="inputer">
                <div class="input-wrapper">
                    <?php echo form_error('senha','<div class="login-error login-error-email pull-right">','<i class="fa fa-warning fa-lg"></i></div>');?>
                    <input type="password" class="form-control" name="senha" id="senha" placeholder="Senha">
                </div>
            </div>
        </div><!-- end senha form-group -->

        <div class="form-buttons clearfix"><!-- form-buttons -->
            <div class="checkboxer pull-left" style="margin-left:35px;">
                <input type="checkbox" id="checkboxRemember" value="remember">
                <label for="checkboxRemember">Lembrar de mim</label>
            </div>
            <button type="submit" class="btn btn-success pull-right">Entrar</button>
        </div><!-- end form-buttons-->

        <ul class="extra-links">
            <li><a class="show-pane-forgot-password" style="cursor: pointer;">Esqueci a senha</a></li>
            <li><a class="show-pane-create-account" style="cursor: pointer;">Não sou registrado</a></li>
        </ul>

    </div><!-- end login.panel-body -->
</form>
<!-- END LOGIN FORM -->