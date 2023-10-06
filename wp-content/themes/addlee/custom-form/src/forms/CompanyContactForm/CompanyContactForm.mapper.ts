import { IOption } from "../../types";

export class CompanyContactFormMapper {
  static mapStringToOption = (text: string): IOption => ({
    value: text,
    label: text,
  });
}
