var AppViewModel = function(first, last)
{
    this.firstName = ko.observable(first);
    this.lastName = ko.observable(last);
    this.fullName = ko.pureComputed(function() {
        return this.firstName() + " " + this.lastName;
    }, this);
};

ko.applyBindings(new AppViewModel("Planet", "Earth"));