import yup from "../yup";
import { validationMessages } from "../consts";

export class SchemaValidators {
  static requiredString = yup
    .string()
    .required(validationMessages.fieldIsRequired);

  static requiredAddressField = yup
    .string()
    .required(validationMessages.incompleteAddress);

  static requiredBoolean = yup
    .bool()
    .required(validationMessages.fieldIsRequired)
    .isTrue(validationMessages.fieldIsRequired);

  static requiredEmail = SchemaValidators.requiredString.email(
    validationMessages.invalidEmail
  );

  static requiredPhoneNumber = yup
    .string()
    .phoneNumber(validationMessages.invalidPhoneNumber)
    .required(validationMessages.fieldIsRequired);
}
