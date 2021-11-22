<?php $this->extend('admin/email/main') ?>
<?php $this->section('content') ?>
    <tr>
        <td valign="middle" class="hero bg_white" style="padding: 2em 0 4em 0;">
            <table>
                <tr>
                    <td>
                        <div class="text" style="padding: 0 2.5em; text-align: center;">
                            <h2><?=lang("EmailTemplate.password.forgot.please")?></h2>
                            <h3><?=lang("EmailTemplate.password.forgot.hello")?> <?=$user->getFullName()?>. <?=lang("EmailTemplate.password.forgot.content")?></h3>
                            <p><a href="<?=$user->getVerifyURL()?>" class="btn btn-primary"><?=lang("EmailTemplate.password.forgot.button")?></a></p>
                        </div>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <!-- end tr -->
    <!-- 1 Column Text + Button : END -->
<?php $this->endSection() ?>