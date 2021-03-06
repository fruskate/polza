<?= Form::open() ?>
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="popup">&times;</button>
        <h4 class="modal-title"><?= e(trans('backend::lang.list.setup_title')) ?></h4>
    </div>
    <div class="modal-body">
        <p class="help-block before-field"><?= e(trans('backend::lang.list.setup_help')) ?></p>

        <div class="control-simplelist with-checkboxes is-sortable" data-control="simplelist">
            <ul>
                <?php foreach ($columns as $key => $column): ?>
                    <li>
                        <span class="drag-handle"></span>
                        <div class="checkbox custom-checkbox">
                            <input
                                type="hidden"
                                name="column_order[]"
                                value="<?= e($column->columnName) ?>" />
                            <input
                                id="<?= $this->getId('setupCheckbox-'.$column->columnName) ?>"
                                name="visible_columns[]"
                                value="<?= e($column->columnName) ?>"
                                <?= $column->invisible ? '' : 'checked="checked"' ?>
                                type="checkbox" />
                            <label
                                class="choice storm-icon-pseudo"
                                for="<?= $this->getId('setupCheckbox-'.$column->columnName) ?>">
                                    <?= e(trans($column->label)) ?>
                            </label>
                        </div>
                    </li>
                <?php endforeach ?>
            </ul>
        </div>

        <?php if ($this->showPagination): ?>
            <div class="form-group">
                <label><?= e(trans('backend::lang.list.records_per_page')) ?></label>
                <p class="help-block before-field">
                    <?= e(trans('backend::lang.list.records_per_page_help')) ?>
                </p>
                <select class="form-control custom-select select-no-search" name="records_per_page">
                    <?php foreach ($perPageOptions as $optionValue): ?>
                        <option value="<?= $optionValue ?>" <?= $optionValue == $recordsPerPage ? 'selected="selected"' : '' ?>><?= $optionValue ?></option>
                    <?php endforeach ?>
                </select>
            </div>
        <?php endif ?>

    </div>
    <div class="modal-footer">
        <button
            type="button"
            class="btn btn-primary"
            data-request="<?= $this->getEventHandler('onApplySetup') ?>"
            data-dismiss="popup"
            data-stripe-load-indicator>
            <?= e(trans('backend::lang.form.apply')) ?>
        </button>
        <button
            type="button"
            class="btn btn-default"
            data-dismiss="popup">
            <?= e(trans('backend::lang.form.cancel')) ?>
        </button>

        <button
            type="button"
            class="btn btn-link pull-right p-r-0"
            data-request="<?= $this->getEventHandler('onResetSetup') ?>"
            data-dismiss="popup"
            data-stripe-load-indicator>
            <?= e(trans('backend::lang.form.reset_default')) ?>
        </button>
    </div>
<?= Form::close() ?>
