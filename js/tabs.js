$(document).ready(function(){
    BuildMenu();
    if(GetWindowLocation()) {
        $("#"+GetWindowLocation()).addClass("visible");
        $("a.tab[title='" + GetWindowLocation() +"']").parent().addClass("selected");
    } else {
        //Only show the first tab content
        $(".content:first").addClass("visible");
        //Highlight the first tab
        $("a.tab:first").parent().addClass("selected");
    }
    
    // When a link is clicked
    $("a.tab").click(function () {
        $(".visible").removeClass("visible");
        $(".selected").removeClass("selected");

        $(this).parent().addClass("selected");
        var content_show = $(this).attr("title");
        $("#"+content_show).addClass("visible");
    });
});

function BuildMenu(){
    //Build a dynamic menu with all headers containing class tabpage
    var ul = document.createElement('ul');
    ul.id = "tabs"
    $(".tabpage").each(function() {
        var content = $(this).text();
        var title = $(this).attr("title");
        $(this).hide();
        var li = document.createElement('li');
        var a = document.createElement('a');
        a.innerHTML = content;
        a.href = "#" + title;
        a.title = title;
        a.className = "tab";
        li.appendChild(a);
        ul.appendChild(li);
    });
    $("#gallery").after(ul);
};

function GetWindowLocation() {
    if(window.location.hash.replace(/#/, '') == "") {
        return null;
    }
    else {
        var currentlocation = window.location.hash.replace(/#/, '');
        //Check if the tab with the id of currentlocation exists
        if($("#"+currentlocation).length > 0 && $("a.tab[title='" + currentlocation +"']").length > 0) {
            return currentlocation;
        } else {
            return null;
        }
    };
};
