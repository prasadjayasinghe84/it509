function double(num) {

    // total=num+num; /// this will become goble without var key word
    var total = num + num;
    return total;
}

var total = 10;
var number = double(20);
alert(total);