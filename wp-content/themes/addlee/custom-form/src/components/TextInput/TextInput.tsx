import React, { InputHTMLAttributes, memo } from "react";
import RequiredMark from "../RequiredMark";
import uniqueString from "unique-string";
import FieldValidationMessage from "../FieldValidationMessage";
import InputLabel from "../InputLabel";

interface IProps extends InputHTMLAttributes<HTMLInputElement> {
  name: string;
  label: string;
  required?: boolean;
  errors?: any;
}

const TextInput = ({
  name,
  label,
  required,
  errors = {},
  ...inputProps
}: IProps) => {
  const uniqueId = uniqueString();

  return (
    <li className="gfield">
      <InputLabel fieldId={uniqueId} fieldIsRequired={required}>
        {label}
      </InputLabel>
      <div className="ginput_container ginput_container_text">
        <input
          name={name}
          type="text"
          className="medium"
          id={uniqueId}
          {...inputProps}
        />
      </div>
      <FieldValidationMessage validationError={errors[name]} />
    </li>
  );
};

export default memo(TextInput);
