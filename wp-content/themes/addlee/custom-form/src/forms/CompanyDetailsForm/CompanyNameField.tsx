import React, { memo } from "react";
import { HTMLAttributes } from "react";
import { UseFormRegister } from "react-hook-form";
import { ICompanyModel } from "../../models";
import { TextInput, FloatingActionLink, DetailsList } from "../../components";
import CompanyOptions from "../../components/CompanyOptions";

interface IProps extends HTMLAttributes<HTMLInputElement> {
  company: ICompanyModel;
  onSearchAgain: () => void;
  fieldRegister: UseFormRegister<any>;
}

const CompanyNameField = ({
  company,
  onSearchAgain,
  fieldRegister,
  ...inputProps
}: IProps) => {
  const companyName = company?.primaryName;
  const displayCompanyName = !!companyName;

  return (
    <>
      {displayCompanyName ? (
        <>
          <FloatingActionLink onClick={onSearchAgain}>
            Search again
          </FloatingActionLink>
          <DetailsList title="Company name">
            <div>{companyName}</div>
          </DetailsList>
        </>
      ) : (
        <>
          <CompanyOptions
            options={[{ label: "Company search", onClick: onSearchAgain }]}
          />
          <TextInput
            label="Company name"
            placeholder="Enter company name"
            {...fieldRegister("companyName")}
            {...inputProps}
          />
        </>
      )}
    </>
  );
};

export default memo(CompanyNameField);
