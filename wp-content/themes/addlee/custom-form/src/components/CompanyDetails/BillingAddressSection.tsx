import React, { memo } from "react";
import DetailsList from "../DetailsList";
import SingleDetail from "../SingleDetail";

interface IProps {
  address: string;
  city: string;
  postalCode: string;
}

const BillingAddressSection = ({ address, city, postalCode }: IProps) => {
  return (
    <DetailsList>
      <SingleDetail label={address} />
      <SingleDetail label={city} />
      <SingleDetail label={postalCode} />
    </DetailsList>
  );
};

export default memo(BillingAddressSection);
