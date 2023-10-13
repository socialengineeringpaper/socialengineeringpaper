function fluidDialog() {
    var $visible = $(".ui-dialog:visible");
    // each open dialog
    $visible.each(function () {
        var $this = $(this);
        var dialog = $this.find(".ui-dialog-content").data("ui-dialog");
        // if fluid option == true
        if (dialog.options.fluid) {
            var wWidth = $(window).width();
            // check window width against dialog width
            if (wWidth < (parseInt(dialog.options.maxWidth) + 50)) {
                // keep dialog from filling entire screen
                $this.css("max-width", "90%");
            } else {
                // fix maxWidth bug
                $this.css("max-width", dialog.options.maxWidth + "px");
            }
            //reposition dialog
            dialog.option("position", dialog.options.position);
        }
    });
}

function simulateClick() {
    var evt = document.createEvent("MouseEvent");
    evt.initMouseEvent("click", true, true, window, 0, 0, 0, 0, 0, false, false, false,false, 0, null);
    //this part commented out only works in chrome
    //var evt = new MouseEvent("click", {
    //    bubbles: true,
    //    cancelable: true,
    //    view: window,
    //});

    //element we want to perform the click on programmatically
    var submitButton = document.getElementById('submitButton');
    if (submitButton == null) {

    }
    else {
        //give effect of pressing button
        submitButton.focus();
       
        //dispatch the new mouse event to the submitButton
        //var canceled = !submitButton.dispatchEvent(evt);
        submitButton.dispatchEvent(evt);
        //if canceled=true (an event handler called preventDefault)
        //else (no event handler called prevent default)
        //if (canceled) {
        //    alert('canceled');   //an event handler called preventDefault
        //}
        //else {
        //    alert('not cancelled'); //no event handler called preventDefault
        //}
    }
}

$(document).keypress(function (e) {
    if (e.which == 13) {
        simulateClick();
    }
});


