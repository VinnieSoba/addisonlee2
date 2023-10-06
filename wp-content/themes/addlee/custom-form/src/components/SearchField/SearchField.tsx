import React, { InputHTMLAttributes, memo, useState } from "react";
import { ICompanyModel } from "../../models";
import CompanySearch from "./CompanySearch";
import SearchCompanyOptions from "./SearchCompanyOptions";
import GetInTouchButton from "./GetInTouchButton";
import Form from "../Form";

interface IProps
  extends Omit<InputHTMLAttributes<HTMLInputElement>, "onChange"> {
  required?: boolean;
  onChange?: (value: ICompanyModel) => void;
  onSelectForeignCompanyForm?: () => void;
  searchByCompanyName?: boolean;
  onSearchMethodToggle: () => void;
}

const SearchField = ({
  required,
  onChange,
  onSelectForeignCompanyForm,
  onSearchMethodToggle,
  searchByCompanyName,
  ...inputProps
}: IProps) => {
  return (
    <Form>
      <SearchCompanyOptions
        onSearchMethodToggle={onSearchMethodToggle}
        searchByCompanyName={searchByCompanyName}
        onSelectForeignCompanyForm={onSelectForeignCompanyForm}
      />
      <CompanySearch
        label="company search"
        onChange={onChange}
        searchByCompanyName={searchByCompanyName}
        onSelectForeignCompanyForm={onSelectForeignCompanyForm}
        {...inputProps}
      />
      <GetInTouchButton />
    </Form>
  );
};

export default memo(SearchField);
