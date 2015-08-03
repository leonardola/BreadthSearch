var Output = (function (pub) {

    pub.showBreathSearch = function(data){
        $(".output").html("");

        for(var line in data){
            if(data.hasOwnProperty(line)){
                var lineData = line+"-";

                for(var column in data[line]){
                    lineData += data[line][column]+"|";
                }
                $(".output").append(lineData+"\n");
            }
        }
    };

    return pub;
})(Output || {});