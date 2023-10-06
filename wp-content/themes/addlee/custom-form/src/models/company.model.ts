interface IStreetAddress {
  line1: string;
  line2: string;
}

interface ICompanyAddress {
  country: string;
  countryCode: string;
  locality: string;
  region: string;
  regionCode: string;
  county: string;
  postalCode: string;
  streetNumber: string;
  streetName: string;
  streetAddress: IStreetAddress;
}

export interface ICompanyModel {
  duns: string;
  primaryName: string;
  primaryAddress: ICompanyAddress;
}
