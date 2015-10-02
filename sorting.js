/**
 * Created by Kokanm on 25/11/2014.
 */
function fnSort(){
    if (window.XMLHttpRequest)
        xhr = new XMLHttpRequest();
    else
        xhr = new ActiveXObject("Microsoft.XMLHTTP");

    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            var result = xhr.responseText;
            var jas = JSON.parse(result);
            for(i=0; i<jas.students.length; i++){
                document.getElementById("firstname"+i).innerHTML = jas.students[i].firstname;
                document.getElementById("lastname"+i).innerHTML = jas.students[i].lastname;
                document.getElementById("city"+i).innerHTML = jas.students[i].city;
                document.getElementById("country"+i).innerHTML = jas.students[i].country;
                document.getElementById("birthday"+i).innerHTML = jas.students[i].birthday;
            }
        }
    }
    xhr.open("GET", "sorting2.php?sor=fn");
    xhr.send(null);
}

function lnSort(){
    if (window.XMLHttpRequest)
        xhr = new XMLHttpRequest();
    else
        xhr = new ActiveXObject("Microsoft.XMLHTTP");

    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            var result = xhr.responseText;
            var jas = JSON.parse(result);
            for(i=0; i<jas.students.length; i++){
                document.getElementById("firstname"+i).innerHTML = jas.students[i].firstname;
                document.getElementById("lastname"+i).innerHTML = jas.students[i].lastname;
                document.getElementById("city"+i).innerHTML = jas.students[i].city;
                document.getElementById("country"+i).innerHTML = jas.students[i].country;
                document.getElementById("birthday"+i).innerHTML = jas.students[i].birthday;
            }
        }
    }
    xhr.open("GET", "sorting2.php?sor=ln");
    xhr.send(null);
}

function citySort(){
    if (window.XMLHttpRequest)
        xhr = new XMLHttpRequest();
    else
        xhr = new ActiveXObject("Microsoft.XMLHTTP");

    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            var result = xhr.responseText;
            var jas = JSON.parse(result);
            for(i=0; i<jas.students.length; i++){
                document.getElementById("firstname"+i).innerHTML = jas.students[i].firstname;
                document.getElementById("lastname"+i).innerHTML = jas.students[i].lastname;
                document.getElementById("city"+i).innerHTML = jas.students[i].city;
                document.getElementById("country"+i).innerHTML = jas.students[i].country;
                document.getElementById("birthday"+i).innerHTML = jas.students[i].birthday;
            }
        }
    }
    xhr.open("GET", "sorting2.php?sor=cit");
    xhr.send(null);
}

function counSort(){
    if (window.XMLHttpRequest)
        xhr = new XMLHttpRequest();
    else
        xhr = new ActiveXObject("Microsoft.XMLHTTP");

    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            var result = xhr.responseText;
            var jas = JSON.parse(result);
            for(i=0; i<jas.students.length; i++){
                document.getElementById("firstname"+i).innerHTML = jas.students[i].firstname;
                document.getElementById("lastname"+i).innerHTML = jas.students[i].lastname;
                document.getElementById("city"+i).innerHTML = jas.students[i].city;
                document.getElementById("country"+i).innerHTML = jas.students[i].country;
                document.getElementById("birthday"+i).innerHTML = jas.students[i].birthday;
            }
        }
    }
    xhr.open("GET", "sorting2.php?sor=coun");
    xhr.send(null);
}