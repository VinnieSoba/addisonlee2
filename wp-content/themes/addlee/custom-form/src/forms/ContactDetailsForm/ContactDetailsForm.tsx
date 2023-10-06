import React, { memo } from "react";
import { useForm, Controller } from "react-hook-form";
import {
  TextInput,
  SelectField,
  FormFieldsContainer,
  Button,
} from "../../components";
import { contactDetailsFormSchema } from "./ContactDetailsForm.schema";
import { useYupValidationResolver } from "../../utils";
import {
  TITLE_SELECT_OPTIONS,
  DEFAULT_TITLE_SELECT_OPTION,
  MOBILE_PHONE_PLACEHOLDER,
} from "../../consts";
import { IContactDetailsFormData } from "../../types";

interface IProps {
  onSubmit: (submittedData: IContactDetailsFormData) => void;
}

const ContactDetailsForm = ({ onSubmit }: IProps) => {
  const resolver = useYupValidationResolver(contactDetailsFormSchema);
  const {
    control,
    register,
    handleSubmit,
    formState: { errors },
  } = useForm({ resolver });

  return (
    <>
      <form onSubmit={handleSubmit(onSubmit)}>
        <div className="gform_body">
          <FormFieldsContainer>
            <Controller
              control={control}
              defaultValue={DEFAULT_TITLE_SELECT_OPTION.value}
              name="title"
              render={({ field: { onChange, value, name } }) => (
                <SelectField
                  label={"Title"}
                  name={name}
                  required
                  options={TITLE_SELECT_OPTIONS}
                  value={value}
                  onChange={onChange}
                  errors={errors}
                />
              )}
            />
            <TextInput
              label="First Name"
              required
              errors={errors}
              {...register("firstName")}
            />
            <TextInput
              label="Last Name"
              required
              errors={errors}
              {...register("lastName")}
            />
            <TextInput
              label="Business Email"
              required
              errors={errors}
              {...register("businessEmail")}
            />
            <TextInput
              label="Mobile Phone"
              required
              errors={errors}
              placeholder={MOBILE_PHONE_PLACEHOLDER}
              {...register("businessPhoneNumber")}
            />
            <Button type="submit">Next step</Button>
          </FormFieldsContainer>
        </div>
      </form>
    </>
  );
};

export default memo(ContactDetailsForm);
