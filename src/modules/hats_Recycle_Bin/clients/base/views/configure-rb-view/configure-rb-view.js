({
  className: 'configure-rb-view',
  moduleList: [],
  initialize: function(options) {
    console.log('configure rb view..');
    this._super('initialize', [options]);
    // this.on('render', this._getEnabledModules);
  },

  _getEnabledModules: function () {
    console.log('called');
    var self = this;
    var modules = app.metadata.get().modules_info;
    _.each(modules, function(module_attr, module_name) {
      // console.log(module_name);
      if(module_attr.visible) {
        self.moduleList.push(module_name);
      }
    });
    console.log(self.moduleList);
  },

  render: function() {
    this._getEnabledModules();
    this._super('render');
  }
})