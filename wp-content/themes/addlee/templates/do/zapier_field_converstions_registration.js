// Convert fields values to Saleforce format(s)

// Salesforce field: Owner Driver
let sfOwnerDriver = false;
if ( 'I own my own vehicle' === inputData.driverType ) {
	sfOwnerDriver = true;
}

// Salesforce field: Driver Type
let sfDriverType = "Rental";
if ( 'I own my own vehicle' === inputData.driverType ) {
	sfDriverType = "Owner";
}

// Salesforce field: Type
let sfType = "Driver";
if ( 'I own my own vehicle' === inputData.driverType ) {
	sfType = "Owner Driver";
}

// Salesforce field: Driver Category
let sfDriverCategory = "";
const wpDriverCategories = [ "Passenger Car", "Bike", "Van", "Push Bike" ];
const sfDriverCategories = [ "Car", "Bike", "Vans", "Pushbike" ];
if ( 'I own my own vehicle' === inputData.driverType ) {
	sfDriverCategory = sfDriverCategories[ wpDriverCategories.indexOf( inputData.ownerVehicleType ) ];
} else {
	sfDriverCategory = sfDriverCategories[ wpDriverCategories.indexOf( inputData.rentalVehicleType ) ];
}

// Salesforce field: Ex Driver
let sfExDriver = false;
if ( 'Yes' === inputData.exDriver ) {
	sfExDriver = true;
}

return { sfOwnerDriver: sfOwnerDriver, sfDriverType: sfDriverType, sfType: sfType, sfDriverCategory: sfDriverCategory, sfExDriver: sfExDriver };