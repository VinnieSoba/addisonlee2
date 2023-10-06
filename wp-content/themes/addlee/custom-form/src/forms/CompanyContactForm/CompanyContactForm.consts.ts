import { COUNTRY_CODES } from "../../consts";
import { IOption } from "../../types";
import { CompanyContactFormMapper } from "./CompanyContactForm.mapper";

export const SELECT_VALUES = [
  {
    label: "",
  },
  ...Object.values(COUNTRY_CODES).map(
    CompanyContactFormMapper.mapStringToOption
  ),
];

export const DEFAULT_COUNTRY: IOption = CompanyContactFormMapper.mapStringToOption(
  COUNTRY_CODES.GB
);
