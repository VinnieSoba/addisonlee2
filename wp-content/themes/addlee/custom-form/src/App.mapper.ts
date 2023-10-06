import { IBusinessAccountFormDto, ICompanyDetailsDto } from "./dto";
import { ICompanyModel } from "./models";
import { ICompanyDetailsFormData, IContactDetailsFormData } from "./types";

export class AppMapper {
  static mapCompanyDetails = (
    company: ICompanyModel,
    companyDetails: ICompanyDetailsFormData
  ): ICompanyDetailsDto => {
    const companyWasSearched = !!company;
    return companyWasSearched
      ? {
          duns: company.duns,
          company_name: company.primaryName,
          primary_address: {
            country: companyDetails.country,
            country_code: company.primaryAddress.countryCode,
            locality: companyDetails.city,
            region: company.primaryAddress.region,
            region_code: company.primaryAddress.regionCode,
            county: company.primaryAddress.county,
            postal_code: companyDetails.postalCode,
            street: companyDetails.streetAddress,
          },
        }
      : {
          company_name: companyDetails.companyName,
          primary_address: {
            country: companyDetails.country,
          },
        };
  };

  static mapFormDataToDto = (
    company: ICompanyModel,
    contactDetails: IContactDetailsFormData,
    companyDetails: ICompanyDetailsFormData
  ): IBusinessAccountFormDto => {
    const mappedCompanyDetails = AppMapper.mapCompanyDetails(
      company,
      companyDetails
    );

    return {
      first_name: contactDetails.firstName,
      last_name: contactDetails.lastName,
      salutation_title: contactDetails.title,
      business_email: contactDetails.businessEmail,
      business_telephone: contactDetails.businessPhoneNumber,
      mobile_phone: contactDetails.businessPhoneNumber,
      t_c: companyDetails.termsAcceptance,
      company_details: mappedCompanyDetails,
    };
  };
}
