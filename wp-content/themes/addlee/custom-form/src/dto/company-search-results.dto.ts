export interface IStreetAddress {
  line1: string;
  line2: string;
}

export interface ICompanyPrimaryAddress {
  country: string;
  country_code: string;
  locality: string;
  region: string;
  region_code: string;
  county: string;
  postal_code: string;
  street_number: string;
  street_name: string;
  street_address: IStreetAddress;
}

export interface ICompanySearchResultsDto {
  duns: string;
  primary_name: string;
  primary_address: ICompanyPrimaryAddress;
}
