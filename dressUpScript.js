
/*Add on to for future clothes*/
$(function () {
//Makes the hair class draggable
    $(".hair").draggable({
        helper: "clone",
        appendTo: "body",
        revert: "invalid",
        zIndex: 100
    });
//makes it so items can be "dropped" in hitbox
    $("#head-hitbox").droppable({
        accept: ".hair", //currently only accepts hair
        tolerance: "intersect",//when hair intersects with hitbox, its droppable
        drop: function (event, ui) {

            // Remove existing hair on avatar
            $("#avatar img.on-head").remove();

            // Get image source
            const fullSrc = ui.draggable.data("full");

            // Create clean avatar hair image
            const newHair = $("<img>", {
                src: fullSrc,
                class: "hair on-head"
            });
            //Attatch hair to avatar id
            $("#avatar").append(newHair);
        }
    });

});
