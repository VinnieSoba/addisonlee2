import React, { memo } from "react";
import { HTMLAttributes } from "react";

interface IProps extends HTMLAttributes<HTMLInputElement> {
  name: string;
  label: string;
}

const SimpleTextInput = ({ name, label, ...inputProps }: IProps) => {
  return (
    <span>
      <input type="text" id={name} name={name} {...inputProps} />
      <label htmlFor={name}>{label}</label>
    </span>
  );
};

export default memo(SimpleTextInput);
