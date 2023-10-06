import React, { memo } from "react";

interface IProps {
  children: React.ReactNode;
}

const FormValidationMessage = ({ children }: IProps) => {
  return <div className="validation_error">{children}</div>;
};

export default memo(FormValidationMessage);
