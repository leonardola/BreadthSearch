/**
 * Created by leonardoalbuquerque on 09/06/15.
 */

var Relationship = (function(pub){

    var relationShipTable = [];
    var selectedElements = [];

    pub.selectElement = function (element) {
        element.addClass("selectedNode");

        if(selectedElements.length == 0){
            selectFirstElement(element);
        }else{
            createRelationShip(element)
        }
    };

    function selectFirstElement(element){
        selectedElements.push(element.attr("node-id"));
    }

    function createRelationShip(element){
        var thisNodeNumber = element.attr("node-id");

        createTable(thisNodeNumber);

        relationShipTable[selectedElements[0]][thisNodeNumber] = 1;
        relationShipTable[thisNodeNumber][selectedElements[0]] = 1;

        var otherNodeId = "node-id-"+selectedElements[0];
        var thisNodeId = element.attr("id");

        Connectors.connectNodes(otherNodeId,thisNodeId);

    };

    function createTable(secondElementId){

        if(!relationShipTable[selectedElements[0]]){
            relationShipTable[selectedElements[0]] = [];
        }

        if(!relationShipTable[selectedElements[0]][secondElementId]){
            relationShipTable[selectedElements[0]][secondElementId] = [];
        }

        if(!relationShipTable[secondElementId]){
            relationShipTable[secondElementId] = [];
        }

        if(!relationShipTable[secondElementId][selectedElements[0]]){
            relationShipTable[secondElementId][selectedElements[0]] = [];
        }
    }

    pub.addNode = function(nodeId){
        createNewLine(nodeId);
        createNewColumn(nodeId);
    };

    function createNewLine(nodeId){
        relationShipTable[nodeId] = [];

        for(var line in relationShipTable){
            relationShipTable[nodeId][line] = 0;
        }
    }

    function createNewColumn(nodeId){
        for(var line in relationShipTable){
            relationShipTable[line][nodeId] = 0;
        }
    }

    pub.clearSelectedElements = function () {
        selectedElements = [];
    };

    pub.getRelationshipTable = function(){
        return relationShipTable;
    };

    return pub;

}(Relationship || {}));