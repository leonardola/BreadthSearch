/**
 * Created by leonardoalbuquerque on 09/06/15.
 */

var Database = (function (pub) {

    pub.saveRelationshipTable = function (matrix) {
        $.post("/phpBreadthSearch/saveData.php",{matrix:matrix});
    };

    pub.doSearch = function(){
        $.get("/phpBreadthSearch/doBreathSearch.php",function(data){
            $(".output").html("");
            for(var line in data){
                var lineData = line+"-";

                for(var column in data[line]){
                    lineData += data[line][column]+"|";
                }
                $(".output").append(lineData+"\n");
            }
        });
    };

    return pub;
}(Database || {}));