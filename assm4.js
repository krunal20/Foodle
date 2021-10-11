function initialise() {
    setupNav();
    hideContent();
    setupContent();
}

function setupNav() {
    var menu = document.getElementById("navigation");
    var buttons = menu.childNodes;
    for(var i = 0; i < buttons.length; i++) {
        buttons[i].onclick = function(){ navClick(this); }
        buttons[i].onmouseover = function(){ navOver(this); }
        buttons[i].onmouseout = function(){ navOut(this); }
        buttons[i].onmousedown = function(){ navDown(this); }
        buttons[i].onmouseup = function(){ navUp(this); }
    }
}

function navClick(button) {
    var content = document.getElementsByClassName("content");
    var page = button.id.split("-")[0];
    
    for(var i = 0; i < content.length; i++) {
        if(content[i].id == page) {
            content[i].style.display = "block";
        } else {
            content[i].style.display = "none";
        }
    }
}

function hideContent(){
    var body = document.getElementById("body");
    var content = body.getElementsByClassName("content");
    for(var i = 1; i < content.length; i++) {
        content[i].style.display = "none";
    }
}

function navOver(button) {
    if(button.className != "selected") {
        button.className = "hover";
    }
}

function navOut(button) {
    if(button.className != "selected") {
        button.className = "out";
    }
}

function navDown(button) {
    button.className = "down";
}

function navUp(button) {
    var nav = button.parentNode;
    var buttons = nav.childNodes;
    for(var i = 0; i < buttons.length; i++) {
        if(buttons[i].id == button.id) {
            buttons[i].className = "selected";
        } else {
            buttons[i].className = "out";
        }
    }
}

function setupContent() {
    requestData("events.xml", loadEvents);
    requestData("topartists.json", loadTopArtists);
    requestData("toptracks.json", loadTopTracks);
}

function loadEvents(xmlhttp) {
    var xmldoc = xmlhttp.responseXML;
	var events = xmldoc.getElementsByTagName("event");
    var table = document.getElementById("events-table");
    for(var i = 0; i < events.length; i++) {
        var bands = events[i].getElementsByTagName("artist");
        var urls = events[i].getElementsByTagName("url");
        var url = urls[1].textContent;
        var artists = '<a href="' + url + '">';
        for(var j = 0; j < bands.length; j++) {
            var artist = bands[j].childNodes[0].textContent;
            artists += artist + ", ";
        }
        artists += "</a>"
        
        var startDate = events[i].getElementsByTagName("startDate");
        var dateElems = startDate[0].textContent.split(" ");
        var date = "";
        for(var l = 0; l < 4; l++) {
            date += dateElems[l] + " ";
        }
        
        var tags = events[i].getElementsByTagName("tag");
        var genres = "";
        for(var k = 1; k < tags.length; k++) {
            var tag = tags[k].childNodes[0].textContent;
            genres += tag + ", ";
        }
        
        var row = table.insertRow(-1);
        var a = row.insertCell(-1);
        a.innerHTML = artists;
        var g = row.insertCell(-1);
        g.innerHTML = genres;
        var d = row.insertCell(-1);
        d.innerHTML = date;
    }
}

function loadTopArtists(xmlhttp) {
    var jsondoc = JSON.parse(xmlhttp.responseText);
    var artists = jsondoc.artists.artist;
    var table = document.getElementById("topartists-table");
    for(var j = 0; j < artists.length; j++) {
        var image = artists[j].image[2]['#text'];
        var row = table.insertRow(-1);
        var i = row.insertCell(-1);
        i.innerHTML = "<img src=\"" + image + "\"/>";
        var n = row.insertCell(-1);
        n.innerHTML = "<a href=\"" + artists[j].url + "\">" + artists[j].name + "</a>";
        var l = row.insertCell(-1);
        l.innerHTML = artists[j].listeners;
        var p = row.insertCell(-1);
        p.innerHTML = artists[j].playcount;
    }
}

function loadTopTracks(xmlhttp) {
    var jsondoc = JSON.parse(xmlhttp.responseText);
    var tracks = jsondoc.tracks.track;
    var table = document.getElementById("toptracks-table");
    for(var j = 0; j < tracks.length; j++) {
        var row = table.insertRow(-1);
        var n = row.insertCell(-1);
        n.innerHTML = tracks[j].name;
        var a = row.insertCell(-1);
        a.innerHTML = tracks[j].artist.name;
        var l = row.insertCell(-1);
        l.innerHTML = tracks[j].listeners;
        var p = row.insertCell(-1);
        p.innerHTML = tracks[j].playcount;
    }
}