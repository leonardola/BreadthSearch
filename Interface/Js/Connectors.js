/**
 * Created by leonardoalbuquerque on 09/06/15.
 */

var Connectors = (function(pub){

    jsPlumb.ready(function () {

    });

    pub.connectNodes = function (firstElementId,secondElementId) {

        jsPlumb.connect({
            source:firstElementId,
            target:secondElementId,
            connector:["Straight"],
            endpoint:[ "Dot", {
                radius:2
            }]
        });
    };

    return pub;

}(Connectors || {}));
