import React, { memo } from "react";
import { IOption } from "../../types/IOption";
import Select from "../Select";
import FieldValidationMessage from "../FieldValidationMessage";
import InputLabel from "../InputLabel";

interface IProps {
  label: string;
  required?: boolean;
  value?: string;
  options?: IOption[];
  errors?: any;
  onChange?: (optionValue?: string) => void;
  name?: string;
}

const SelectField = ({
  label,
  required,
  value,
  options = [],
  onChange,
  errors = {},
  name,
}: IProps) => {
  return (
    <li className="gfield">
      <InputLabel fieldIsRequired={required}>{label}</InputLabel>
      <div className="ginput_container ginput_container_select">
        <Select options={options} onChange={onChange} value={value} />
      </div>
      <FieldValidationMessage validationError={errors[name]} />
    </li>
  );
};

export default memo(SelectField);
