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
        this.markAs(true);
    },

    /**
     * Mark record as restored/deleted.
     *
     * @param {Boolean} restore `True` marks record as restored, `false` as
     *   deleted.
     */
    markAs: function(restore) {
        if (restore === this.model.get('is_restore')) {
            return;
        }
        //write a logic to restore this deleted record.
        this.model.save({is_restore: !!restore}, {
            success: _.bind(function() {
                if (!this.disposed) {
                    this.render();
                }
            }, this)
        });
    }
})
