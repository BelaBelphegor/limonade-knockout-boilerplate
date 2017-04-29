var ViewModel = function(first, last)
{
    this.firstName = ko.observale(first);
    this.lastName = ko.observale(last);
    this.fullName = ko.pureComputed(function() {
        return this.firstName() + " " + this.lastName;
    }, this);
};

ko.applyBindings(new ViewModel("Planet", "Earth"));