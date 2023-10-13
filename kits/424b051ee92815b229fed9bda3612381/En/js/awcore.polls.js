var percentColors = [
    { pct: 0.0, color: { r: 0xff, g: 0x00, b: 0 } },
    { pct: 0.5, color: { r: 0xff, g: 0xff, b: 0 } },
    { pct: 1.0, color: { r: 0x00, g: 0xff, b: 0 } } ];

var getColorForPercentage = function (pct) {
        for (var i = 0; i < percentColors.length; i++) {
            if (pct <= percentColors[i].pct) {
                var lower = percentColors[i - 1] || {
                    pct: 0.1,
                    color: {
                        r: 0x0,
                        g: 0x00,
                        b: 0
                    }
                };
                var upper = percentColors[i];
                var range = upper.pct - lower.pct;
                var rangePct = (pct - lower.pct) / range;
                var pctLower = 1 - rangePct;
                var pctUpper = rangePct;
                var color = {
                    r: Math.floor(lower.color.r * pctLower + upper.color.r * pctUpper),
                    g: Math.floor(lower.color.g * pctLower + upper.color.g * pctUpper),
                    b: Math.floor(lower.color.b * pctLower + upper.color.b * pctUpper)
                };
                return 'rgb(' + [color.r, color.g, color.b].join(',') + ')';
            }
        }
    }

$(document).ready(function ($) {
    // set the first colors
    $('div.polls').find('span.option').each(function () {
        $(this).css({
            backgroundColor: getColorForPercentage($(this).attr('title') / 100)
        });
    });
    // the on click event
    $("div.polls > form > p").click(function () {
	var poll = $(this).parents("div.polls");
        var form = $(this).parents("form");

        var poll_id = poll.attr("id");

        if (form.hasClass("closed")) {
            return false;
        }


        $(":radio", form).hide();
        form.addClass("closed");	
		var option_id = $("input[type='radio']:checked").val();

var s = {
"poll_id":poll_id,
"option_id":option_id
}


$.ajax({
url:'vote.php',
type:'post',
data:s,
beforeSend: function (){
		$(".loadpoll") .show();
		$(".loadpoll") .html("wait....");
		},
success:function(data){
$(".loadpoll").html(data);

}
});

		
        return false;
    });
});