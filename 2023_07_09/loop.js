var marks = 85;
if (marks >= 80) {
    alert("A");
} else {
    alert("s");
}


for (var i = 1; i <= 10; i++) {
    alert(i);
}


///accessing element from an arry

var items = ["foo", "bar", "baz"];
for (var i = 0; i < items.length; i++) {
    alert(items[i]);
}

// creating function

function foo() {
    alert("from function fooo");
}

///calling function


foo();

function add(n1, n2) {
    return n1 + n2;
}

var ans = add(3, 7);
alert(ans);

alert(add(56, 4));