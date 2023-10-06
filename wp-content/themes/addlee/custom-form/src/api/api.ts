import axios from "axios";
import { ROUTES } from "../consts";
import {
  IBusinessAccountFormDto,
  ICompanySearchResultsDto,
  IGetInTouchFormDto,
  IBusinessAccountResponseDto,
} from "../dto";
import { API_CONFIG, FORM_SUBMISSION_HEADERS } from "./api.config";
import { ApiMapper } from "./api.mapper";

export const http = axios.create(API_CONFIG);

const api = {
  searchCompanyByName: (companyName: string) => {
    return http
      .get<ICompanySearchResultsDto[]>(
        `${ROUTES.companySearch}?search=${companyName}`
      )
      .then((response) => ApiMapper.mapSearchResults(response.data));
  },
  searchCompanyByRegNumber: (regNumber: string) => {
    return http
      .get<ICompanySearchResultsDto[]>(
        `${ROUTES.companySearch}?search=${regNumber}`
      )
      .then((response) => ApiMapper.mapSearchResults(response.data));
  },
  sendGetInTouchFormData: (formData: IGetInTouchFormDto) => {
    return http.post(ROUTES.getInTouchForm, formData, {
      headers: FORM_SUBMISSION_HEADERS,
    });
  },
  sendBusinessAccountFormData: (formData: IBusinessAccountFormDto) => {
    return http.post<IBusinessAccountResponseDto>(
      ROUTES.businessAccountForm,
      formData,
      {
        headers: FORM_SUBMISSION_HEADERS,
      }
    );
  },
};

export default api;
