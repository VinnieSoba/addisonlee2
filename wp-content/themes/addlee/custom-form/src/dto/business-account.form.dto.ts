export interface ICompanyDetailsDto {
  duns?: string;
  company_name?: string;
  primary_address: {
    country: string;
    country_code?: string;
    locality?: string;
    region?: string;
    region_code?: string;
    county?: string;
    postal_code?: string;
    street?: string;
  };
}

export interface IBusinessAccountFormDto {
  first_name: string;
  last_name: string;
  salutation_title: string;
  business_email: string;
  business_telephone: string;
  mobile_phone?: string;
  t_c: boolean;
  company_details: ICompanyDetailsDto;
}
