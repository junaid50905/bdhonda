<div class="users form">
    <?= $this->Flash->render() ?>
    <h3 class="form-title">Login to your account</h3>
    <?= $this->Form->create() ?>
    <fieldset>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">Username</label>
            <div class="input-icon">
                <i class="fa fa-user"></i>
                <?= $this->Form->control('username', [
                    'class' => 'form-control',
                    'label' => false,
                    'autocomplete' => 'off',
                    'placeholder' => 'Username',
                    'required' => true,
                    'value' => 'sakil'
                ]) ?>
            </div>
        </div>


        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">Password</label>
            <div class="input-icon">
                <i class="fa fa-lock"></i>
                <?= $this->Form->control('password', [
                    'class' => 'form-control',
                    'label' => false,
                    'autocomplete' => 'off',
                    'placeholder' => 'Password',
                    'required' => true,
                    'value' => '@@mra321#'
                ]) ?>
            </div>
        </div>

    </fieldset>
    <div class="form-actions">
        <label class="checkbox">
            <?= $this->Form->checkbox('remember', [
                'value' => 1,
                'escape' => false
            ]) ?>
            Remember me
        </label>
        <button type="submit" class="btn green pull-right">
            <?= __('Login') ?> <i class="m-icon-swapright m-icon-white"></i>
        </button>
    </div>


    <?= $this->Form->end() ?>
</div>
