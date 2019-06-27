({
    extendsFrom: 'PreviewHeaderView',

    /**
     * @inheritdoc
     *
     * @override To make 'previewEdit' always false. Recycle Bin records do not allow any editing (but not via module ACL).
     */
    checkACL: function(model) {
        this._super('checkACL', [model]);
        this.layout.previewEdit = false;
    }
})
