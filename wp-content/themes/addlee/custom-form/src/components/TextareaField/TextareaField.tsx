import React, { ChangeEvent, HTMLProps, memo, useState } from "react";
import { sliceTextToLength } from "../../utils";
import FieldValidationMessage from "../FieldValidationMessage";
import InputLabel from "../InputLabel";

interface IProps extends Omit<HTMLProps<HTMLTextAreaElement>, "onChange"> {
  required?: boolean;
  label: string;
  maxCharactersLength?: number;
  errors?: any;
  name: string;
  value?: string;
  onChange: (value: string) => void;
}

const TextareaField = ({
  required,
  label,
  maxCharactersLength = 250,
  errors = {},
  name,
  value,
  onChange,
  ...textareaProps
}: IProps) => {
  const handleChange = (event: ChangeEvent<HTMLTextAreaElement>) => {
    const typedValue = event.target.value;
    const formatedValue =
      typedValue.length <= maxCharactersLength
        ? typedValue
        : sliceTextToLength(typedValue, maxCharactersLength);

    onChange(formatedValue);
  };

  return (
    <li className="gfield">
      <InputLabel fieldIsRequired={required}>{label}</InputLabel>
      <div className="ginput_container ginput_container_textarea">
        <textarea
          name={name}
          className="textarea medium"
          value={value}
          onChange={handleChange}
          rows={10}
          cols={50}
          maxLength={maxCharactersLength}
          {...textareaProps}
        />
        <div className="charleft ginput_counter">{`${
          value?.length || 0
        } of ${maxCharactersLength} max characters`}</div>
      </div>
      <FieldValidationMessage validationError={errors[name]} />
    </li>
  );
};

export default memo(TextareaField);
