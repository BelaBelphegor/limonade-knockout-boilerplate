var AppViewModel = function(first, last)
{
    this.firstName = ko.observable(first);
    this.lastName = ko.observable(last);
    this.fullName = ko.pureComputed(function() {
        return this.firstName() + " " + this.lastName();
    }, this);
    
    this.capitalizeLastName = function()
    {
        var currentValue = this.lastName();
        this.lastName(currentValue.toUpperCase());
    };
};

ko.applyBindings(new AppViewModel("Planet", "Earth"));