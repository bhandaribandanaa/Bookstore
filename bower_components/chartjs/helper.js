$(document).ready(function(){
    $.ajax({
        url: "http://localhost/interface-bookstore/admin/topseller_controller",
        method : "GET",
        alert('hi');
        success: function(dat){
            console.log(dat);

            var book = [];
            var number = [];

            for(var i in dat) {
                book.push(dat[i].book_title);
                number.push(dat[i].quantity);
            }

            var chartdata = {
                labels : book,
                datasets :[ 
                    {
                        label : 'Quantity Sold',
                        backgroundColor : red,
                        data : number

                    }
                ]
            };

            var ctx =  $("#pie-chart");
            var barGraph = new Chart (ctx, {
                type : 'bar',
                data : chartdata
            });
        },
        error: function(dat){
            console.log(dat);
        }
    });
});
