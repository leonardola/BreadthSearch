var BreadthSearch = (function (pub) {

    var buffer = [];
    var output = [];

    pub.execute = function (matrixOfNodes, needle) {
        buffer = [];
        output = [];

        addNode(needle);

        while(!isBufferEmpty()){
            var nodeToVisit = matrixOfNodes[buffer[0]];

            for(var node in  nodeToVisit){
                if(nodeToVisit.hasOwnProperty(node)){
                    var nodeIsConnected = nodeToVisit[node];

                    if(nodeIsConnected && !nodeWasVisited(node)){
                        addNode(node);
                    }
                }
            }
            removeActualElementFromBuffer();
        }

        return output;
    };

    function addNode(node){
        buffer.push(node);
        output.push(node);
    }

    function isBufferEmpty(){
        return buffer.length == 0 ;
    }

    function nodeWasVisited(node){
        return $.inArray(node, buffer) !== -1 || $.inArray(node, output) !== -1;
    }

    function removeActualElementFromBuffer(){
        buffer.splice(0,1);
    }

    return pub;
})(BreadthSearch || {});