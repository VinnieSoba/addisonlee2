import React, { memo } from "react";
import RequiredMark from "../RequiredMark";
import { StyledLabel } from "./InputLabel.styles";

interface IProps {
  children: React.ReactNode;
  fieldId?: string;
  fieldIsRequired?: boolean;
}

const InputLabel = ({ fieldId, children, fieldIsRequired }: IProps) => {
  return (
    <StyledLabel className="gfield_label" htmlFor={fieldId}>
      {children}
      {fieldIsRequired && <RequiredMark />}
    </StyledLabel>
  );
};

export default memo(InputLabel);
