function waitOn() {
    $("*").addClass("cursor-progress");
    $(".site-overlay").fadeIn(300);
}

function waitOff() {
    $("*").removeClass("cursor-progress");
    $(".site-overlay").fadeOut(300);
}

var ajax_loading = false;
var ajax_loading_count = 0;

$(document).ajaxComplete(function (event, xhr, settings) {
    if (ajax_loading_count <= 1 && !settings.silent) {
        waitOff();
    }
    ajax_loading = false;
    ajax_loading_count--;
});

$(document).ajaxSend(function (event, request, settings) {
    if (ajax_loading_count == 0 && !settings.silent) {
        waitOn();
    }
    ajax_loading = true;

});

function showMessage(title, description, error, time) {
    var modalActions = $('#modal-actions');
    var titleActions = $('#titleActions');
    var descriptionActionsDanger = $('#descriptionActionsDanger');
    var descriptionActionsSuccess = $('#descriptionActionsSuccess');
    titleActions.empty();
    descriptionActionsDanger.empty();
    descriptionActionsSuccess.empty();
    titleActions.html(title);
    if (error == true) {
        descriptionActionsDanger.show();
        descriptionActionsDanger.html(description);
    } else {
        descriptionActionsSuccess.show();
        descriptionActionsSuccess.html(description);
    }
    modalActions.modal('show');
    if (time > 0 || time != undefined) {
        setTimeout(function () {
            modalActions.modal('hide');
            if (error == true) {
                descriptionActionsDanger.hide();
            } else {
                descriptionActionsSuccess.hide();
            }
        }, 2500);
    }
}
