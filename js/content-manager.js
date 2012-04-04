//opacity management
var ContentManager = new function(){
	
	var screenWidth = $('#content').width();
	var optionSelected = 0;
	this.alertScreenSize = function() {
		alert('content width: ' + this.getScreenWidth());
	};

	this.getScreenWidth = function() {
		screenWidth = $('#content').width()
		return screenWidth;
	};

	this.expandPortal = function() {
		optionSelected = 1;
			$('#content-portal-c').animate({width: this.getScreenWidth()}, 350)
		$('#content-learn-c').animate({width: 0,opacity: 0}, 330, function() { ;
			$('#content-learn-c').hide();
		});
	};

	this.expandLearn = function() {
		optionSelected = 2;
	}

	this.fixSelectedScreen = function() {
		if (optionSelected == 1) {
			this.expandPortal();
		} else if (optionSelected == 2) {
			this.expandLearn();
		}
	}
}
