import React, { memo, useMemo } from "react";
import { SEARCH_OPTION_LABELS } from "./SearchField.consts";
import CompanyOptions from "../CompanyOptions";

interface IProps {
  onSearchMethodToggle: () => void;
  searchByCompanyName: boolean;
  onSelectForeignCompanyForm?: () => void;
}

const SearchCompanyOptions = ({
  onSearchMethodToggle,
  searchByCompanyName,
  onSelectForeignCompanyForm,
}: IProps) => {
  const searchMethodToggleLabel = useMemo(
    () =>
      searchByCompanyName
        ? SEARCH_OPTION_LABELS.searchByRegNumber
        : SEARCH_OPTION_LABELS.searchByName,
    [searchByCompanyName]
  );

  return (
    <CompanyOptions
      options={[
        {
          label: "Not a UK company?",
          onClick: onSelectForeignCompanyForm,
        },
        {
          label: searchMethodToggleLabel,
          onClick: onSearchMethodToggle,
        },
      ]}
    />
  );
};

export default memo(SearchCompanyOptions);
