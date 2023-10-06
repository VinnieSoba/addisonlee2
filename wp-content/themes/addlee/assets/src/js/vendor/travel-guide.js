(function ($) {
	
jQuery(document).ready(function() {
	var map, service, timer;
    
	function addHotels(results, status) {
		$('.table-hotels').empty();
		if (status == google.maps.places.PlacesServiceStatus.OK) {
			for (var i = 0; i < 8; i++) {

				// look up the place details
				service.getDetails(results[i], function(result, status) {
					if (status !== google.maps.places.PlacesServiceStatus.OK) {
						console.log(status);
						return;
					}

					var name = result.name;
					var website = result.website;
					var rating = result.rating;

					// get place data
					// console.log("Name: " + name);
					// console.log("Website: " + website);
					// console.log("Rating: " + rating);

					// create rating effect using an offseted alpha div
					var offset = rating/0.05;
					var offsetString = offset + "%";
					var ratingHtml = "";
					if (rating) ratingHtml = '<div class="rating"><div style="left: ' + offsetString + '" class="alpha"></div>';

					// print the result
					$('.table-hotels').append('<li><span><a id="' + results[i].id + '" href="' + website + '" target="_blank">' + name + '</a></span><span>' + ratingHtml + '</span></li>');

				});
			}
		}
	}


	function addToDo(results, status) {
		$('.to-do-slider').empty();
		if (status == google.maps.places.PlacesServiceStatus.OK) {
			for (var i = 0; i < 4; i++) {

				// look up the place details
				service.getDetails(results[i], function(result, status) {
					if (status !== google.maps.places.PlacesServiceStatus.OK) {
						console.log(status);
						return;
					}

					var name = result.name;
					var website = result.website;
					var rating = result.rating;
					var photoUrl;
					if (result.photos) photoUrl = result.photos[0].getUrl({'maxWidth': 115, 'maxHeight': 69});

					// get place data
					// console.log("Name: " + name);
					// console.log("Website: " + website);
					// console.log("Photo URL: " + photoUrl);

					// create rating effect using an offseted alpha div
					var offset = rating/0.05;
					var offsetString = offset + "%";
					var ratingHtml = "";
					if (rating) ratingHtml = '<div class="rating"><div style="left: ' + offsetString + '" class="alpha"></div>';

					// print the result
					$('.to-do-slider').append('<a class="slide" id="' + result.id + '" href="' + website + '" target="_blank">' + name + '</a>');

				});
			}
		}
	}

	function addBarsAndRestaurants(results, status) {
		$('.table-bars-restaurants').empty();
		if (status == google.maps.places.PlacesServiceStatus.OK) {
			for (var i = 0; i < 4; i++) {

				// look up the place details
				service.getDetails(results[i], function(result, status) {
					if (status !== google.maps.places.PlacesServiceStatus.OK) {
						console.log(status);
						return;
					}

					var name = result.name;
					var website = result.website;
					var rating = result.rating;

					// get place data
					// console.log("Name: " + name);
					// console.log("Website: " + website);
					// console.log("Rating: " + rating);

					// create rating effect using an offseted alpha div
					var offset = rating/0.05;
					var offsetString = offset + "%";
					var ratingHtml = "";
					if (rating) ratingHtml = '<div class="rating"><div style="left: ' + offsetString + '" class="alpha"></div>';

					// print the result
					$('.table-bars-restaurants').append('<li><span><a id="' + results[i].id + '" href="' + website + '" target="_blank">' + name + '</a></span><span>' + ratingHtml + '</span></li>');

				});
			}
		}
	}

	function createMarker(myloc) {
	    var m = new google.maps.Marker({
	        map: map,
	        position: myloc,

			icon: {
				url: "/wp-content/themes/addlee/assets/images/icons/marker-grey.png",
				size: new google.maps.Size(12, 12),
				anchor: new google.maps.Point(6, 6)
			},
	        title: "Destination"
	    });
	    return m;
	}

	// flight search
	$('.flight-search').submit(function(e) {

	    // prevent form being submitted using the normal handler
		e.preventDefault();

		// hide the widget
		$('.live-data, .error-widget, .quickbooker').hide();

		clearInterval(timer);

		// form validation
		var formIsValid = true;
		if ($('input[name=flight_number]').val() == "") formIsValid = false;
		var fn = $('input[name=flight_number]').val().trim();
		fn = fn.replace(/ /g,''); // remove all spaces

		if (fn.length < 5) formIsValid = false;

		// get the carrier code and flight number
		var carrierCode = fn.substring(0, 3);
		var flightNumber = fn.substring(3);
		if (!fn.charAt(2).toLowerCase().match(/[a-z]/i)) {
			carrierCode = fn.substring(0, 2);
			flightNumber = fn.substring(2);
		}

		fn = carrierCode + "/" + flightNumber; // add the "/" between the airline and the number


		var flightRequest;
		if (formIsValid) {

		    // show loader
		    $('.form-overlay, .loader').show();

		    // abort any pending request
		    if (flightRequest) flightRequest.abort();

			// today's date
			var d = new Date();
			var yyyy = d.getFullYear();
			var mm = d.getMonth()+1;
			var dd = d.getDate();
			var dep = "/dep/" + yyyy + "/" + mm + "/" + dd;

			// authentication data
			var app_id = "06320637";
			var app_key = "850363044dc557f328d75363bbd883d3";
			var auth = "?appId=" + app_id +"\&appKey=" + app_key;

			// build URL
			var base = "https://api.flightstats.com/flex/flightstatus/rest/v2/jsonp/flight/status/";
			var url = base + fn + dep + auth;

			console.log(url);

		    // AJAX REQUEST: FLIGHT DATA
			flightRequest = $.ajax({
				url: url,
			    dataType: 'JSONP',
			    type: 'GET',
			    AppID: app_id,
			    AppKey: app_key
			});

			// AJAX success
			flightRequest.done(function(response, textStatus, jqXHR) {

				//console.log(response);

				// if there was an error from the API
				if (response.error) {
					//$('.error-title').text(response.error.errorCode);
					//$('.error-message').text(response.error.errorMessage);
					$('.error-widget').slideDown();
					// GA Events
					dataLayer.push({'event': 'Click', 'eventCategory' : 'AirportWidget', 'eventAction' : 'error', 'eventLabel': 'api', 'eventValue' : fn });

				// if the API returned a partial response
				} else if (response.flightStatuses.length == 0) {
					//$('.error-title').text("Flight Not Found");
					//$('.error-message').text("Please check the flight number and try again.");
					$('.error-widget').slideDown();
					// GA Events
					dataLayer.push({'event': 'Click', 'eventCategory' : 'AirportWidget', 'eventAction' : 'error', 'eventLabel': 'notFound', 'eventValue' : fn});
					
				}

				else {
					console.log(response);
					var fs = response.flightStatuses[0];
				
					// flight duration
					var flight_time_total_minutes = fs.flightDurations.scheduledBlockMinutes;
					var hours = Math.floor(flight_time_total_minutes / 60);          
	    			var minutes = flight_time_total_minutes % 60;
	    			var hoursText = (hours > 1 ? " hours " : " hour ");
	    			var minutesText = (minutes > 1 ? " minutes " : " minute");

	    			// airport codes
	    			var dep_airport_code = fs.departureAirportFsCode;
	    			var arr_airport_code = fs.arrivalAirportFsCode;

	    			// airport data
	    			var dep_airport_name, arr_airport_name, dep_terminal, dep_gate, arr_terminal, arr_gate, dep_utc_offset, 
	    			weatherUrl, arr_city, arr_latitude, arr_longitude, dep_latitude, dep_longitude;
	    			for (var i=0; i<response.appendix.airports.length; i++) {
	    				var a = response.appendix.airports[i];

	    				// departure airport
	    				if (a.iata == dep_airport_code) {
	    					dep_airport_name = a.name;
	    					dep_utc_offset = a.utcOffsetHours - 1;
	    					dep_latitude = a.latitude;
	    					dep_longitude = a.longitude;
	    				}

	    				// arrival airport
	    				if (a.iata == arr_airport_code) {
	    					arr_airport_name = a.name;
	    					weatherUrl = a.weatherUrl;
	    					arr_city = a.city;
	    					arr_latitude = a.latitude;
	    					arr_longitude = a.longitude;
	    				}
	    			}

	    			// gates and terminals
	    			var dep_terminal, dep_gate, arr_terminal, arr_gate = "n/a";
	    			if (fs.airportResources) {
		    			dep_terminal = (fs.airportResources.departureTerminal != undefined? fs.airportResources.departureTerminal : "n/a");
		    			dep_gate = (fs.airportResources.departureGate != undefined? fs.airportResources.departureGate : "n/a");
		    			arr_terminal = (fs.airportResources.arrivalTerminal != undefined? fs.airportResources.arrivalTerminal : "n/a");
		    			arr_gate = (fs.airportResources.arrivalGate != undefined? fs.airportResources.arrivalGate : "n/a");
		    		}

	    			// get departure and arrival times, with possible delays
	    			var dep_date = new Date(fs.departureDate.dateLocal);
	    			var arr_date = new Date(fs.arrivalDate.dateLocal);
	    			var dep_date_actual = dep_date;
	    			var arr_date_actual = arr_date;
	    			if (fs.delays) {
	    				var delay = 0;
	    				if (fs.delays.arrivalGateDelayMinutes) delay += fs.delays.arrivalGateDelayMinutes;
	    				if (fs.delays.departureGateDelayMinutes) delay += fs.delays.departureGateDelayMinutes;
	    				if (delay > 0) {
							dep_date_actual = new Date(dep_date.getTime() + delay*60000);
							arr_date_actual = new Date(arr_date.getTime() + delay*60000);
	    					$('.delay').slideDown();
	    				} else $('.delay').hide();
	    			} else $('.delay').hide();
	    			
	    			// countdown to departure
				    var _second = 1000;
				    var _minute = _second * 60;
				    var _hour = _minute * 60;
				    var _day = _hour * 24;
				    function countdown() {
				        var now = new Date();
				        
				        // GET LONDON TIME - adjust for the departure airport's UTC offset
				        // CHANGE TO BE FROM USER'S LOCATION???

				        now.setHours(now.getHours() + dep_utc_offset);
				        var distance = dep_date_actual - now;

				        if (distance < 0) {
				            clearInterval(timer);
				            $('.countdown-value').text('00 : 00 : 00');
				            return;
				        }
				        var days = Math.floor(distance / _day);
				        var hours = Math.floor((distance % _day) / _hour);
				        var minutes = Math.floor((distance % _hour) / _minute);
				        var seconds = Math.floor((distance % _minute) / _second);
				        if (hours < 10) hours = "0" + hours;
				        if (minutes < 10) minutes = "0" + minutes;
				        if (seconds < 10) seconds = "0" + seconds;

				        var timeString = hours + " : " + minutes + " : " + seconds;
				        $('.countdown-value').text(timeString);
				    }
				    countdown();
				    timer = setInterval(countdown, 1000);

	    			// format departure time
	    			var dep_hours = dep_date.getHours();
	    			var dep_minutes = dep_date.getMinutes();
	    			var am_pm = (dep_hours < 12 ? " AM" : " PM");
	    			dep_hours = (dep_hours < 13 ? dep_hours : dep_hours-12);
	    			dep_hours = (dep_hours < 10 ? "0" + dep_hours : dep_hours);
	    			dep_minutes = (dep_minutes < 10 ? "0" + dep_minutes : dep_minutes);
	    			var dep_time = dep_hours + ":" + dep_minutes + " " + am_pm;

	    			// format arrival time
	    			var arr_hours = arr_date.getHours();
	    			var arr_minutes = arr_date.getMinutes();
	    			var am_pm = (arr_hours < 12 ? " AM" : " PM");
	    			arr_hours = (arr_hours < 13 ? arr_hours : arr_hours-12);
	    			arr_hours = (arr_hours < 10 ? "0" + arr_hours : arr_hours);
	    			arr_minutes = (arr_minutes < 10 ? "0" + arr_minutes : arr_minutes);
	    			var arr_time = arr_hours + ":" + arr_minutes + " " + am_pm;

	    			// format actual departure time
	    			var dep_hours_actual = dep_date_actual.getHours();
	    			var dep_minutes_actual = dep_date_actual.getMinutes();
	    			var am_pm = (dep_hours_actual < 12 ? " AM" : " PM");
	    			dep_hours_actual = (dep_hours_actual < 13 ? dep_hours_actual : dep_hours_actual-12);
	    			dep_hours_actual = (dep_hours_actual < 10 ? "0" + dep_hours_actual : dep_hours_actual);
	    			dep_minutes_actual = (dep_minutes_actual < 10 ? "0" + dep_minutes_actual : dep_minutes_actual);
	    			var dep_time_actual = dep_hours_actual + ":" + dep_minutes_actual + " " + am_pm;

	    			// format actual arrival time
	    			var arr_hours_actual = arr_date_actual.getHours();
	    			var arr_minutes_actual = arr_date_actual.getMinutes();
	    			var am_pm = (arr_hours_actual < 12 ? " AM" : " PM");
	    			arr_hours_actual = (arr_hours_actual < 13 ? arr_hours_actual : arr_hours_actual-12);
	    			arr_hours_actual = (arr_hours_actual < 10 ? "0" + arr_hours_actual : arr_hours_actual);
	    			arr_minutes_actual = (arr_minutes_actual < 10 ? "0" + arr_minutes_actual : arr_minutes_actual);
	    			var arr_time_actual = arr_hours_actual + ":" + arr_minutes_actual + " " + am_pm;

				    // AJAX REQUEST: WEATHER
				    var wwo_key = "05ce505554b64a024fb3d71a234b0";
				    base = "https://api.worldweatheronline.com/premium/v1/weather.ashx?";
				    auth = "key=" + wwo_key;
				    var lat_long = "&q=" + arr_latitude + "," + arr_longitude;
				    var format = "&format=json";
				    url = base + auth + lat_long + format;
					weatherRequest = $.ajax({
						url: url,
					    dataType: 'JSONP',
					    type: 'GET',
					    AppID: app_id,
					    AppKey: app_key
					});

					// AJAX success
					weatherRequest.done(function(response, textStatus, jqXHR) {
						console.log(response);

						// current condition
						var temp_now = response.data.current_condition[0].temp_C;
						$('.big-temp-value').text(temp_now);
						var symbol_now = response.data.current_condition[0].weatherCode;
						var weatherClass = weatherCodes[symbol_now];
						$('.big-weather-symbol').removeClass().addClass("big-weather-symbol " + weatherClass);

						// 5 day forecast
						weekdays =  ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"];
						for (var i=0; i<5; i++) {

							// day of the week
							var day = response.data.weather[i];
							var forecast_date = day.date;

							var d = new Date(forecast_date);
							$('.day:nth-of-type('+(i+1)+') .day-label').text(weekdays[d.getDay()]);

							// symbol
							var afternoon_weather = day.hourly[5];
							var weather_code = afternoon_weather.weatherCode;
							var weatherClass = weatherCodes[weather_code];
							$('.day:nth-of-type('+(i+1)+') .day-icon').removeClass().addClass("day-icon " + weatherClass);

							// temperature
							$('.day:nth-of-type('+(i+1)+') .day-temp').html(afternoon_weather.tempC);
						}

					});

					// AJAX failure
					weatherRequest.fail(function(jqXHR, textStatus, errorThrown) {
						console.log(errorThrown);
					});

					// AJAX completion (success or failure)
					weatherRequest.always(function() {

					});


					// PLACES API
					var placesPoint = new google.maps.LatLng(arr_latitude, arr_longitude);
					map = new google.maps.Map(document.getElementById('flight-map'), {
						center: placesPoint,
						zoom: 15,
                        scrollwheel: false,
                        streetViewControl: false,
                        mapTypeControl: false,
						//draggable: false,
    					styles: map_style,
    					//disableDefaultUI: true
					});
                    
					// plot flightpath on map
					var flightPlanCoordinates = [
						{lat: dep_latitude, lng: dep_longitude},
						{lat: arr_latitude, lng: arr_longitude}
					];
					var flightPath = new google.maps.Polyline({
						path: flightPlanCoordinates,
						geodesic: true,
						strokeColor: '#494a43',
						strokeOpacity: 1.0,
						strokeWeight: 2
					});
					flightPath.setMap(map);

					// hotels
					var hotelsRequest = {
						location: placesPoint,
						radius: '5000',
						types: ['lodging']
					};
					service = new google.maps.places.PlacesService(map);
					service.nearbySearch(hotelsRequest, addHotels);

					// to do
					var toDoRequest = {
						location: placesPoint,
						radius: '5000',
						types: ['amusement_park', 'aquarium', 'art_gallery', 'bowling_alley', 'casino', 'department_store', 'movie_theater', 'museum', 'park', 'zoo']
					};
					service = new google.maps.places.PlacesService(map);
					setTimeout(function() { service.nearbySearch(toDoRequest, addToDo) }, 0);

					// bars and restaurants
					barsAndRestaurantsRequest = {
						location: placesPoint,
						radius: '5000',
						types: ['bar', 'food', 'restaurant']
					};
					service = new google.maps.places.PlacesService(map);
					// WE NEED A DELAY HERE TO GET AROUND GOOGLE'S QUERY LIMITS. 3 SECONDS SEEMS ABOUT RIGHT
					// BUT FURTHER TESTS SHOULD BE DONE ONCE TO DETERMINE THE OPTIMUM DELAY
					setTimeout(function() { service.nearbySearch(barsAndRestaurantsRequest, addBarsAndRestaurants) }, 4000);


					// add markers
					marker1 = createMarker(new google.maps.LatLng(dep_latitude, dep_longitude));
					marker2 = createMarker(new google.maps.LatLng(arr_latitude, arr_longitude));

					// zoom and center map to show full flightpath
					var markers = [marker1, marker2];
					var new_boundary = new google.maps.LatLngBounds();
					for (index in markers) {
						var position = markers[index].position;
						new_boundary.extend(position);
					}
					map.fitBounds(new_boundary);



					// EVENTBRITE API
					var eventbrite_token = "PMI2S63ZAI25RSX4VB37";
					var eventsUrl = "https://www.eventbriteapi.com/v3/events/search/?location.address=" + arr_city + "&sort_by=best&token=" + eventbrite_token;
				    var eventRequest;

					$.get(eventsUrl, function(res) {
						//console.log(res);

						if (res.events.length) {

							$('.events').empty();

							var numEvents = res.events.length;
							if (res.events.length > 5) numEvents = 5;
							for (var i=0; i < numEvents; i++) {
								var e = res.events[i];
								//console.log(e);

								var eventUrl = e.url;
								var eventImageUrl = e.logo.url;
								var eventTitle = e.name.text;
								var eventDescription = e.description.text;
								var eventDate = new Date(e.start.local);
								var dd = eventDate.getDate();
								var mm = eventDate.getMonth()+1;
								var yyyy = eventDate.getFullYear();
								eventDate = dd + "/" + mm + "/" + yyyy;

								// get the venue
								var eventVenue;
								var eventVenueId = e.venue_id;
								var venueUrl = "https://www.eventbriteapi.com/v3/venues/" + eventVenueId + "/?token=" + eventbrite_token;
								$.get(venueUrl, function(res2) {
									eventVenue = res2.name;
									if (res2.name) $('#' + res2.id).text(eventVenue);
								});

								// print the result
								$('.events').append('<div id="' + e.id + '" class="event"><div class="event-content"><a class="event-title" href="' + eventUrl + '">' + eventTitle + '</a><div id="' + eventVenueId + '" class="event-venue"></div><div class="event-date">' + eventDate + '</div></div></div>');
							}
						}
					});

	    			// populate the page
					$('.duration-value').text(hours + hoursText + minutes + minutesText);
					$('.dep-airport .airport-code').text(dep_airport_code);
					$('.arr-airport .airport-code').text(arr_airport_code);
					$('.dep-airport .airport-name').text(dep_airport_name);
					$('.arr-airport .airport-name').text(arr_airport_name);
					$('.airportname').text(arr_airport_name);
					$('.dep-time .scheduled-value').text(dep_time);
					$('.arr-time .scheduled-value').text(arr_time);
					$('.dep-time .big-time').text(dep_time_actual);
					$('.arr-time .big-time').text(arr_time_actual);
					$('.dep-airport-detail .terminal-value').text(dep_terminal);
					$('.dep-airport-detail .gate-value').text(dep_gate);
					$('.arr-airport-detail .terminal-value').text(arr_terminal);
					$('.arr-airport-detail .gate-value').text(arr_gate);
					$('.region').text(arr_city);


					// GA Events
					dataLayer.push({'event': 'Click', 'eventCategory' : 'AirportWidget', 'eventAction' : 'depAirport,arrAirport', 'eventLabel': dep_airport_name+','+arr_airport_name , 'eventValue' : fn });

					// show the widget
					$('.live-data, .quickbooker').slideDown();
                    
                    var center = map.getCenter();
                    google.maps.event.trigger(map, "resize");
                    map.setCenter(center);
                    map.setZoom(4);
                        
				}
			});

			// AJAX failure
			flightRequest.fail(function(jqXHR, textStatus, errorThrown) {
				console.log(errorThrown);
			});

			// AJAX completion (success or failure)
			flightRequest.always(function() {

			    // hide the loader
		    	$('.form-overlay, .loader').hide();
			});

		// form validation failed
		} else {
			//$('.error-title').text("Flight Not Found");
			//$('.error-message').text("Please check the flight number and try again.");
			$('.error-widget').slideDown();
		}
        
	});
    
});
}(jQuery));