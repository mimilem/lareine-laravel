!function($) {
    "use strict";

    var ChartJs = function() {};

    ChartJs.prototype.respChart = function(selector,type,data, options) {
        Chart.defaults.global.defaultFontColor="rgba(255,255,255,0.5)",
        Chart.defaults.scale.gridLines.color="rgba(165, 166, 173, 0.1)";
        // get selector by context
        var ctx = selector.get(0).getContext("2d");
        // pointing parent container to make chart js inherit its width
        var container = $(selector).parent();
        // enable resizing matter
        $(window).resize( generateChart );

        function generateChart(){
            // make chart width fit with its container
            var ww = selector.attr('width', $(container).width() );
            switch(type){
                case 'PolarArea':
                    new Chart(ctx, {data: data, type: 'polarArea', options: options});
                    break;
            }
        };
        generateChart();
    },
    //init
    ChartJs.prototype.init = function() {

        //Polar area  chart
        var polarChart = {
            datasets: [{
                data: [
                    8,
                    3,
                    5
                ],
                backgroundColor: [
                    "#23cbe0",
                    "#20d4b6",
                    "#0e86e7",
                ],
                label: 'My dataset', // for legend
                hoverBorderColor: "#fff"
            }],
            labels: [
                "Formations",
                "Facilitateurs",
                "Souscriptions"
            ]
        };
        this.respChart($("#polarArea"),'PolarArea',polarChart);
    },
    $.ChartJs = new ChartJs, $.ChartJs.Constructor = ChartJs

}(window.jQuery),

//initializing
function($) {
    "use strict";
    $.ChartJs.init()
}(window.jQuery);
