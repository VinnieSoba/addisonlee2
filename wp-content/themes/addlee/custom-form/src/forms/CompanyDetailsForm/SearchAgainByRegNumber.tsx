import React, { memo } from "react";
import { CompanyOptions } from "../../components";

interface IProps {
  onClick: () => void;
}

const SearchAgainByRegNumber = ({ onClick }: IProps) => {
  return (
    <CompanyOptions
      options={[
        {
          label: "Search company reg number",
          onClick,
        },
      ]}
      style={{ marginBottom: "40px" }}
    />
  );
};

export default memo(SearchAgainByRegNumber);
