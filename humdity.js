var cpt=0; 
        var tab=[];
        var tab2=[];
      const api_url = 'https://api.thingspeak.com/channels/1655736/fields/2.json?results';
      async function getLevel() {
        const response = await fetch(api_url);
        const data = await response.json();
  

document.getElementById('level').textContent = data['feeds'][cpt]['field4']
document.getElementById('time').textContent = data['feeds'][cpt]['created_at'].split('T')
cpt++      
}
    
setInterval(getLevel, 1000);