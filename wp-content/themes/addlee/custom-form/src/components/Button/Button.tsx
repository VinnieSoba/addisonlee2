import React, { ButtonHTMLAttributes, memo } from "react";
import { StyledWrapper } from "./Button.styles";

interface IProps extends ButtonHTMLAttributes<HTMLButtonElement> {}

const Button = ({ children, ...passedProps }: IProps) => {
  return (
    <StyledWrapper className="gform_button button" {...passedProps}>
      {children}
    </StyledWrapper>
  );
};

export default memo(Button);
