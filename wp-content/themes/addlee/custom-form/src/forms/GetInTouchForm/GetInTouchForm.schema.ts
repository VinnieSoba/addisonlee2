import yup from "../../yup";
import { SchemaValidators } from "../../validators";

export const getInTouchFormSchema = yup.object({
  firstName: SchemaValidators.requiredString,
  lastName: SchemaValidators.requiredString,
  businessEmail: SchemaValidators.requiredEmail,
  businessPhoneNumber: SchemaValidators.requiredPhoneNumber,
  comments: SchemaValidators.requiredString,
  title: SchemaValidators.requiredString,
});
