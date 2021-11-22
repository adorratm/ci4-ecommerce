<!-- Extend Layer -->
<?php $this->extend('admin/layout/main') ?>

<!-- Style -->
<?php $this->section("style") ?>
<?php $this->endSection() ?>
<!-- #Style -->

<!-- Content -->
<?php $this->section('content') ?>
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
                <div class="login-brand">
                    <img src="<?= base_url("public/admin/img/stisla-fill.svg") ?>" alt="logo" width="100" class="shadow-light rounded-circle">
                </div>

                <div class="card card-primary">
                    <div class="card-header"><h4><?= lang("Register.view.title") ?></h4></div>

                    <div class="card-body">
                        <?= $this->include("admin/layout/partials/errors") ?>
                        <form method="POST" action="<?= base_url(route_to("admin_register")) ?>">
                            <div class="row">
                                <div class="form-group col-6">
                                    <label for="first_name"><?= lang("Register.view.first_name") ?></label>
                                    <input id="first_name" type="text" class="form-control" name="first_name" placeholder="<?= lang("Register.view.first_name") ?>" autofocus required>
                                    <div class="invalid-feedback">
                                    </div>
                                </div>
                                <div class="form-group col-6">
                                    <label for="sur_name"><?= lang("Register.view.last_name") ?></label>
                                    <input id="sur_name" type="text" class="form-control" placeholder="<?= lang("Register.view.last_name") ?>" name="sur_name" required>
                                    <div class="invalid-feedback">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="email"><?= lang("Register.view.email") ?></label>
                                <input id="email" type="email" class="form-control" placeholder="<?= lang("Register.view.email") ?>" name="email" required>
                                <div class="invalid-feedback">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="phone"><?= lang("Register.view.phone") ?></label>
                                <input id="phone" type="text" class="form-control" placeholder="<?= lang("Register.view.phone") ?>" name="phone" required>
                                <div class="invalid-feedback">
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-6">
                                    <label for="password" class="d-block"><?= lang("Register.view.password") ?></label>
                                    <input id="password" type="password" class="form-control pwstrength" data-indicator="pwindicator" placeholder="<?= lang("Register.view.password") ?>" name="password" required>
                                    <div id="pwindicator" class="pwindicator w-100">
                                        <div class="bar"></div>
                                        <div class="label fw-bold"></div>
                                        <div class="match-label w-100 fw-bold text-danger"></div>
                                    </div>
                                </div>
                                <div class="form-group col-6">
                                    <label for="password_conf" class="d-block"><?= lang("Register.view.password_conf") ?></label>
                                    <input id="password_conf" type="password" class="form-control pwstrength" name="password_conf" placeholder="<?= lang("Register.view.password_conf") ?>" data-indicator="pwindicatorconf">
                                    <div id="pwindicatorconf" class="pwindicator w-100">
                                        <div class="bar"></div>
                                        <div class="label fw-bold"></div>
                                        <div class="match-label w-100 fw-bold text-danger"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" name="agree" class="custom-control-input" id="agree" required>
                                    <label class="custom-control-label" for="agree"><?= lang("Register.view.contract") ?></label>
                                </div>
                            </div>

                            <div class="form-group">
                                <button id="submitbutton" type="submit" class="btn btn-primary btn-lg btn-block">
                                    <?= lang("Register.view.register") ?>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="simple-footer">
                    Copyright &copy; Stisla 2018
                </div>
            </div>
        </div>
    </div>
</section>
<?php $this->endSection() ?>
<!-- #Content -->

<!-- Script -->
<?php $this->section("script") ?>

<!-- Custom Scripts -->
<script>
    let pwstrenght_score = 0;
    $(function () {
        /**
         * Pwstrength i18n
         */
        i18next.init({
            lng: '<?=lang("Register.view.lang")?>',
            resources: {
                '<?=lang("Register.view.lang")?>': {
                    translation: {
                        "wordLength": "<?=lang("Register.view.wordLength")?>",
                        "wordNotEmail": "<?=lang("Register.view.wordNotEmail")?>",
                        "wordSimilarToUsername": "<?=lang("Register.view.wordSimilarToUsername")?>",
                        "wordTwoCharacterClasses": "<?=lang("Register.view.wordTwoCharacterClasses")?>",
                        "wordRepetitions": "<?=lang("Register.view.wordRepetitions")?>",
                        "wordSequences": "<?=lang("Register.view.wordSequences")?>",
                        "errorList": "<?=lang("Register.view.errorList")?>",
                        "veryWeak": "<?=lang("Register.view.veryWeak")?>",
                        "weak": "<?=lang("Register.view.weak")?>",
                        "normal": "<?=lang("Register.view.normal")?>",
                        "medium": "<?=lang("Register.view.medium")?>",
                        "strong": "<?=lang("Register.view.strong")?>",
                        "veryStrong": "<?=lang("Register.view.veryStrong")?>",
                    }
                }
            }
        }, function () {
            let options = {};
            options.common = {
                //usernameField: "#username"
                onKeyUp: function (evt, data) {
                    pwstrenght_score = data.score;
                }
            };
            options.rules = {
                activated: {
                    wordMaxLength: true,
                    wordInvalidChar: true
                }
            };
            $(".pwstrength").each(function () {
                $(this).pwstrength(options);
            });
        });
        $("#password, #password_conf").keyup(PasswordMatch);
    });

    /**
     * Password Matcher
     * @constructor
     */
    function PasswordMatch() {
        let password = $("#password").val();
        let password_conf = $("#password_conf").val();

        if (password !== password_conf) {
            $(".match-label").show();
            $(".match-label").text("<?=lang("Register.view.notMatch")?>");
            $("#submitbutton").prop("disabled", true);
        } else if (pwstrenght_score >= 14) {
            $(".match-label").hide();
            $(".match-label").text("");
            $("#submitbutton").prop("disabled", false);
        } else {
            $(".match-label").show();
            $(".match-label").text("<?=lang("Register.view.notMatch")?>");
            $("#submitbutton").prop("disabled", true);
        }
    }
</script>
<!-- Custom Scripts -->

<?php $this->endSection() ?>
<!-- #Script -->
