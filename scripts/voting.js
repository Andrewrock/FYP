var testArray =new Array();
var increment = 0;

$(document).ready(function(){
	// ajax setup

	// any voting button (up/down) clicked event
	$('.vote').click(function(){
		var self = $(this); // cache $this
		var action = self.data('action'); // grab action data up/down
		var parent = self.parent().parent(); // grab grand parent .item
		var postid = parent.data('postid'); // grab post id from data-postid
		var score = parent.data('score'); // grab score form data-score

		// only works where is no disabled class
		if (!parent.hasClass('.disabled')) {
			// vote up action
			if (action == 'up') {

				// increase vote score and color to orange
				parent.find('.vote-score').html(++score).css({'color':'orange'});
				// change vote up button color to orange
				self.css({'color':'orange'});

				a = parent.find('.vote');
				b = a.find('.test');

var text;
text = ($(b).text());
for(var i=0; i< testArray.length;i++){
	if (testArray[i] == text){
	$('#'+testArray[i-1]+'').remove();
		i++;
	}
}


				// send ajax request with post id & action
				$.ajax({data: {'postid' : postid, 'action' : 'up'}});

			}
			// add disabled class with .item
			parent.addClass('.disabled');
		};
	});
});
