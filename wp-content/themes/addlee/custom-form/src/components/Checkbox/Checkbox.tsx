import React, { InputHTMLAttributes, memo } from "react";
import uniqueString from "unique-string";
import FieldValidationMessage from "../FieldValidationMessage";
import { StyledLabel } from "./Checkbox.styles";

interface IProps extends InputHTMLAttributes<HTMLInputElement> {
  children: React.ReactNode;
  errors?: any;
  name: string;
  required: boolean;
}

const Checkbox = ({
  name,
  errors,
  children,
  required,
  ...checkboxProps
}: IProps) => {
  const fieldIndex = uniqueString();

  return (
    <li className="gfield terms">
      <ul className="gfield_checkbox">
        <li>
          <input
            name={name}
            type="checkbox"
            id={fieldIndex}
            {...checkboxProps}
          />
          <StyledLabel htmlFor={fieldIndex} required={required}>
            {children}
          </StyledLabel>
        </li>
      </ul>

      <FieldValidationMessage validationError={errors[name]} />
    </li>
  );
};

export default memo(Checkbox);
