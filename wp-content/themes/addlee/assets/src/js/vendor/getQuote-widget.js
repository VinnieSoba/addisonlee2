// pick up
var getContainer = document.getElementById('get-a-quote');

getContainer.innerHTML = '<div id="return-response-data"><div class="grid-container"><div class="item1"><img src="http://localhost/addisonlee2/wp-content/uploads/2025/01/pin.svg"></div><div class="item2"><div title="pickup" name="pick" id="pickup-point" value="PICK UP" class="address-search__combobox"><div class="form-control"><label><span>Pick Up</span><input placeholder="Enter Location" id="myInput" onkeydown="filterApiList()" type="text"><span id="anchor-icon"></span></label></div><ul id="myUL"></ul></div></div><div class="item3"><img class="dropoff" src="http://localhost/addisonlee2/wp-content/uploads/2025/01/pin.svg"></div><div class="item4"><select title="dropoff" name="drop" id="dropoff-point"></select></div></div></div><div id="return-response-data"><div class="grid-container"><div class="item1"><img src="http://localhost/addisonlee2/wp-content/uploads/2025/01/Date.svg"></div><div class="item2"><select title="pickup" name="pick" id="pickup-point" value="PICK UP"></select></div><div class="item3"></div><div class="item4"><a href="#" class="cta">GET QUOTE</a><div id="display-quote"></div></div></div></div>';


var getQuoteBtn = jQuery('#get-a-quote-btn');

function getPickUp(){
    console.log('returned from wpforms')
    const urlbackup = 'http://localhost:5252/pickup';

    let pcode = 'SW152LL';

    let url = `https://cors-anywhere.herokuapp.com/https://sandbox.api.eu.addisonleeglobal.net/api-wpforms/v2/api/addresses?postCode=${pcode}`;

    try {
        fetch(url, {
            method: 'GET',
            mode: 'cors',
            headers: {
                'client_id':'8f082bed9b4944f6a62ea5a217dc1ebb',
                'client_secret':'428e097bbB054E3aaA761A09E5C42E6F'
            },
            body: JSON.stringify()
        }).then((res) => {
            if(res.statusText = "ok" ){
                console.log("SUCCESS");
                        
                return res.json(); 
    
            }  else {
                console.log("FAILED")
            }
        })
        .then((data) => { 
    
            /*data.forEach(item => {
                const listing = `<option>${item.postcode}</option>`;
                document.querySelector('select').insertAdjacentHTML('beforeend', listing);
            })*/
            let items = data;
            
            items.map(function(item){
                const q = document.getElementById('myUL');
                //q.style.cssText ='width:100%;height:100%;position:absolute;left:0;top:0'; 
                const l = document.createElement('li'); 
                const b = document.createElement('a'); 
                const e = q.appendChild(l);
                const d = l.appendChild(b);
                l.setAttribute("id", "pickup-address");
                const p = `${item.formatted_address}`;
                const ai = d.innerHTML = p;
                console.log(q);
               
                console.log("data coming through", ai)})
            })
            
            
        .then((error) => console.log(error.message))
        
    } catch (error) {
        console.log(error.message)
    }

   
}


function addAttr(){
    const a = document.querySelector('option');
    a.setAttribute('id', 'pickup-option');
}


function getDropOff(){
    const url = 'http://localhost:5252/dropoff';
    fetch(url, {
    method: 'GET',
    headers: {
            'Content-Type': 'application/json'
        }
    }).then((res) => { 
    if(res.statusText = 'ok')
    {
        console.log('SUCCESS! we have the dropoff data',res);
        return res.json();
    } else {
        console.log('FAILED');
    }
    })
.then(data => {
    let dropoff = data;

    dropoff.locations.map(function(drop) {
        const r = document.getElementById('dropoff-point');
        r.style.cssText ='width:100%;height:100%;';
        const l = document.createElement('option'); 
        const e = r.appendChild(l);
        const p = `${drop.postcode}`;
        const ai = e.innerHTML = p;

    })
    
    console.log("data coming from dropoff api", dropoff)})
    .catch((error) => {console.log(error.message)})
}

jQuery(document).ready(function($){
    var getQuoteBtn = $('.get-a-quote-btn');
    $(getQuoteBtn).click(function(){
        $('.widget-get-a-quote').toggle();
    });

});


const sod_select = document.getElementsByClassName('sod_select focus open');

window.onload = function(){
    const pickup = document.querySelector('#pickup-point');
    console.log('window loaded', pickup);
    insertLabel(); 
    getApiCall()
    
}

function checkValueForOptions(){
    const e = document.getElementById('dropoff-point').selectedIndex;
    alert(document.getElementsByTagName("option")[e].value);
}

function insertLabel(){
    var labelPickUp = document.querySelectorAll('span.sod_label')[0];
    labelPickUp.innerHTML = 'PICK UP <br> <span style="text-transform: initial;"></span>';

    if (labelPickUp.length = 0){
        console.log('sod_label is empty');
        labelPickUp.innerHTML = 'PICK UP <br> <span style="text-transform: initial;"> </span>';
    }

    var labelDropOff = document.querySelectorAll('span.sod_label')[1];
    labelDropOff.innerHTML = 'Drop Off <br> <span style="text-transform: initial;"> </span>';

    if(labelDropOff.length = 0){
        labelDropOff.innerHTML = 'Drop Off <br> <span style="text-transform: initial;"></span>';
    }

}


function clickedOnce() {
    getPickUp();
}
document.getElementById('anchor-icon').addEventListener('click', clickedOnce,{once:true});


function clickedDropOffPoint(){
    getDropOff();
}


document.getElementById('dropoff-point').addEventListener('click', clickedDropOffPoint,{once:true});


// function to create a dupliacted row of drop off turned off for now

/*function addDropOffEvent() {
const c = document.querySelector('div.item4');
const i = document.createElement('select');
const b = c.appendChild(i);
i.innerHTML += b;
}

document.querySelector('div.item4 img').addEventListener('click', addDropOffEvent);*/

function getAQuote(){
const dropoffcalc = document.getElementById('dropoff-point').selectedIndex;
const displayCont = document.getElementById('dropoff-point').options;
const pickupcalc = document.getElementById('pickup-point').selectedIndex;
const pickupOpt = document.getElementById('pickup-point').options;
console.log("Index" + displayCont[dropoffcalc].index + "is" + displayCont[dropoffcalc].text);

if(displayCont[dropoffcalc].text === 'W4 2EJ' && pickupOpt[pickupcalc].text === 'ub2 9tt' ){

// return a price for selection of dropoff
//document.getElementById('display-quote').innerHTML = `<span style="font-size: 22px; color:"></span>`;
getApiCall();

} else {
    document.getElementById('display-quote').innerHTML = '<span style="font-size: 22px; color:"></span>';
}

}

//document.querySelector('.cta').addEventListener('click', getAQuote);

function getApiCall(){

  const data = {

    "payment_method": "Account",
        "services": [
            {
                "code": "standard_car"
            }
        ],
        "locations": [
            {
                "address": "34 Linden Gardens",
                "name": "34,Linden gardens",
                "source": "Address",
                "town": "London",
                "country": "GB",
                "postcode": "W4 2EJ",
                "id": 14,
                "lat": 51.49173355303652,
                "long": -0.25791608634950003
            },
            {
                "address": "65 crone court",
                "name": "65 crone court,Denmark road",
                "source": "Address",
                "town": "London",
                "country": "GB",
                "postcode": "NW6 5BX",
                "id": 14,
                "lat": 51.53338822118238,
                "long": -0.20057465304201397
            }
        ]
    

  }  

  fetch('https://sandbox.api.eu.addisonleeglobal.net/api-quickbook/v3/api/quote/price', {
    method: 'post',
    mode: 'cors',
    headers: {
        /*'client_id' : 'jFNg/kYdcEFninivJ7cNtFl5RpsspcAxb9YgbpVf3duU0+IKdJkt0A==',
        'client_secret' : 'Mofmpvt70zYlA913sryEVmnoen/Qh77lrqBSukOIJrIFpqDAchKrfQ==',*/
        'Authorization' : 'AL 3fbf5a9ab0b64eec9dc2aaa5269a5db7:776c6a2B67774a4c830be48D132c6014',
        'Content-Type' : 'application/json'
    },
    body: JSON.stringify(data)
   }).then(response => { 
        return response.json();
   }).then(data => {

        let prices = data;

        if(prices) {
            console.log('Response coming from the mule api', prices);
            prices.quotes.map(function(price){
                document.getElementById('display-quote').innerHTML = `<span style="font-size: 22px; color:">${price.price}</span>`;
            });
        } else {
            document.getElementById('display-quote').innerHTML = `<span class="text-danger" style="font-size: 22px;">No quotes available Please check details</span>`;
        }

    })
   .catch(err => {console.log(err.message)})
}

function filterApiList(){
        var input, filter, ul, li, a, i, txtValue;
        input = document.getElementById("myInput");
        filter = input.value.toLowerCase();
        console.log('this is filter input',filter)
        ul = document.getElementById("myUL");
        li = ul.getElementsByTagName("li");
        for (i = 0; i < li.length; i++) {
            a = li[i].getElementsByTagName("a")[0];
            txtValue = a.textContent || a.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                li[i].style.display = "";
            } else {
                li[i].style.display = "none";
            }
        }
}



