import { ICompanyModel } from "../../models";
import { COUNTRY_CODES } from "../../consts";
import { DEFAULT_COUNTRY } from "../CompanyContactForm/CompanyContactForm.consts";

export class CompanyDetailsFormUtils {
  static getCompanyCountry = (company?: ICompanyModel): string | undefined => {
    const companyCountryCode = company?.primaryAddress.countryCode;
    return COUNTRY_CODES[companyCountryCode];
  };

  static getDefaultFormData = (company: ICompanyModel) => {
    return {
      streetAddress: company?.primaryAddress.streetAddress.line1,
      postalCode: company?.primaryAddress.postalCode,
      city: company?.primaryAddress.locality,
      country:
        CompanyDetailsFormUtils.getCompanyCountry(company) ||
        DEFAULT_COUNTRY.value,
    };
  };
}
