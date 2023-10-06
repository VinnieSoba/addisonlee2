import { ICompanySearchResultsDto } from "../dto";
import { ICompanyModel } from "../models";

export class ApiMapper {
  static mapSearchResult = (
    searchResult: ICompanySearchResultsDto
  ): ICompanyModel => {
    return {
      duns: searchResult.duns,
      primaryName: searchResult.primary_name,
      primaryAddress: {
        country: searchResult.primary_address.country,
        countryCode: searchResult.primary_address.country_code,
        locality: searchResult.primary_address.locality,
        region: searchResult.primary_address.region,
        regionCode: searchResult.primary_address.region_code,
        county: searchResult.primary_address.county,
        postalCode: searchResult.primary_address.postal_code,
        streetNumber: searchResult.primary_address.street_number,
        streetName: searchResult.primary_address.street_name,
        streetAddress: {
          line1: searchResult.primary_address.street_address.line1,
          line2: searchResult.primary_address.street_address.line2,
        },
      },
    };
  };

  static mapSearchResults = (
    searchResults: ICompanySearchResultsDto[]
  ): ICompanyModel[] => {
    return searchResults.map(ApiMapper.mapSearchResult);
  };
}
