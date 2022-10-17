//var ctx = document.getElementById('myChart').getContext('2d');
var api_url1 = 'https://api.thingspeak.com/channels/1655736/fields/1.json?results';

              async function getISS1() {
              var data;
              var tab=[];
              var tab2=[];
              var response = await fetch(api_url1);
              data = await response.json();
              for(var i = 0; i < data['feeds'].length; i++){        
              if( data['feeds'][i]['field1']==null){      
                    tab.push('0');
                          } else {
                        tab.push(data['feeds'][i]['field1'])
                    }

              }

              for(var l = 0; l < data['feeds'].length; l++){        
              tab2.push(data['feeds'][l]['created_at'])
              }

             
              window.Line = new Chart(document.getElementById('myChart').getContext('2d'), {
              type: 'line',
              data:data = {
              labels:tab2,
              datasets: [{
              label: 'Temperature',
              data:tab,
              fill: false,
              borderColor: 'rgb(247, 40, 40)',
              tension: 0.2
              }]
              },
              options: {
              responsive: false
              }

              });
        

               }

     
 
     getISS1();
     

