import { ICompanySearchResultsDto } from "./company-search-results.dto";

export interface ICompanyDetailsFormDto {
  first_name: string;
  last_name: string;
  business_email: string;
  mobile_phone: string;
  business_telephone: string;
  salutation_title: string;
  t_c: boolean;
  comments?: string;
  email_consent?: boolean;
  phone_consent?: boolean;
  sms_consent?: boolean;
  preferred_payment_method?: string;
  company_name?: string;
  company_details?: ICompanySearchResultsDto;
}
