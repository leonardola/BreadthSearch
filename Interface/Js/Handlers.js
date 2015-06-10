/**
 * Created by leonardoalbuquerque on 08/06/15.
 */


$(document).ready(function () {

    $(".addNode").click(function () {
        Node.addNewNode();
    });

    $(document).on("click",".node",function (event) {
        event.stopPropagation();
        Relationship.selectElement($(this));
    });

    $(document).click(function () {
        Relationship.clearSelectedElements();
    });

    $(".saveData").click(function () {
        Database.saveRelationshipTable(Relationship.getRelationshipTable());
    });

    $(".doBreathSearch").click(function () {
        Database.doSearch();
    })

});