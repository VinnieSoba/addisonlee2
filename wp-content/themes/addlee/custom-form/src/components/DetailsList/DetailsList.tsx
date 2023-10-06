import React, { HTMLAttributes, memo } from "react";
import { StyledWrapper } from "./DetailsList.styles";

interface IProps extends HTMLAttributes<HTMLDivElement> {
  title?: string;
  children: React.ReactNode | React.ReactChild;
}

const DetailsList = ({ title, children, ...divProps }: IProps) => {
  return (
    <StyledWrapper {...divProps}>
      {title && <h4>{title}</h4>}
      {children}
    </StyledWrapper>
  );
};

export default memo(DetailsList);
