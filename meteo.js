var city = document.querySelector('#cityoutput')
var descrip = document.querySelector('#description')
var temp = document.querySelector('#temp')
var wind = document.querySelector('#wind')
var notification = document.querySelector('#notification')




function convertion(val){
    return (val - 273).toFixed(2)
}

     const api_url = 'https://api.openweathermap.org/data/2.5/weather?q=Casablanca&appid=7b35d13ebd2a5c65503183fb6f4b1cdd';
     var data;
     var tab=[];
     var tab2=[];
     async function getISS() {
    const response = await fetch(api_url);
     data = await response.json();
    
    console.log(data)
    var nameval = data['name']
            var descrip = data['weather']['0']['description']
            var tempature = data['main']['temp']
            var wndspd = data['wind']['speed']
            city.innerHTML=`<span>${nameval}<span>'s weather`
            if(convertion(tempature) > 30){
            notification.innerHTML="il fait chaud"}
            temp.innerHTML = `Temperature: <span>${ convertion(tempature)} C</span>`
            description.innerHTML = `Sky Conditions: <span>${descrip}<span>`
            wind.innerHTML = `Wind Speed: <span>${wndspd} km/h<span>`
  }

  getISS();
// setInterval(() => {
//     getISS()
// }, 100);