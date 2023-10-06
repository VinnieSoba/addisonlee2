import React, { memo } from "react";
import { useForm, Controller } from "react-hook-form";
import {
  TITLE_SELECT_OPTIONS,
  DEFAULT_TITLE_SELECT_OPTION,
  MOBILE_PHONE_PLACEHOLDER_SHORT,
} from "../../consts";
import {
  FormValidationMessage,
  Button,
  TextInput,
  FormFieldsContainer,
  TextareaField,
  Modal,
  SelectField,
} from "../../components";
import isEmpty from "lodash/isEmpty";
import { useYupValidationResolver } from "../../utils";
import { getInTouchFormSchema } from "./GetInTouchForm.schema";
import { GetInTouchFormMapper } from "./GetInTouchForm.mapper";
import { IGetInTouchForm } from "../../models";
import api from "../../api";

interface IProps {
  onClose?: () => void;
  onSubmit?: () => void;
}

const GetInTouchForm = ({ onClose, onSubmit: onSubmitCallback }: IProps) => {
  const resolver = useYupValidationResolver(getInTouchFormSchema);
  const {
    register,
    handleSubmit,
    control,
    formState: { errors },
  } = useForm({ resolver });

  const onSubmit = (formData: IGetInTouchForm) => {
    const mappedFormData = GetInTouchFormMapper.mapModelToDto(formData);
    api.sendGetInTouchFormData(mappedFormData);
    onSubmitCallback();
  };

  return (
    <Modal onClose={onClose}>
      <form
        className="gf_browser_chrome gform_wrapper"
        onSubmit={handleSubmit(onSubmit)}
        style={{ marginTop: "46px" }}
      >
        {!isEmpty(errors) && (
          <FormValidationMessage>
            There was a problem with your submission. Errors have been
            highlighted below.
          </FormValidationMessage>
        )}
        <div className="gform_body" style={{ padding: "10px" }}>
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
              {...register("firstName")}
              errors={errors}
              required
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
              label="Business Phone Number"
              required
              errors={errors}
              placeholder={MOBILE_PHONE_PLACEHOLDER_SHORT}
              {...register("businessPhoneNumber")}
            />
            <TextInput label="Company Name" {...register("companyName")} />
            <Controller
              control={control}
              name="comments"
              render={({ field: { onChange, value, name } }) => (
                <TextareaField
                  label="Comments"
                  required
                  errors={errors}
                  name={name}
                  value={value}
                  onChange={onChange}
                />
              )}
            />
            <Button type="submit">Submit</Button>
          </FormFieldsContainer>
        </div>
      </form>
    </Modal>
  );
};

export default memo(GetInTouchForm);
