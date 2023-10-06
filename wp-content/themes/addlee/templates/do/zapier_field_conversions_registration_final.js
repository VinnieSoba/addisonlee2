// Convert fields values to Saleforce format(s)

// Salesforce field: OwnerId
let sfRecordTypeId    = "";
const inRecordTypeIds = [ "0124J0000000VRJQA2", "0124J0000000VRTQA2", "0124J000000hQL7QAM" ];
const outOwnerIds     = [ "00G4J000000EIepUAG", "00G4J000000OoQTUA0", "00G4J0000033yjtUAA" ];
sfRecordTypeId = outOwnerIds[ inRecordTypeIds.indexOf( inputData.recordTypeId ) ] || '00G4J000000EIekUAG';

return { sfRecordTypeId: sfRecordTypeId };