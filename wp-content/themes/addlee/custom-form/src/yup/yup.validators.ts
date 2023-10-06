import { isValidPhoneNumber } from "libphonenumber-js";

export class YupValidators {
  static validPhoneNumber = (value?: string): boolean =>
    value && isValidPhoneNumber(value);
}
