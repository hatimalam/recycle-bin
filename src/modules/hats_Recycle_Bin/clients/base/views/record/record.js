({
    extendsFrom: 'RecordView',
  	initialize: function(options) {
    	this._super('initialize', [options]);
  	},

    /** modified delete message on record view */
    getDeleteMessages: function() {
      var messages = this._super('getDeleteMessages');
      messages.confirmation = "Deleting this record will delete the link to restore data. Are you sure you want to delete it?";//app.utils.formatString(app.lang.get('NTC_DELETE_CONFIRMATION_FORMATTED'), [context]);
      return messages;
    },
})