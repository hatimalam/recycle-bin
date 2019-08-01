({
    events: {
        'click [data-action=toggle]': 'toggleIsRestored',
        'mouseover [data-action=toggle]': 'toggleMouse',
        'mouseout [data-action=toggle]': 'toggleMouse'
    },

    /**
     * @inheritdoc
     * The restore field is always a readonly field.
     */
    initialize: function(options) {
        options.def.readonly = true;
        this._super('initialize', [options]);
    },

    /**
     * Event handler for mouse events.
     *
     * @param {Event} event Mouse over / mouse out.
     */
    toggleMouse: function(event) {
        var $target= this.$(event.currentTarget),
            isRestore = this.model.get('is_restore');

        if (isRestore) {
            return;
        }

        var label = event.type === 'mouseover' ? 'LBL_RESTORED' : 'LBL_NOT_RESTORED';
        $target.html(app.lang.get(label, this.module));
        $target.toggleClass('label-success', event.type === 'mouseover');
    },

    /**
     * Toggle is_restore flag.
     */
    toggleIsRestored: function() {
        this.restoreData(true);
    },

    /**
     * Mark record as restored/deleted.
     *
     * @param {Boolean} restore `True` marks record as restored, `false` as
     *   deleted.
     */
    restoreData: function(restore) {
        var self = this;
        if (restore === this.model.get('is_restore')) {
            return;
        }
        //write a logic to restore this deleted record.
        console.log('restore button click..');
        app.alert.show('restore_data_confirm', {
            level: 'confirmation',
            messages: 'Are you sure you want to restore the data?',
            onConfirm: function() {
                console.log('restore the data now..');
                var url = app.api.buildURL(self.module, 'restore', {id: self.model.id});
                app.api.call('create', url, null, {
                    success: function(data) {
                        console.log(data);
                        if (!self.disposed) {
                            self.render();
                        }
                    },
                    error: function(err) {
                        console.log(err);
                    }
                });
            },
            onCancel: function() {
                console.log('do nothing');
            },
        });
    }
})
