import yup from "../../yup";
import { SchemaValidators } from "../../validators";

export const contactDetailsFormSchema = yup.object({
  title: SchemaValidators.requiredString,
  firstName: SchemaValidators.requiredString,
  lastName: SchemaValidators.requiredString,
  businessEmail: SchemaValidators.requiredEmail,
  businessPhoneNumber: SchemaValidators.requiredPhoneNumber,
});
