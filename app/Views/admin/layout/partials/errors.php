<?php if (session()->has('errors')): ?>
    <?php if (is_array(session()->errors)): ?>
        <?php foreach (session()->errors as $key => $value): ?>
            <div class="alert alert-warning alert-has-icon alert-dismissible show fade">
                <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
                <div class="alert-body">
                    <div class="alert-title"><?=lang("Error.view.warning")?></div>
                    <?=$value?>
                </div>
            </div>
        <?php endforeach ?>
    <?php else: ?>
        <div class="alert alert-warning alert-has-icon alert-dismissible show fade">
            <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
            <div class="alert-body">
                <div class="alert-title"><?=lang("Error.view.warning")?></div>
                <?=session()->errors?>
            </div>
        </div>
    <?php endif ?>
<?php endif ?>

<?php if (session()->has('success')): ?>
    <?php if (is_array(session()->success)): ?>
        <?php foreach (session()->success as $key => $value): ?>
            <div class="alert alert-success alert-has-icon alert-dismissible show fade">
                <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
                <div class="alert-body">
                    <div class="alert-title"><?=lang("Error.view.success")?></div>
                    <?=$value?>
                </div>
            </div>
        <?php endforeach ?>
    <?php else: ?>
        <div class="alert alert-success alert-has-icon alert-dismissible show fade">
            <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
            <div class="alert-body">
                <div class="alert-title"><?=lang("Error.view.success")?></div>
                <?=session()->success?>
            </div>
        </div>
    <?php endif ?>
<?php endif ?>
