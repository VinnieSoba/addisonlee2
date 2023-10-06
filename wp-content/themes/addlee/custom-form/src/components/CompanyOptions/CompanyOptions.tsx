import React, { HTMLAttributes, memo } from "react";
import { ICompanyOptionLink } from "../../types";
import { StyledActionLink, StyledOptionDivider } from "./CompanyOptions.styles";

interface IProps extends HTMLAttributes<HTMLDivElement> {
  options: ICompanyOptionLink[];
}

const CompanyOptions = ({ options, ...passedProps }: IProps) => {
  return (
    <div className="company-options" {...passedProps}>
      {options.map(({ label, onClick }, optionIndex) => (
        <>
          <StyledActionLink onClick={onClick} key={label}>
            {label}
          </StyledActionLink>
          {optionIndex !== options.length - 1 && (
            <StyledOptionDivider>{" | "}</StyledOptionDivider>
          )}
        </>
      ))}
    </div>
  );
};

export default memo(CompanyOptions);
