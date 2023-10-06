import yup from "../../yup";
import { SchemaValidators } from "../../validators";

const basicSchema = yup.object({
  termsAcceptance: SchemaValidators.requiredBoolean,
  country: SchemaValidators.requiredAddressField,
});

const addressDetailsSchema = yup.object({
  streetAddress: SchemaValidators.requiredAddressField,
  city: SchemaValidators.requiredAddressField,
  postalCode: SchemaValidators.requiredAddressField,
});

export const getCompanyDetailsFormSchema = (withAddressDetails: boolean) => {
  const finalSchema = withAddressDetails
    ? basicSchema.concat(addressDetailsSchema)
    : basicSchema;

  return finalSchema;
};
