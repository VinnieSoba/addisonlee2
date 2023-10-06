import * as yup from "yup";
import { YupValidators } from "./yup.validators";

interface ICustomValidators {
  phoneNumber(errorMessage: string): yup.StringSchema<any>;
}

declare module "yup" {
  interface StringSchema extends ICustomValidators {}
}

export const getExtendedYup = () => {
  yup.addMethod<yup.StringSchema<any>>(
    yup.string,
    "phoneNumber",
    function (errorMessage) {
      return this.test("text-phone-number", errorMessage, function (value) {
        const { path, createError } = this;
        return (
          YupValidators.validPhoneNumber(value) ||
          createError({ path, message: errorMessage })
        );
      });
    }
  );

  return yup;
};
