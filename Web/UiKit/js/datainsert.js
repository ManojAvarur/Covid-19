var date = new Date();

var day = date.getDate();
var month = date.getMonth() + 1;
var year = date.getFullYear();

document.getElementById("dt").value = year+"-"+month+"-"+day;

var time = date.getHours();



if(time >= 0 && time <= 12 ){
    time = time +":"+ date.getMinutes() + " AM";
} else {
    time = time + " PM";
}



switch(month){
    case 1: month = "Jan"; break;
    case 2: month = "Feb"; break;
    case 3: month = "Mar"; break;
    case 4: month = "Apr"; break;
    case 5: month = "May"; break;
    case 6: month = "Jun"; break;
    case 7: month = "Jul"; break;
    case 8: month = "Aug"; break;
    case 9: month = "Sep"; break;
    case 10: month = "Oct"; break;
    case 11: month = "Nov"; break;
    case 12: month = "Dec"; break;
}

document.getElementById("t").value = time;

document.getElementById("time").innerHTML = "Time : " + time;

document.getElementById("date").innerHTML = "Date : " +day+"-"+month+"-"+year;

// console.log(date.getHours()+":"+date.getMinutes()+":"+date.getSeconds());

// console.log(time);


