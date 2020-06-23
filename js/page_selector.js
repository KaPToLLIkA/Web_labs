var countOnPage = 3;
var maxPageButtons = 5;
var curPageButtons = 0;

var curPage = 1;

var targetItems = document.getElementsByClassName('car-figure');
var length = targetItems.length;
var count = Math.floor(length / countOnPage);



if (countOnPage * count < length) {
    count += 1;
}

if (count < maxPageButtons) {
    curPageButtons = count;
} else {
    curPageButtons = maxPageButtons;
}

var pages = new Array(curPageButtons);

for (var index = 1; index <= curPageButtons; ++index) {
    pages[index - 1] = index;
    $("#button-navigate-" + index).click(function() {
        curPage = $(this).val();
        if (curPage == count) {
            $("#add_icon").css("display", "inline-block");
        } else {
            $("#add_icon").css("display", "none");
        }
        setPage();
    })
    
}

for (var index = curPageButtons + 1; index <= maxPageButtons; ++index) {
    $("#button-navigate-" + index).css("display", "none");
}



function setDisplayMode(index, mode) {
    item = document.getElementsByTagName("figure");
    item[index].style.setProperty("display", mode);
}

function setNewPagesArray(page) {
    var difference = 0;
    for (var index = 0; index < curPageButtons; ++index) {
        if (index < (curPageButtons / 2) - 1 && pages[index] == page) {
            difference = -1;
        } else if (index == Math.floor(curPageButtons / 2) && pages[index] == page) {
            difference = 0;
        } else if (pages[index] == page){
            difference = 1;
        }
    }
    
    if (pages[0] > 1 && pages[curPageButtons - 1] < count) {
        for (var index = 0; index < curPageButtons; ++index) {
            pages[index] += difference;
        }
    }
    
}

function setPage() {
    for(var index = 0; index < length; ++index) {
        setDisplayMode(index, "none");
    }

    var minPageIndex = (curPage - 1) * countOnPage;
    for(var index = minPageIndex; index < minPageIndex + countOnPage; ++index) {
        setDisplayMode(index, "inline-block");
        
    }

    // var divHtml = "";

    setNewPagesArray(curPage);

    // for(var buttonIndex in pages) {
    //     divHtml += "<td><button id=\"button-navigate-\" class=\"button-navigate\" value=\"" 
    //     + pages[buttonIndex] + "\">" + pages[buttonIndex] + "</button></td>";
    // }

    

    // $(document).ready(function() {
    //     $("#navigation").html(divHtml);
    // })
    
}

$("#button-navigate-left").click(function() {
    curPage = 1;
    if (curPage == count) {
        $("#add_icon").css("display", "inline-block");
    } else {
        $("#add_icon").css("display", "none");
    }
    setPage();
})

$("#button-navigate-right").click(function() {
    curPage = count;
    if (curPage == count) {
        $("#add_icon").css("display", "inline-block");
    } else {
        $("#add_icon").css("display", "none");
    }
    setPage();
})

$("#button-navigate-leftone").click(function() {
    if (curPage > 1) curPage--;
    if (curPage == count) {
        $("#add_icon").css("display", "inline-block");
    } else {
        $("#add_icon").css("display", "none");
    }
    setPage();
})

$("#button-navigate-rightone").click(function() {
    if (curPage < count) curPage++;
    if (curPage == count) {
        $("#add_icon").css("display", "inline-block");
    } else {
        $("#add_icon").css("display", "none");
    }
    setPage();
})


setPage();
if (curPage == count) {
    $("#add_icon").css("display", "inline-block");
} else {
    $("#add_icon").css("display", "none");
}


