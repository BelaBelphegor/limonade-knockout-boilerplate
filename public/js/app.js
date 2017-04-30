var AppViewModel = function()
{
	var self = this;
	self.chosenDataID = ko.observable();
	self.chosenData = ko.observable();
	self.chosenSubdata = ko.observable();

	self.goToData = function(data)
	{
		location.hash = data;
	}

	self.goToSubdata = function(subdata)
	{
		location.hash = subdata.data + '/' + subdata.id;
	}
	self.goToData("1");

	Sammy(function()
	{
		this.get('#:data', function()
		{
			self.chosenDataID(this.params.data);
			self.chosenData(null);
			$.get("http://pokeapi.co/api/v2/pokemon/" + this.params.data, {data: this.params.data }, self.chosenData), "json";
		});

		this.get('#:data/:subdataid', function()
		{
			return;
		});
	}).run();
};

ko.applyBindings(new AppViewModel());

