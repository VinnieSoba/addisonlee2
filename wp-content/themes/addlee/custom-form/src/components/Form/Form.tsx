import React, { FormHTMLAttributes, memo } from "react";
import { StyledInputList } from "./Form.styles";
import Button from "../Button";

interface IProps extends FormHTMLAttributes<HTMLFormElement> {
  children: React.ReactNode | React.ReactNodeArray;
  withSubmitButton?: boolean;
}

const Form = ({ children, withSubmitButton, ...formProps }: IProps) => {
  return (
    <form className="gf_browser_chrome gform_wrapper" {...formProps}>
      <div className="gform_body">
        <StyledInputList className="gform_fields">{children}</StyledInputList>
      </div>
      <div className="gform_footer">
        {withSubmitButton && <Button type="submit">Submit</Button>}
      </div>
    </form>
  );
};

export default memo(Form);
