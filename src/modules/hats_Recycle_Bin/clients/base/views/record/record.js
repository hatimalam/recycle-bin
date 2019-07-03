({
    extendsFrom: 'RecordView',
  	initialize: function(options) {
    	console.log('record view initialize');
    	this._super('initialize', [options]);
    	this.context.on('button:restore_button:click', this.restoreData, this);
  	},

  	restoreData: function() {
  		console.log('restore button click..');
  		app.alert.show('restore_data_confirm', {
  			level: 'confirmation',
  			messages: 'Are you sure you want to restore the data?',
  			onConfirm: function() {
  				console.log('restore the data now..');
  			},
  			onCancel: function() {
  				console.log('do nothing');
  			},
  		});
  	},

    getDeleteMessages: function() {
      var messages = this._super('getDeleteMessages');
      messages.confirmation = "Deleting this record will delete the link to restore data. Are you sure you want to delete it?";//app.utils.formatString(app.lang.get('NTC_DELETE_CONFIRMATION_FORMATTED'), [context]);
      return messages;
    },
})